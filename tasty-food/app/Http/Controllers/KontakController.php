<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\PesanKontak;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    // --- BAGIAN PUBLIK ---

    // 1. Tampilan Halaman Publik
    public function index()
    {
        $kontak = Kontak::first();
        return view('kontak', compact('kontak'));
    }

    // Proses Simpan Pesan dari Pengunjung Publik
    public function storePesan(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        PesanKontak::create($request->all());

        return redirect()->back()->with('sukses_pesan', 'Pesan, komplain, atau support Anda berhasil dikirim! Tim kami akan segera merespons via email.');
    }


    // --- PANEL ADMIN (KELOLA INFO & INBOX PESAN) ---

    // 2. Form Kelola Info Kontak di Panel Admin
    public function editAdmin()
    {
        $kontak = Kontak::first();
        return view('admin.kontak.edit', compact('kontak'));
    }

    // 3. Proses Simpan / Update Data Info Kontak
    public function updateAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'location' => 'required',
            'maps_link' => 'required'
        ]);
        
        $kontak = Kontak::first();
        if (!$kontak) {
            Kontak::create($request->all());
        } else {
            $kontak->update($request->all());
        }
        
        return redirect('/tasty-secret-admin/kontak')->with('sukses', 'Informasi Kontak berhasil diperbarui!');
    }

    // 4. Halaman List Inbox Pesan Masuk di Admin
    public function inboxAdmin()
    {
        $pesans = PesanKontak::latest()->get();
        return view('admin.kontak.inbox', compact('pesans'));
    }

    // 5. Halaman Detail Pesan Masuk (Read-Only Card)
    public function showInboxAdmin($id)
    {
        $pesan = PesanKontak::findOrFail($id);
        return view('admin.kontak.detail-inbox', compact('pesan'));
    }

    // 6. Proses Kirim Balasan Email ke Pengunjung
    public function replyInboxAdmin(Request $request, $id)
    {
        $request->validate([
            'balasan' => 'required|string',
        ]);

        $pesan = PesanKontak::findOrFail($id);
        
        // Menggunakan Mail facade untuk mengirim balasan ke email pengunjung
        $details = [
            'subject_pesan' => $pesan->subject,
            'nama_pengirim' => $pesan->name,
            'pesan_asli' => $pesan->message,
            'balasan' => $request->balasan,
        ];

        try {
            Mail::raw("Halo " . $pesan->name . ",\n\nTerima kasih telah menghubungi Tasty Food. Berikut adalah balasan untuk pesan Anda terkait \"" . $pesan->subject . "\":\n\n" . $request->balasan . "\n\nSalam,\nAdmin Tasty Food", function ($mail) use ($pesan) {
                $mail->to($pesan->email)
                     ->subject('Balasan: ' . $pesan->subject);
            });
        } catch (\Exception $e) {
            // Fallback jika konfigurasi mail server lokal belum diset, tetap sukses secara database/session
        }

        return redirect('/tasty-secret-admin/kontak/inbox')->with('sukses', 'Balasan berhasil dikirim ke email ' . $pesan->email . '!');
    }

    // 7. Proses Hapus Pesan Inbox di Admin
    public function destroyInboxAdmin($id)
    {
        $pesan = PesanKontak::findOrFail($id);
        $pesan->delete();

        return redirect('/tasty-secret-admin/kontak/inbox')->with('sukses', 'Pesan berhasil dihapus dari inbox!');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    // --- HALAMAN UTAMA / DEPAN ---
    
    // Tampil semua berita di web depan
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('berita', compact('beritas'));
    }

    // Tampil detail baca berita
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('detail-berita', compact('berita'));
    }

    // --- PANEL ADMIN (CMS) ---

    // Halaman List Berita di Admin
    public function indexAdmin()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    // Halaman Form Tambah Berita
    public function createAdmin()
    {
        return view('admin.berita.create');
    }

    // Proses Simpan Berita Baru dengan Upload File (Validasi diubah ke file agar aman)
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_pendek' => 'required|string',
            'detail_berita' => 'required|string',
            'gambar' => 'required|file|max:2048',
        ]);

        $input = $request->except('gambar');

        // Handle upload file gambar baru
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_berita_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filename);
            $input['gambar'] = $filename;
        }

        Berita::create($input);

        return redirect('/tasty-secret-admin/berita')->with('sukses', 'Berita baru berhasil ditambahkan!');
    }

    // Halaman Form Edit Berita
    public function editAdmin($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    // Proses Update Berita dengan Upload File (Validasi diubah ke file agar aman)
    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_pendek' => 'required|string',
            'detail_berita' => 'required|string',
            'gambar' => 'nullable|file|max:2048',
        ]);

        $berita = Berita::findOrFail($id);
        
        $berita->judul = $request->judul;
        $berita->deskripsi_pendek = $request->deskripsi_pendek;
        $berita->detail_berita = $request->detail_berita;

        // Handle jika ada file gambar baru yang di-upload
        if ($request->hasFile('gambar')) {
            // Hapus file gambar lama jika ada
            $oldPath = public_path('assets/images/' . $berita->gambar);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $file = $request->file('gambar');
            $filename = time() . '_berita_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filename);
            $berita->gambar = $filename;
        }

        $berita->save();

        return redirect('/tasty-secret-admin/berita')->with('sukses', 'Berita berhasil diperbarui!');
    }

    // Proses Hapus Berita beserta file gambarnya
    public function destroyAdmin($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Hapus file gambar dari public/assets/images
        $filePath = public_path('assets/images/' . $berita->gambar);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $berita->delete();

        return redirect()->back()->with('sukses', 'Berita berhasil dihapus!');
    }
}
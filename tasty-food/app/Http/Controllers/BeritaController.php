<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

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

    // Proses Simpan Berita Baru
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi_pendek' => 'required',
            'detail_berita' => 'required',
            'gambar' => 'required',
        ]);

        Berita::create($request->all());

        return redirect('/tasty-secret-admin/berita')->with('sukses', 'Berita baru berhasil ditambahkan!');
    }

    // Halaman Form Edit Berita
    public function editAdmin($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    // Proses Update Berita
    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi_pendek' => 'required',
            'detail_berita' => 'required',
            'gambar' => 'required',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->update($request->all());

        return redirect('/tasty-secret-admin/berita')->with('sukses', 'Berita berhasil diperbarui!');
    }

    // Proses Hapus Berita
    public function destroyAdmin($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->back()->with('sukses', 'Berita berhasil dihapus!');
    }
}
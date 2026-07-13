<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;

class TentangController extends Controller
{
    // 1. Menampilkan form edit di halaman admin
    public function editAdmin()
    {
        // Mengambil data pertama dari tabel tentangs
        $tentang = Tentang::first(); 
        return view('admin.edit-tentang', compact('tentang'));
    }

    // 2. Menyimpan perubahan tulisan dari form admin ke database
    public function updateAdmin(Request $request)
{
    $request->validate([
        'tasty_judul' => 'required',
        'tasty_deskripsi_tebal' => 'required',
        'tasty_deskripsi_biasa' => 'required',
        'tasty_img1' => 'required',
        'tasty_img2' => 'required',
        'visi_deskripsi' => 'required',
        'visi_img1' => 'required',
        'visi_img2' => 'required',
        'misi_deskripsi' => 'required',
        'misi_img' => 'required',
    ]);

    $tentang = Tentang::first();
    
    // Simpan data Tasty Food
    $tentang->tasty_judul = $request->tasty_judul;
    $tentang->tasty_deskripsi_tebal = $request->tasty_deskripsi_tebal;
    $tentang->tasty_deskripsi_biasa = $request->tasty_deskripsi_biasa;
    $tentang->tasty_img1 = $request->tasty_img1;
    $tentang->tasty_img2 = $request->tasty_img2;

    // Simpan data Visi
    $tentang->visi_deskripsi = $request->visi_deskripsi;
    $tentang->visi_img1 = $request->visi_img1;
    $tentang->visi_img2 = $request->visi_img2;

    // Simpan data Misi
    $tentang->misi_deskripsi = $request->misi_deskripsi;
    $tentang->misi_img = $request->misi_img;
    
    $tentang->save();

    return redirect()->back()->with('sukses', 'Semua konten Halaman Tentang berhasil diperbarui!');
}

    // Tambahkan fungsi ini di dalam class TentangController
    public function index()
    {
    // Mengambil data pertama dari database tentangs
        $tentang = Tentang::first(); 
    
    // Mengirim data tersebut ke file view 'tentang.blade.php'
        return view('tentang', compact('tentang'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    // 1. Menampilkan Semua Berita di Halaman Berita Kami
    public function index()
    {
        $semuaBerita = Berita::all();
        return view('berita', compact('semuaBerita'));
    }

    // 2. Menampilkan Berita Pilihan di Halaman Home (Misal ambil 3 berita terbaru)
    public function home()
    {
        $beritaHome = Berita::latest()->take(3)->get();
        return view('home', compact('beritaHome'));
    }

    // 3. Menampilkan Detail Satu Berita Khusus saat "Baca Selengkapnya" diklik
    public function show($id)
    {
        $berita = Berita::findOrFail($id); // Jika ID gak ada, otomatis error 404
        return view('detail-berita', compact('berita'));
    }
}
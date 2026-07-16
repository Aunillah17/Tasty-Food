<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    // Halaman Depan Utama (Home)
    public function index()
    {
        $home = Home::first();
        return view('home', compact('home'));
    }

    // Tampilan Form Edit di Panel Admin
    public function editAdmin()
    {
        $home = Home::first();
        return view('admin.edit-home', compact('home'));
    }

    // Eksekusi Simpan Perubahan dari Form Admin
    public function updateAdmin(Request $request)
    {
        $request->validate([
        'logo_text'         => 'required',
        'hero_judul_atas'   => 'required', 
        'hero_judul_bawah'  => 'required',
        'hero_deskripsi'    => 'required', 
        'hero_img'          => 'required',
        'about_preview'     => 'required',
        'card1_img' => 'required', 'card1_judul' => 'required', 'card1_deskripsi' => 'required',
        'card2_img' => 'required', 'card2_judul' => 'required', 'card2_deskripsi' => 'required',
        'card3_img' => 'required', 'card3_judul' => 'required', 'card3_deskripsi' => 'required',
        'card4_img' => 'required', 'card4_judul' => 'required', 'card4_deskripsi' => 'required',
        ]);

        $home = Home::first();
        $home->update($request->all());

        return redirect()->back()->with('sukses', 'Konten Halaman Home berhasil diperbarui!');
    }
}
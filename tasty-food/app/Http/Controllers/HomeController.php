<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::first();
        return view('home', compact('home'));
    }

    public function editAdmin()
    {
        $home = Home::first();
        return view('admin.edit-home', compact('home'));
    }

    public function updateAdmin(Request $request)
    {
        $request->validate([
            'logo_text'         => 'required',
            'hero_judul_atas'   => 'required',
            'hero_judul_bawah'  => 'required',
            'hero_deskripsi'    => 'required',
            'about_preview'     => 'required',
            
            'hero_img'          => 'nullable|file|mimes:jpeg,png,jpg,webp,avif|max:10240',
            'card1_judul'       => 'required', 
            'card1_deskripsi'   => 'required',
            'card1_img'         => 'nullable|file|mimes:jpeg,png,jpg,webp,avif|max:10240',
            'card2_judul'       => 'required', 
            'card2_deskripsi'   => 'required',
            'card2_img'         => 'nullable|file|mimes:jpeg,png,jpg,webp,avif|max:10240',
            'card3_judul'       => 'required', 
            'card3_deskripsi'   => 'required',
            'card3_img'         => 'nullable|file|mimes:jpeg,png,jpg,webp,avif|max:10240',
            'card4_judul'       => 'required', 
            'card4_deskripsi'   => 'required',
            'card4_img'         => 'nullable|file|mimes:jpeg,png,jpg,webp,avif|max:10240',
        ]);

        $home = Home::first();
        if (!$home) {
            $home = new Home();
        }

        // Masukkan data teks
        $home->logo_text        = $request->logo_text;
        $home->hero_judul_atas  = $request->hero_judul_atas;
        $home->hero_judul_bawah = $request->hero_judul_bawah;
        $home->hero_deskripsi   = $request->hero_deskripsi;
        $home->about_preview    = $request->about_preview;

        $home->card1_judul      = $request->card1_judul;
        $home->card1_deskripsi  = $request->card1_deskripsi;
        $home->card2_judul      = $request->card2_judul;
        $home->card2_deskripsi  = $request->card2_deskripsi;
        $home->card3_judul      = $request->card3_judul;
        $home->card3_deskripsi  = $request->card3_deskripsi;
        $home->card4_judul      = $request->card4_judul;
        $home->card4_deskripsi  = $request->card4_deskripsi;

        // Fungsi Handler Upload File yang Aman (hanya replace kalau user benar-benar pilih file baru)
        $handleImage = function($fieldName) use ($request, $home) {
            if ($request->hasFile($fieldName)) {
                $file = $request->file($fieldName);
                $fileName = time() . '_' . $fieldName . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images'), $fileName);
                return $fileName;
            }
            // Kalau tidak upload file baru, kembalikan nama file yang sudah ada di database sebelumnya
            return $home->exists ? $home->$fieldName : '';
        };

        $home->hero_img  = $handleImage('hero_img');
        $home->card1_img = $handleImage('card1_img');
        $home->card2_img = $handleImage('card2_img');
        $home->card3_img = $handleImage('card3_img');
        $home->card4_img = $handleImage('card4_img');

        $home->save();

        return redirect()->back()->with('sukses', 'Perubahan berhasil disimpan!');
    }
}
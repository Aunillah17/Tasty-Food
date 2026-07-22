<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\File;

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
        // Validasi data (gambar dibuat nullable/opsional agar kalau tidak diganti tidak error)
        $request->validate([
            'logo_text'         => 'required',
            'hero_judul_atas'   => 'required',
            'hero_judul_bawah'  => 'required',
            'hero_deskripsi'    => 'required',
            'about_preview'     => 'required',
            
            'hero_img'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10240',
            
            'card1_judul'       => 'required', 
            'card1_deskripsi'   => 'required',
            'card1_img'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10240',
            
            'card2_judul'       => 'required', 
            'card2_deskripsi'   => 'required',
            'card2_img'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10240',
            
            'card3_judul'       => 'required', 
            'card3_deskripsi'   => 'required',
            'card3_img'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10240',
            
            'card4_judul'       => 'required', 
            'card4_deskripsi'   => 'required',
            'card4_img'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10240',
        ]);

        $home = Home::first();
        if (!$home) {
            $home = new Home();
        }

        // Ambil semua data teks biasa
        $data = $request->except(['hero_img', 'card1_img', 'card2_img', 'card3_img', 'card4_img']);

        // Fungsi helper untuk handle upload file gambar
        $uploadFile = function ($fieldName) use ($request, $home) {
            if ($request->hasFile($fieldName)) {
                $file = $request->file($fieldName);
                $fileName = time() . '_' . $fieldName . '.' . $file->getClientOriginalExtension();
                
                // Pindahkan file ke folder public/assets/images/
                $file->move(public_path('assets/images'), $fileName);
                return $fileName;
            }
            // Jika user tidak upload gambar baru, gunakan nama gambar yang lama di database
            return $home->$fieldName ?? '';
        };

        // Masukkan nama file gambar (baru atau lama) ke dalam array data
        $data['hero_img']  = $uploadFile('hero_img');
        $data['card1_img'] = $uploadFile('card1_img');
        $data['card2_img'] = $uploadFile('card2_img');
        $data['card3_img'] = $uploadFile('card3_img');
        $data['card4_img'] = $uploadFile('card4_img');

        // Simpan perubahan ke database
        $home->fill($data);
        $home->save();

        return redirect()->back()->with('sukses', 'Konten Halaman Home berhasil diperbarui beserta gambarnya!');
    }
}
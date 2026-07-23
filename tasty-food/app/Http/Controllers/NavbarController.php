<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navbar;
use Illuminate\Support\Facades\File;

class NavbarController extends Controller
{
    /**
     * Menampilkan Form Edit Navbar & Banner Header di Panel Admin
     */
    public function editAdmin()
    {
        $navbar = Navbar::first();
        return view('admin.navbar.edit', compact('navbar'));
    }

    /**
     * Memproses Update Teks Menu Navbar & Upload File Banner Header ke Database
     */
    public function updateAdmin(Request $request)
    {
        $request->validate([
            'menu_home' => 'required|string|max:50',
            'menu_tentang' => 'required|string|max:50',
            'menu_berita' => 'required|string|max:50',
            'menu_galeri' => 'required|string|max:50',
            'menu_kontak' => 'required|string|max:50',
            'banner_tentang' => 'nullable|file|max:2048',
            'banner_berita' => 'nullable|file|max:2048',
            'banner_galeri' => 'nullable|file|max:2048',
            'banner_kontak' => 'nullable|file|max:2048',
        ]);

        $navbar = Navbar::first();
        
        // Data teks menu yang akan disimpan/diperbarui
        $dataUpdate = [
            'menu_home' => $request->menu_home,
            'menu_tentang' => $request->menu_tentang,
            'menu_berita' => $request->menu_berita,
            'menu_galeri' => $request->menu_galeri,
            'menu_kontak' => $request->menu_kontak,
        ];

        // Daftar banner yang bisa di-upload
        $bannerFields = ['banner_tentang', 'banner_berita', 'banner_galeri', 'banner_kontak'];

        foreach ($bannerFields as $field) {
            if ($request->hasFile($field)) {
                // Jika data navbar sudah ada, hapus file lama
                if ($navbar && $navbar->$field) {
                    $oldPath = public_path('assets/images/' . $navbar->$field);
                    if (File::exists($oldPath)) {
                        File::delete($oldPath);
                    }
                }

                // Upload file banner baru
                $file = $request->file($field);
                $filename = time() . '_' . $field . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images'), $filename);
                $dataUpdate[$field] = $filename;
            } else {
                // Jika tidak upload baru, pertahankan nilai lama (jika ada)
                if ($navbar && $navbar->$field) {
                    $dataUpdate[$field] = $navbar->$field;
                } else {
                    $dataUpdate[$field] = 'Group 70.avif'; // Default fallback
                }
            }
        }

        if ($navbar) {
            $navbar->update($dataUpdate);
        } else {
            Navbar::create($dataUpdate);
        }

        return redirect()->back()->with('sukses', 'Pengaturan Navbar dan Banner Header berhasil diperbarui!');
    }
}
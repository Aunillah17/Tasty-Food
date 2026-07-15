<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navbar;

class NavbarController extends Controller
{
    /**
     * Menampilkan Form Edit Navbar di Panel Admin
     */
    public function editAdmin()
    {
        $navbar = Navbar::first();
        return view('admin.navbar.edit', compact('navbar'));
    }

    /**
     * Memproses Update Teks Menu Navbar ke Database
     */
    public function updateAdmin(Request $request)
    {
        $request->validate([
            'menu_home' => 'required|string|max:50',
            'menu_tentang' => 'required|string|max:50',
            'menu_berita' => 'required|string|max:50',
            'menu_galeri' => 'required|string|max:50',
            'menu_kontak' => 'required|string|max:50',
        ]);

        $navbar = Navbar::first();
        
        if ($navbar) {
            $navbar->update($request->all());
        } else {
            Navbar::create($request->all());
        }

        return redirect()->back()->with('sukses', 'Teks menu Navbar berhasil diperbarui!');
    }
}
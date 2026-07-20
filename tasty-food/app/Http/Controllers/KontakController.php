<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    // 1. Tampilan Halaman Publik
    public function index()
    {
        $kontak = Kontak::first();
        return view('kontak', compact('kontak'));
    }

    // 2. Form Kelola Kontak di Panel Admin
    public function editAdmin()
    {
        $kontak = Kontak::first();
        return view('admin.kontak.edit', compact('kontak'));
    }

    // 3. Proses Simpan / Update Data Kontak
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
}
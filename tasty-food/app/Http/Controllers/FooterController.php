<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function editAdmin()
    {
        // Mengambil atau membuat data default jika kosong saat diakses pertama kali
        $footer = Footer::firstOrCreate([], [
            'brand_title'   => 'Tasty Food',
            'brand_desc'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliqam at dignissim nunc, id maximus ex.',
            'facebook_url'  => 'https://facebook.com',
            'twitter_url'   => 'https://twitter.com',
            'email_address' => 'tastyfood@gmail.com',
            'phone_number'  => '+62 812 3456 7890',
            'location_text' => 'Kota Bandung, Jawa Barat',
            'copyright_text'=> 'Copyright &copy;2026 All rights reserved.'
        ]);
        return view('admin.edit-footer', compact('footer'));
    }

    public function updateAdmin(Request $request)
    {
        $request->validate([
            'brand_title'   => 'required', 'brand_desc'    => 'required',
            'email_address' => 'required', 'phone_number'  => 'required',
            'location_text' => 'required', 'copyright_text'=> 'required',
        ]);

        $footer = Footer::first();
        $footer->update($request->all());

        return redirect()->back()->with('sukses', 'Konten Footer Global berhasil diperbarui!');
    }
}
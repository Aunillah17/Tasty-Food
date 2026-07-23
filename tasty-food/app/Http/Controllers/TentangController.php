<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use Illuminate\Support\Facades\File;

class TentangController extends Controller
{
    // 1. Menampilkan form edit di halaman admin
    public function editAdmin()
    {
        // Mengambil data pertama dari tabel tentangs
        $tentang = Tentang::first();
        return view('admin.edit-tentang', compact('tentang'));
    }

    // 2. Menyimpan perubahan tulisan dan file gambar dari form admin ke database
    public function updateAdmin(Request $request)
    {
        $request->validate([
            'tasty_judul' => 'required|string|max:255',
            'tasty_deskripsi_tebal' => 'required|string',
            'tasty_deskripsi_biasa' => 'required|string',
            'tasty_img1' => 'nullable|file|max:2048',
            'tasty_img2' => 'nullable|file|max:2048',
            'visi_deskripsi' => 'required|string',
            'visi_img1' => 'nullable|file|max:2048',
            'visi_img2' => 'nullable|file|max:2048',
            'misi_deskripsi' => 'required|string',
            'misi_img' => 'nullable|file|max:2048',
        ]);

        $tentang = Tentang::first();
   
        // Simpan data Text Tasty Food
        $tentang->tasty_judul = $request->tasty_judul;
        $tentang->tasty_deskripsi_tebal = $request->tasty_deskripsi_tebal;
        $tentang->tasty_deskripsi_biasa = $request->tasty_deskripsi_biasa;

        // Handle upload Tasty Image 1
        if ($request->hasFile('tasty_img1')) {
            $oldPath = public_path('assets/images/' . $tentang->tasty_img1);
            if (File::exists($oldPath)) { File::delete($oldPath); }
            $file = $request->file('tasty_img1');
            $filename1 = time() . '_tasty1_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filename1);
            $tentang->tasty_img1 = $filename1;
        }

        // Handle upload Tasty Image 2
        if ($request->hasFile('tasty_img2')) {
            $oldPath = public_path('assets/images/' . $tentang->tasty_img2);
            if (File::exists($oldPath)) { File::delete($oldPath); }
            $file = $request->file('tasty_img2');
            $filename2 = time() . '_tasty2_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filename2);
            $tentang->tasty_img2 = $filename2;
        }

        // Simpan data Text Visi
        $tentang->visi_deskripsi = $request->visi_deskripsi;

        // Handle upload Visi Image 1
        if ($request->hasFile('visi_img1')) {
            $oldPath = public_path('assets/images/' . $tentang->visi_img1);
            if (File::exists($oldPath)) { File::delete($oldPath); }
            $file = $request->file('visi_img1');
            $filenameV1 = time() . '_visi1_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filenameV1);
            $tentang->visi_img1 = $filenameV1;
        }

        // Handle upload Visi Image 2
        if ($request->hasFile('visi_img2')) {
            $oldPath = public_path('assets/images/' . $tentang->visi_img2);
            if (File::exists($oldPath)) { File::delete($oldPath); }
            $file = $request->file('visi_img2');
            $filenameV2 = time() . '_visi2_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filenameV2);
            $tentang->visi_img2 = $filenameV2;
        }

        // Simpan data Text Misi
        $tentang->misi_deskripsi = $request->misi_deskripsi;

        // Handle upload Misi Image
        if ($request->hasFile('misi_img')) {
            $oldPath = public_path('assets/images/' . $tentang->misi_img);
            if (File::exists($oldPath)) { File::delete($oldPath); }
            $file = $request->file('misi_img');
            $filenameM = time() . '_misi_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filenameM);
            $tentang->misi_img = $filenameM;
        }
   
        $tentang->save();
        return redirect()->back()->with('sukses', 'Semua konten Halaman Tentang berhasil diperbarui!');
    }

    // Menampilkan Halaman Publik
    public function index()
    {
        $tentang = Tentang::first();
        return view('tentang', compact('tentang'));
    }
}
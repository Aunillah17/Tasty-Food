<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    // 1. Menampilkan Halaman Depan Publik (Terpisah)
    public function index()
    {
        // Ambil khusus foto slider (maksimal 4 teratas)
        $carousel = Galeri::where('is_carousel', true)->latest()->get();
       
        // Ambil khusus foto grid bawah
        $grid = Galeri::where('is_carousel', false)->latest()->get();
        return view('galeri', compact('carousel', 'grid'));
    }

    // 2. Menampilkan Tabel List Data di Admin
    public function indexAdmin()
    {
        $galeri = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeri'));
    }

    // 3. Form Tambah Foto
    public function createAdmin()
    {
        return view('admin.galeri.create');
    }

    // 4. Proses Simpan Foto Baru
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'gambar' => 'required|file|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string'
        ]);

        $data = $request->except('gambar');
        
        // Handle upload file gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filename);
            $data['gambar'] = $filename;
        }

        // Checkbox HTML hanya mengirim data jika dicentang, jadi kita set manual nilainya
        $data['is_carousel'] = $request->has('is_carousel') ? true : false;

        Galeri::create($data);

        return redirect('/tasty-secret-admin/galeri')->with('sukses', 'Foto berhasil ditambahkan ke galeri!');
    }

    // 5. Form Edit Foto
    public function editAdmin($id)
    {
        $item = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('item'));
    }

    // 6. Proses Perbarui Foto
    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|file|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string'
        ]);

        $item = Galeri::findOrFail($id);
        $data = $request->except('gambar');

        // Jika mengupload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada di folder
            $oldImagePath = public_path('assets/images/' . $item->gambar);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }

            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filename);
            $data['gambar'] = $filename;
        }

        $data['is_carousel'] = $request->has('is_carousel') ? true : false;

        $item->update($data);

        return redirect('/tasty-secret-admin/galeri')->with('sukses', 'Data galeri berhasil diperbarui!');
    }

    // 7. Proses Hapus Foto
    public function destroyAdmin($id)
    {
        $item = Galeri::findOrFail($id);

        // Hapus file fisik gambar dari folder
        $imagePath = public_path('assets/images/' . $item->gambar);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $item->delete();

        return redirect('/tasty-secret-admin/galeri')->with('sukses', 'Foto berhasil dihapus dari galeri!');
    }
}
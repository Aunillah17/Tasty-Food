<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

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
            'gambar' => 'required',
            'judul' => 'required'
        ]);

        $data = $request->all();
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
            'gambar' => 'required',
            'judul' => 'required'
        ]);

        $item = Galeri::findOrFail($id);
        
        $data = $request->all();
        $data['is_carousel'] = $request->has('is_carousel') ? true : false;

        $item->update($data);

        return redirect('/tasty-secret-admin/galeri')->with('sukses', 'Data galeri berhasil diperbarui!');
    }

    // 7. Proses Hapus Foto
    public function destroyAdmin($id)
    {
        $item = Galeri::findOrFail($id);
        $item->delete();

        return redirect('/tasty-secret-admin/galeri')->with('sukses', 'Foto berhasil dihapus dari galeri!');
    }
}
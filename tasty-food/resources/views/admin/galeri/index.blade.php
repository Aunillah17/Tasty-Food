@extends('layouts.admin')
@section('title', 'Kelola Galeri')
@section('content')
<div class="container my-4 mb-5">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h1 class="fw-bold text-uppercase text-dark mb-1">Kelola Galeri</h1>
            <p class="text-muted small mb-0">Manajemen foto slider (carousel) dan grid utama secara terpisah.</p>
        </div>
        <div class="col-md-6 text-end">
            <a href="/tasty-secret-admin/galeri/tambah" class="btn btn-dark rounded-0 px-4 text-uppercase fw-bold fs-7">➕ Tambah Foto</a>
        </div>
    </div>

    @if(session('sukses'))
        <div class="alert alert-success rounded-0 border-0 shadow-sm p-3 mb-4">
            <span class="fw-bold">{{ session('sukses') }}</span>
        </div>
    @endif

    <div class="card p-4 border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light text-uppercase small fw-bold">
                    <tr>
                        <th style="width: 8%">No</th>
                        <th style="width: 15%">Preview</th>
                        <th style="width: 25%">Judul / Nama File</th>
                        <th style="width: 15%">Tipe Penempatan</th>
                        <th>Keterangan</th>
                        <th style="width: 20%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($galeri as $index => $item)
                    <tr>
                        <td class="fw-bold text-muted">{{ $index + 1 }}</td>
                        <td>
                            <img src="{{ asset('assets/images/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-thumbnail" style="max-height: 70px; width: 70px; object-fit: cover; border-radius: 8px;">
                        </td>
                        <td>
                            <div class="fw-bold text-dark">{{ $item->judul }}</div>
                            <small class="text-muted">File: <code>{{ $item->gambar }}</code></small>
                        </td>
                        <td>
                            @if($item->is_carousel)
                                <span class="badge bg-primary text-uppercase px-2 py-1 fs-8 rounded-0">🎠 Carousel / Slider</span>
                            @else
                                <span class="badge bg-secondary text-uppercase px-2 py-1 fs-8 rounded-0">🖥️ Grid Utama</span>
                            @endif
                        </td>
                        <td><p class="mb-0 small text-muted">{{ Str::limit($item->deskripsi, 50) ?? '-' }}</p></td>
                        <td class="text-center">
                            <a href="/tasty-secret-admin/galeri/edit/{{ $item->id }}" class="btn btn-sm btn-outline-dark rounded-0 px-3 me-1">Edit</a>
                            <a href="/tasty-secret-admin/galeri/hapus/{{ $item->id }}" class="btn btn-sm btn-danger rounded-0 px-3" onclick="return confirm('Yakin ingin menghapus foto ini?')">Hapus</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">Belum ada foto yang diinput. Halaman publik akan menampilkan aset statis default.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin')
@section('title', 'Kelola Berita')
@section('content')

<div class="container my-4 mb-5">
    <!-- Header Page -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-6 text-center text-md-start">
            <h1 class="fw-bold text-uppercase text-dark mb-1" style="letter-spacing: -0.5px;">Kelola Berita</h1>
            <p class="text-muted small mb-0">Manajemen artikel, berita kuliner, dan informasi update Tasty Food.</p>
        </div>
        <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
            <a href="/tasty-secret-admin/berita/tambah" class="btn btn-dark rounded-0 px-4 text-uppercase fw-bold fs-7">➕ Tambah Berita Baru</a>
        </div>
    </div>

    <!-- Alert Notifikasi -->
    @if(session('sukses'))
        <div class="alert alert-success rounded-0 border-0 shadow-sm d-flex align-items-center p-3 mb-4" role="alert">
            <span class="fs-5 me-2">✅</span>
            <div class="fw-bold">{{ session('sukses') }}</div>
        </div>
    @endif

    <!-- Tabel Daftar Berita -->
    <div class="card card-branded p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-dark text-uppercase fs-7">
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 15%;">Gambar</th>
                        <th style="width: 25%;">Judul Berita</th>
                        <th style="width: 35%;">Deskripsi Pendek</th>
                        <th style="width: 20%;" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($beritas as $index => $b)
                    <tr>
                        <td class="fw-bold">{{ $index + 1 }}</td>
                        <td>
                            <img src="{{ asset('assets/images/' . $b->gambar) }}" alt="Gambar Berita" class="img-fluid rounded" style="max-height: 70px; object-fit: cover; aspect-ratio: 16/9;">
                        </td>
                        <td class="fw-bold text-dark">{{ $b->judul }}</td>
                        <td class="text-muted small">{{ Str::limit($b->deskripsi_pendek, 90) }}</td>
                        <td class="text-center">
                            <a href="/tasty-secret-admin/berita/edit/{{ $b->id }}" class="btn btn-sm btn-outline-dark rounded-0 me-1">📝 Edit</a>
                            <a href="/tasty-secret-admin/berita/hapus/{{ $b->id }}" class="btn btn-sm btn-danger rounded-0 text-white" onclick="return confirm('Yakin mau menghapus berita ini, Aun?')">🗑️ Hapus</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">Belum ada berita yang ditambahkan. Silakan klik tambah berita baru!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
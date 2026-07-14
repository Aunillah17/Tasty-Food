@extends('layouts.admin')
@section('title', 'Tambah Berita Baru')
@section('content')

<div class="container my-4 mb-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold text-uppercase text-dark mb-1">Tambah Berita Baru</h1>
            <p class="text-muted small">Tulis konten berita kuliner terbaru untuk Tasty Food di sini.</p>
        </div>
    </div>

    <form action="/tasty-secret-admin/berita/simpan" method="POST" class="card card-branded p-4">
        @csrf
        <div class="row g-3">
            <div class="col-md-8">
                <label class="form-label fw-bold text-dark text-uppercase small">Judul Berita</label>
                <input type="text" name="judul" class="form-control form-control-custom" placeholder="Masukkan Judul Menarik..." required>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold text-dark text-uppercase small">Nama File Gambar</label>
                <input type="text" name="gambar" class="form-control form-control-custom" placeholder="Contoh: berita1.jpg" required>
            </div>
            <div class="col-md-12">
                <label class="form-label fw-bold text-dark text-uppercase small">Deskripsi Pendek (Preview Halaman Depan)</label>
                <textarea name="deskripsi_pendek" class="form-control form-control-custom" rows="3" placeholder="Tulis pengantar ringkas berita..." required></textarea>
            </div>
            <div class="col-md-12">
                <label class="form-label fw-bold text-dark text-uppercase small">Isi Lengkap Berita</label>
                <textarea name="detail_berita" class="form-control form-control-custom" rows="8" placeholder="Tulis cerita lengkap berita kulinermu di sini..." required></textarea>
            </div>
            <div class="col-md-12 text-end mt-4">
                <a href="/tasty-secret-admin/berita" class="btn btn-outline-secondary rounded-0 px-4 me-2 text-uppercase fw-bold">Batal</a>
                <button type="submit" class="btn btn-dark rounded-0 px-5 text-uppercase fw-bold">🚀 Publish Berita</button>
            </div>
        </div>
    </form>
</div>

@endsection
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

    <!-- Menampilkan Alert Error Validasi jika ada yang gagal -->
    @if ($errors->any())
        <div class="alert alert-danger rounded-0 border-0 mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/tasty-secret-admin/berita/simpan" method="POST" enctype="multipart/form-data" class="card card-branded p-4">
        @csrf
        <div class="row g-3">
            <div class="col-md-8">
                <label class="form-label fw-bold text-dark text-uppercase small">Judul Berita</label>
                <input type="text" name="judul" class="form-control form-control-custom @error('judul') is-invalid @enderror" value="{{ old('judul') }}" placeholder="Masukkan Judul Menarik..." required>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold text-dark text-uppercase small">Upload Gambar Berita</label>
                <input type="file" name="gambar" class="form-control form-control-custom @error('gambar') is-invalid @enderror" required>
                <small class="text-muted" style="font-size: 11px;">Format: JPG, PNG, JPEG, AVIF, WEBP (Maks. 2MB)</small>
            </div>
            <div class="col-md-12">
                <label class="form-label fw-bold text-dark text-uppercase small">Deskripsi Pendek (Preview Halaman Depan)</label>
                <textarea name="deskripsi_pendek" class="form-control form-control-custom @error('deskripsi_pendek') is-invalid @enderror" rows="3" placeholder="Tulis pengantar ringkas berita..." required>{{ old('deskripsi_pendek') }}</textarea>
            </div>
            <div class="col-md-12">
                <label class="form-label fw-bold text-dark text-uppercase small">Isi Lengkap Berita</label>
                <textarea name="detail_berita" class="form-control form-control-custom @error('detail_berita') is-invalid @enderror" rows="8" placeholder="Tulis cerita lengkap berita kulinermu di sini..." required>{{ old('detail_berita') }}</textarea>
            </div>
            <div class="col-md-12 text-end mt-4">
                <a href="/tasty-secret-admin/berita" class="btn btn-outline-secondary rounded-0 px-4 me-2 text-uppercase fw-bold">Batal</a>
                <button type="submit" class="btn btn-dark rounded-0 px-5 text-uppercase fw-bold">🚀 Publish Berita</button>
            </div>
        </div>
    </form>
</div>
@endsection
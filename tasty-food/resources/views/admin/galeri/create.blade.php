@extends('layouts.admin')
@section('title', 'Tambah Foto Galeri')
@section('content')
<div class="container my-4 mb-5">
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="fw-bold text-uppercase text-dark mb-1">Tambah Foto Galeri</h1>
            <p class="text-muted small mb-0">Unggah foto baru untuk ditampilkan di halaman publik.</p>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger rounded-0 border-0 shadow-sm p-3 mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-4 border-0 shadow-sm">
        <form action="/tasty-secret-admin/galeri/simpan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label fw-bold">Judul Foto</label>
                <input type="text" class="form-control rounded-0" id="judul" name="judul" value="{{ old('judul') }}" required>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label fw-bold">File Gambar (Foto)</label>
                <input type="file" class="form-control rounded-0" id="gambar" name="gambar" required>
                <small class="text-muted">Format yang diizinkan: JPEG, PNG, JPG, AVIF, WEBP (Maks. 2MB)</small>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Keterangan (Opsional)</label>
                <textarea class="form-control rounded-0" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_carousel" name="is_carousel" value="1" {{ old('is_carousel') ? 'checked' : '' }}>
                <label class="form-check-label fw-bold" for="is_carousel">Jadikan Carousel / Slider Atas (Jika tidak dicentang akan masuk ke Grid Utama)</label>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-dark rounded-0 px-4 text-uppercase fw-bold">Simpan Foto</button>
                <a href="/tasty-secret-admin/galeri" class="btn btn-secondary rounded-0 px-4 text-uppercase fw-bold ms-2">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
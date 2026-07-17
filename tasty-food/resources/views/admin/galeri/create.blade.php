@extends('layouts.admin')
@section('title', 'Tambah Foto Galeri')
@section('content')
<div class="container my-4 mb-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold text-uppercase text-dark mb-1">Tambah Foto Galeri</h1>
            <p class="text-muted small">Tentukan lokasi penempatan foto baik di slider atas atau grid 4x3 bawah.</p>
        </div>
    </div>

    <div class="card p-4 border-0 shadow-sm">
        <form action="/tasty-secret-admin/galeri/simpan" method="POST">
            @csrf
            <div class="mb-3">
                <label for="gambar" class="form-label fw-bold small text-uppercase">Nama File Gambar</label>
                <input type="text" name="gambar" id="gambar" class="form-control rounded-0 @error('gambar') is-invalid @enderror" placeholder="Contoh: g-1.avif" value="{{ old('gambar') }}">
                <div class="form-text small text-muted">Pastikan file gambar sudah lu taruh di folder <code>public/assets/images/</code>.</div>
                @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="judul" class="form-label fw-bold small text-uppercase">Judul / Caption Foto</label>
                <input type="text" name="judul" id="judul" class="form-control rounded-0 @error('judul') is-invalid @enderror" placeholder="Masukkan judul foto" value="{{ old('judul') }}">
                @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Bagian Pemisahan Penempatan -->
            <div class="mb-3 p-3 bg-light border border-dashed">
                <label class="form-label fw-bold small text-uppercase mb-2 d-block">Lokasi Penempatan Gambar</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="is_carousel" id="is_carousel" value="1">
                    <label class="form-check-label text-dark fw-bold" for="is_carousel">
                        🎠 Jadikan Slider / Carousel Atas
                    </label>
                </div>
                <div class="form-text small text-muted">Centang jika ingin memunculkannya di slider utama atas. Biarkan kosong jika ingin dimasukkan ke Grid Foto Utama bawah.</div>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="form-label fw-bold small text-uppercase">Deskripsi (Opsional)</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control rounded-0" placeholder="Keterangan singkat tambahan">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-dark rounded-0 px-4 text-uppercase fw-bold fs-7">💾 Simpan</button>
                <a href="/tasty-secret-admin/galeri" class="btn btn-outline-secondary rounded-0 px-4 text-uppercase fw-bold fs-7">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
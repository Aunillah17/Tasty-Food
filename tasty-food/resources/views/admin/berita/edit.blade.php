@extends('layouts.admin')
@section('title', 'Edit Berita')
@section('content')
<div class="container my-4 mb-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold text-uppercase text-dark mb-1">Edit Berita</h1>
            <p class="text-muted small">Ubah atau perbaiki informasi berita kuliner Tasty Food.</p>
        </div>
    </div>
    <!-- Tambahan enctype agar form bisa memproses upload file gambar -->
    <form action="/tasty-secret-admin/berita/update/{{ $berita->id }}" method="POST" enctype="multipart/form-data" class="card card-branded p-4">
        @csrf
        <div class="row g-3">
            <div class="col-md-8">
                <label class="form-label fw-bold text-dark text-uppercase small">Judul Berita</label>
                <input type="text" name="judul" class="form-control form-control-custom" value="{{ $berita->judul }}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold text-dark text-uppercase small">Gambar Berita</label>
                @if($berita->gambar)
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/' . $berita->gambar) }}" alt="Preview Gambar" class="img-thumbnail" style="height: 80px; object-fit: cover;">
                    </div>
                @endif
                <input type="file" name="gambar" class="form-control form-control-custom">
                <small class="text-muted" style="font-size: 11px;">Biarkan kosong jika tidak ingin mengubah gambar.</small>
            </div>
            <div class="col-md-12">
                <label class="form-label fw-bold text-dark text-uppercase small">Deskripsi Pendek (Preview Halaman Depan)</label>
                <textarea name="deskripsi_pendek" class="form-control form-control-custom" rows="3" required>{{ $berita->deskripsi_pendek }}</textarea>
            </div>
            <div class="col-md-12">
                <label class="form-label fw-bold text-dark text-uppercase small">Isi Lengkap Berita</label>
                <textarea name="detail_berita" class="form-control form-control-custom" rows="8" required>{{ $berita->detail_berita }}</textarea>
            </div>
            <div class="col-md-12 text-end mt-4">
                <a href="/tasty-secret-admin/berita" class="btn btn-outline-secondary rounded-0 px-4 me-2 text-uppercase fw-bold">Batal</a>
                <button type="submit" class="btn btn-dark rounded-0 px-5 text-uppercase fw-bold">💾 Simpan Perubahan</button>
            </div>
        </div>
    </form>
</div>
@endsection
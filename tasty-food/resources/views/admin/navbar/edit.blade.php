@extends('layouts.admin')
@section('title', 'Kelola Teks Navbar')
@section('content')

<div class="container my-4 mb-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold text-uppercase text-dark mb-1">Kelola Teks Navbar</h1>
            <p class="text-muted small">Ubah nama menu navigasi utama yang muncul di halaman depan website Tasty Food.</p>
        </div>
    </div>

    <!-- Alert Sukses -->
    @if(session('sukses'))
        <div class="alert alert-success rounded-0 border-0 shadow-sm p-3 mb-4" role="alert">
            <div class="fw-bold">✅ {{ session('sukses') }}</div>
        </div>
    @endif

    <!-- Form Edit Teks Navbar -->
    <form action="/tasty-secret-admin/navbar/update" method="POST" class="card card-branded p-4 shadow-sm border-0">
        @csrf
        <div class="row g-4">
            <div class="col-md-4">
                <label class="form-label fw-bold text-dark text-uppercase small">Teks Menu Home</label>
                <input type="text" name="menu_home" class="form-control form-control-custom rounded-0 shadow-none" value="{{ $navbar->menu_home ?? 'Home' }}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold text-dark text-uppercase small">Teks Menu Tentang</label>
                <input type="text" name="menu_tentang" class="form-control form-control-custom rounded-0 shadow-none" value="{{ $navbar->menu_tentang ?? 'Tentang' }}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold text-dark text-uppercase small">Teks Menu Berita</label>
                <input type="text" name="menu_berita" class="form-control form-control-custom rounded-0 shadow-none" value="{{ $navbar->menu_berita ?? 'Berita' }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-bold text-dark text-uppercase small">Teks Menu Galeri</label>
                <input type="text" name="menu_galeri" class="form-control form-control-custom rounded-0 shadow-none" value="{{ $navbar->menu_galeri ?? 'Galeri' }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-bold text-dark text-uppercase small">Teks Menu Kontak</label>
                <input type="text" name="menu_kontak" class="form-control form-control-custom rounded-0 shadow-none" value="{{ $navbar->menu_kontak ?? 'Kontak' }}" required>
            </div>
            <div class="col-md-12 text-end mt-4">
                <button type="submit" class="btn btn-dark rounded-0 px-5 text-uppercase fw-bold shadow-none" style="letter-spacing: 0.5px;">💾 Simpan Perubahan Navbar</button>
            </div>
        </div>
    </form>
</div>

@endsection
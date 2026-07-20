@extends('layouts.admin')
@section('title', 'Kelola Navbar & Banner Header')
@section('content')
<div class="container my-4 mb-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold text-uppercase text-dark mb-1">Kelola Navbar & Banner Header</h1>
            <p class="text-muted small">Ubah nama menu navigasi utama serta gambar banner/header untuk halaman publik.</p>
        </div>
    </div>

    <!-- Alert Sukses -->
    @if(session('sukses'))
        <div class="alert alert-success rounded-0 border-0 shadow-sm p-3 mb-4" role="alert">
            <div class="fw-bold">✅ {{ session('sukses') }}</div>
        </div>
    @endif

    <!-- Form Edit Teks Navbar & Banner -->
    <form action="/tasty-secret-admin/navbar/update" method="POST" class="card card-branded p-4 shadow-sm border-0">
        @csrf
        
        <!-- SEKTOR 1: TEKS MENU NAVBAR -->
        <h5 class="fw-bold text-uppercase text-dark mb-3 border-bottom pb-2">1. Teks Menu Navigasi</h5>
        <div class="row g-4 mb-5">
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
        </div>

        <!-- SEKTOR 2: GAMBAR BANNER HEADER HALAMAN PUBLIK -->
        <h5 class="fw-bold text-uppercase text-dark mb-3 border-bottom pb-2">2. Gambar Banner Header Halaman</h5>
        <p class="text-muted small mb-4">Pastikan file gambar sudah berada di folder <code>public/assets/images/</code>.</p>
        
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <label class="form-label fw-bold text-dark text-uppercase small">Banner Halaman Tentang</label>
                <input type="text" name="banner_tentang" class="form-control form-control-custom rounded-0 shadow-none" value="{{ $navbar->banner_tentang ?? 'Group 70.avif' }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-bold text-dark text-uppercase small">Banner Halaman Berita</label>
                <input type="text" name="banner_berita" class="form-control form-control-custom rounded-0 shadow-none" value="{{ $navbar->banner_berita ?? 'Group 70.avif' }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-bold text-dark text-uppercase small">Banner Halaman Galeri</label>
                <input type="text" name="banner_galeri" class="form-control form-control-custom rounded-0 shadow-none" value="{{ $navbar->banner_galeri ?? 'Group 70.avif' }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-bold text-dark text-uppercase small">Banner Halaman Kontak</label>
                <input type="text" name="banner_kontak" class="form-control form-control-custom rounded-0 shadow-none" value="{{ $navbar->banner_kontak ?? 'Group 70.avif' }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-end mt-4">
                <button type="submit" class="btn btn-dark rounded-0 px-5 text-uppercase fw-bold shadow-none" style="letter-spacing: 0.5px;">💾 Simpan Navbar & Banner</button>
            </div>
        </div>
    </form>
</div>
@endsection
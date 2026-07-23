@extends('layouts.admin')
@section('title', 'Kelola Navbar & Banner Header')
@section('content')
<div class="container my-4 mb-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold text-uppercase text-dark mb-1">Kelola Navbar & Banner Header</h1>
            <p class="text-muted small">Ubah nama menu navigasi utama serta upload file gambar banner/header untuk halaman publik.</p>
        </div>
    </div>

    <!-- Alert Sukses -->
    @if(session('sukses'))
        <div class="alert alert-success rounded-0 border-0 shadow-sm p-3 mb-4" role="alert">
            <div class="fw-bold">✅ {{ session('sukses') }}</div>
        </div>
    @endif

    <!-- Alert Error Validasi jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger rounded-0 border-0 mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Edit Teks Navbar & Upload Banner (Wajib enctype multipart) -->
    <form action="/tasty-secret-admin/navbar/update" method="POST" enctype="multipart/form-data" class="card card-branded p-4 shadow-sm border-0">
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

        <!-- SEKTOR 2: UPLOAD GAMBAR BANNER HEADER HALAMAN PUBLIK -->
        <h5 class="fw-bold text-uppercase text-dark mb-3 border-bottom pb-2">2. Upload Banner Header Halaman</h5>
        <p class="text-muted small mb-4">Pilih file gambar baru untuk mengubah banner halaman publik (Format: JPG, PNG, JPEG, AVIF, WEBP).</p>
        
        <div class="row g-4 mb-4">
            <!-- Banner Tentang -->
            <div class="col-md-6">
                <label class="form-label fw-bold text-dark text-uppercase small">Banner Halaman Tentang</label>
                @if(isset($navbar->banner_tentang))
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/' . $navbar->banner_tentang) }}" alt="Preview Banner Tentang" class="img-thumbnail" style="height: 90px; width: 100%; object-fit: cover;">
                    </div>
                @endif
                <input type="file" name="banner_tentang" class="form-control form-control-custom rounded-0 shadow-none">
                <small class="text-muted" style="font-size: 11px;">Biarkan kosong jika tidak ingin mengubah.</small>
            </div>

            <!-- Banner Berita -->
            <div class="col-md-6">
                <label class="form-label fw-bold text-dark text-uppercase small">Banner Halaman Berita</label>
                @if(isset($navbar->banner_berita))
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/' . $navbar->banner_berita) }}" alt="Preview Banner Berita" class="img-thumbnail" style="height: 90px; width: 100%; object-fit: cover;">
                    </div>
                @endif
                <input type="file" name="banner_berita" class="form-control form-control-custom rounded-0 shadow-none">
                <small class="text-muted" style="font-size: 11px;">Biarkan kosong jika tidak ingin mengubah.</small>
            </div>

            <!-- Banner Galeri -->
            <div class="col-md-6">
                <label class="form-label fw-bold text-dark text-uppercase small">Banner Halaman Galeri</label>
                @if(isset($navbar->banner_galeri))
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/' . $navbar->banner_galeri) }}" alt="Preview Banner Galeri" class="img-thumbnail" style="height: 90px; width: 100%; object-fit: cover;">
                    </div>
                @endif
                <input type="file" name="banner_galeri" class="form-control form-control-custom rounded-0 shadow-none">
                <small class="text-muted" style="font-size: 11px;">Biarkan kosong jika tidak ingin mengubah.</small>
            </div>

            <!-- Banner Kontak -->
            <div class="col-md-6">
                <label class="form-label fw-bold text-dark text-uppercase small">Banner Halaman Kontak</label>
                @if(isset($navbar->banner_kontak))
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/' . $navbar->banner_kontak) }}" alt="Preview Banner Kontak" class="img-thumbnail" style="height: 90px; width: 100%; object-fit: cover;">
                    </div>
                @endif
                <input type="file" name="banner_kontak" class="form-control form-control-custom rounded-0 shadow-none">
                <small class="text-muted" style="font-size: 11px;">Biarkan kosong jika tidak ingin mengubah.</small>
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
@extends('layouts.admin')
@section('title', 'Kelola Halaman Home')
@section('content')

<div class="container my-4 mb-5">
    <!-- Header Page -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-6 text-center text-md-start">
            <h1 class="fw-bold text-uppercase text-dark mb-1" style="letter-spacing: -0.5px;">Kelola Home</h1>
            <p class="text-muted small mb-0">Modifikasi teks banner utama, deskripsi, serta konten 4 card melayang.</p>
        </div>
        <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
            <a href="/tasty-secret-admin" class="btn btn-outline-secondary rounded-0 px-4 text-uppercase fw-bold fs-7"> Kembali ke Dashboard</a>
        </div>
    </div>

    <!-- Alert Notifikasi Sukses -->
    @if(session('sukses'))
        <div class="alert alert-success rounded-0 border-0 shadow-sm d-flex align-items-center p-3 mb-4" role="alert">
            <span class="fs-5 me-2">✅</span>
            <div class="fw-bold">{{ session('sukses') }}</div>
        </div>
    @endif

    <!-- Form Utama Pembaruan Data -->
    <form action="/tasty-secret-admin/home/update" method="POST">
        @csrf
        
        <!-- BLOCK 1: HERO SECTION & ABOUT PREVIEW -->
        <div class="card card-branded p-4 mb-4">
            <h4 class="fw-bold text-uppercase text-dark mb-4 pb-2 border-bottom" style="letter-spacing: 0.5px;">
                📌 Hero Section & Tentang Preview
            </h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Judul Atas (Hero)</label>
                    <input type="text" name="hero_judul_atas" class="form-control form-control-custom" value="{{ $home->hero_judul_atas }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Judul Bawah (Hero)</label>
                    <input type="text" name="hero_judul_bawah" class="form-control form-control-custom" value="{{ $home->hero_judul_bawah }}" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label fw-bold text-dark text-uppercase small">Deskripsi Utama (Hero)</label>
                    <textarea name="hero_deskripsi" class="form-control form-control-custom" rows="3" required>{{ $home->hero_deskripsi }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Nama File Gambar Hero</label>
                    <input type="text" name="hero_img" class="form-control form-control-custom" value="{{ $home->hero_img }}" required>
                    <div class="form-text text-muted small mt-1">Gunakan nama file yang ada di folder public, contoh: <code>img-4.png</code></div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Ringkasan Teks Tentang Kami</label>
                    <textarea name="about_preview" class="form-control form-control-custom" rows="2" required>{{ $home->about_preview }}</textarea>
                </div>
            </div>
        </div>

        <!-- BLOCK 2: 4 CARD MAKANAN BULAT -->
        <div class="card card-branded p-4 mb-5">
            <h4 class="fw-bold text-uppercase text-dark mb-4 pb-2 border-bottom" style="letter-spacing: 0.5px;">
                🍔 Konten 4 Card Makanan Melayang
            </h4>
            
            <div class="row g-4">
                <!-- CARD 1 -->
                <div class="col-xl-3 col-md-6">
                    <div class="p-3 bg-light border" style="border-radius: 8px;">
                        <h6 class="fw-bold text-dark text-uppercase border-bottom pb-2 mb-3">Item Card 1</h6>
                        <div class="mb-2">
                            <label class="small fw-bold text-muted text-uppercase mb-1">File Gambar</label>
                            <input type="text" name="card1_img" class="form-control form-control-custom px-2 py-1" value="{{ $home->card1_img }}" required>
                        </div>
                        <div class="mb-2">
                            <label class="small fw-bold text-muted text-uppercase mb-1">Nama Menu</label>
                            <input type="text" name="card1_judul" class="form-control form-control-custom px-2 py-1" value="{{ $home->card1_judul }}" required>
                        </div>
                        <div>
                            <label class="small fw-bold text-muted text-uppercase mb-1">Deskripsi Pendek</label>
                            <textarea name="card1_deskripsi" class="form-control form-control-custom px-2 py-1" rows="3" required>{{ $home->card1_deskripsi }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-xl-3 col-md-6">
                    <div class="p-3 bg-light border" style="border-radius: 8px;">
                        <h6 class="fw-bold text-dark text-uppercase border-bottom pb-2 mb-3">Item Card 2</h6>
                        <div class="mb-2">
                            <label class="small fw-bold text-muted text-uppercase mb-1">File Gambar</label>
                            <input type="text" name="card2_img" class="form-control form-control-custom px-2 py-1" value="{{ $home->card2_img }}" required>
                        </div>
                        <div class="mb-2">
                            <label class="small fw-bold text-muted text-uppercase mb-1">Nama Menu</label>
                            <input type="text" name="card2_judul" class="form-control form-control-custom px-2 py-1" value="{{ $home->card2_judul }}" required>
                        </div>
                        <div>
                            <label class="small fw-bold text-muted text-uppercase mb-1">Deskripsi Pendek</label>
                            <textarea name="card2_deskripsi" class="form-control form-control-custom px-2 py-1" rows="3" required>{{ $home->card2_deskripsi }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-xl-3 col-md-6">
                    <div class="p-3 bg-light border" style="border-radius: 8px;">
                        <h6 class="fw-bold text-dark text-uppercase border-bottom pb-2 mb-3">Item Card 3</h6>
                        <div class="mb-2">
                            <label class="small fw-bold text-muted text-uppercase mb-1">File Gambar</label>
                            <input type="text" name="card3_img" class="form-control form-control-custom px-2 py-1" value="{{ $home->card3_img }}" required>
                        </div>
                        <div class="mb-2">
                            <label class="small fw-bold text-muted text-uppercase mb-1">Nama Menu</label>
                            <input type="text" name="card3_judul" class="form-control form-control-custom px-2 py-1" value="{{ $home->card3_judul }}" required>
                        </div>
                        <div>
                            <label class="small fw-bold text-muted text-uppercase mb-1">Deskripsi Pendek</label>
                            <textarea name="card3_deskripsi" class="form-control form-control-custom px-2 py-1" rows="3" required>{{ $home->card3_deskripsi }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="col-xl-3 col-md-6">
                    <div class="p-3 bg-light border" style="border-radius: 8px;">
                        <h6 class="fw-bold text-dark text-uppercase border-bottom pb-2 mb-3">Item Card 4</h6>
                        <div class="mb-2">
                            <label class="small fw-bold text-muted text-uppercase mb-1">File Gambar</label>
                            <input type="text" name="card4_img" class="form-control form-control-custom px-2 py-1" value="{{ $home->card4_img }}" required>
                        </div>
                        <div class="mb-2">
                            <label class="small fw-bold text-muted text-uppercase mb-1">Nama Menu</label>
                            <input type="text" name="card4_judul" class="form-control form-control-custom px-2 py-1" value="{{ $home->card4_judul }}" required>
                        </div>
                        <div>
                            <label class="small fw-bold text-muted text-uppercase mb-1">Deskripsi Pendek</label>
                            <textarea name="card4_deskripsi" class="form-control form-control-custom px-2 py-1" rows="3" required>{{ $home->card4_deskripsi }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Aksi Simpan Permanen -->
        <div class="row">
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-dark rounded-0 px-5 py-3 text-uppercase fw-bold shadow-sm" style="letter-spacing: 1px;">
                    💾 Simpan Semua Perubahan
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
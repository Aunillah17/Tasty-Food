@extends('layouts.admin')
@section('title', 'Dashboard Admin')
@section('content')
<div class="container my-4 mb-5">
    <!-- Section Welcome -->
    <div class="row mb-5 text-center text-lg-start">
        <div class="col-12">
            <div class="title-line-admin d-none d-lg-block"></div>
            <h2 class="fw-bold text-uppercase text-dark mb-1" style="letter-spacing: -0.5px;">Selamat Datang Di</h2>
            <h1 class="display-4 fw-bold text-uppercase text-dark mb-3">Panel Admin Tasty Food 👨‍💻</h1>
            <p class="text-muted" style="max-width: 600px; line-height: 1.8;">
                Melalui halaman kendali ini, lu bisa mengatur seluruh konten statis maupun dinamis pada website utama dengan mudah, cepat, dan terstruktur.
            </p>
        </div>
    </div>
    
    <!-- Grid Menu Kelola Konten (Sistem Murni 3 Kolom Responsif) -->
    <div class="row g-4">
        <!-- 1. Kelola Home -->
        <div class="col-xl-4 col-md-6">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between shadow-sm">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">Kelola Home & Logo</h5>
                    <p class="text-muted small mb-4">Ubah teks brand logo navbar, teks banner utama, gambar hero, dan konten selamat datang.</p>
                </div>
                <a href="/tasty-secret-admin/home" class="btn-outline-dark-custom w-100 text-center py-2 fs-6">Buka</a>
            </div>
        </div>
        
        <!-- 2. Kelola Tentang -->
        <div class="col-xl-4 col-md-6">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between shadow-sm">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">Kelola Tentang</h5>
                    <p class="text-muted small mb-4">Modifikasi narasi sejarah, visi, misi, beserta aset fotonya.</p>
                </div>
                <a href="/tasty-secret-admin/tentang" class="btn-outline-dark-custom w-100 text-center py-2 fs-6">Buka</a>
            </div>
        </div>
        
        <!-- 3. Kelola Berita -->
        <div class="col-xl-4 col-md-6">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between shadow-sm">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">Kelola Berita</h5>
                    <p class="text-muted small mb-4">Tambah berita kuliner baru, edit artikel, atau hapus kiriman lama.</p>
                </div>
                <a href="/tasty-secret-admin/berita" class="btn-outline-dark-custom w-100 text-center py-2 fs-6">Buka</a>
            </div>
        </div>
        
        <!-- 4. Kelola Galeri -->
        <div class="col-xl-4 col-md-6">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between shadow-sm">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">Kelola Galeri</h5>
                    <p class="text-muted small mb-4">Perbarui dokumentasi menu makanan dengan manipulasi foto galeri.</p>
                </div>
                <a href="/tasty-secret-admin/galeri" class="btn-outline-dark-custom w-100 text-center py-2 fs-6">Buka</a>
            </div>
        </div>
        
        <!-- 5. Kelola Kontak -->
        <div class="col-xl-4 col-md-6">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between shadow-sm">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">Kelola Kontak</h5>
                    <p class="text-muted small mb-4">Ubah informasi email, nomor telepon, dan lokasi maps restoran.</p>
                </div>
                <a href="/tasty-secret-admin/kontak" class="btn-outline-dark-custom w-100 text-center py-2 fs-6">Buka</a>
            </div>
        </div>

        <!-- 6. TAMBAHAN BARU: Kelola Footer (Otomatis Rapih Jatuh ke Bawah) -->
        <div class="col-xl-4 col-md-6">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between shadow-sm" style="border: 2px dashed #fbbf24;">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">⚙️ Kelola Footer</h5>
                    <p class="text-muted small mb-4">Konfigurasi info copyright, deskripsi singkat footer, serta link social media perusahaan.</p>
                </div>
                <a href="/tasty-secret-admin/footer" class="btn btn-warning w-100 text-center py-2 fs-6 fw-bold rounded-0">Buka Kelola</a>
            </div>
        </div>
    </div>
</div>
@endsection
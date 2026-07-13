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

    <!-- Grid Menu Kelola Konten (5 Kolom Responsif) -->
    <div class="row g-4 justify-content-center">
        <!-- Kelola Home -->
        <div class="col-lg-4 col-xl-2.5" style="flex: 0 0 auto; width: 20%; min-width: 230px;">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">Kelola Home</h5>
                    <p class="text-muted small mb-4">Ubah teks banner utama, gambar hero, dan konten selamat datang.</p>
                </div>
                <a href="/tasty-secret-admin/home" class="btn-outline-dark-custom w-100 text-center py-2 fs-6">Buka</a>
            </div>
        </div>

        <!-- Kelola Tentang -->
        <div class="col-lg-4 col-xl-2.5" style="flex: 0 0 auto; width: 20%; min-width: 230px;">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">Kelola Tentang</h5>
                    <p class="text-muted small mb-4">Modifikasi narasi sejarah, visi, misi, beserta aset fotonya.</p>
                </div>
                <a href="/tasty-secret-admin/tentang" class="btn-outline-dark-custom w-100 text-center py-2 fs-6">Buka</a>
            </div>
        </div>

        <!-- Kelola Berita -->
        <div class="col-lg-4 col-xl-2.5" style="flex: 0 0 auto; width: 20%; min-width: 230px;">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">Kelola Berita</h5>
                    <p class="text-muted small mb-4">Tambah berita kuliner baru, edit artikel, atau hapus kiriman lama.</p>
                </div>
                <a href="/tasty-secret-admin/berita" class="btn-outline-dark-custom w-100 text-center py-2 fs-6">Buka</a>
            </div>
        </div>

        <!-- Kelola Galeri -->
        <div class="col-lg-4 col-xl-2.5" style="flex: 0 0 auto; width: 20%; min-width: 230px;">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">Kelola Galeri</h5>
                    <p class="text-muted small mb-4">Perbarui dokumentasi menu makanan dengan manipulasi foto galeri.</p>
                </div>
                <a href="/tasty-secret-admin/galeri" class="btn-outline-dark-custom w-100 text-center py-2 fs-6">Buka</a>
            </div>
        </div>

        <!-- Kelola Kontak (Ini yang tadi ketinggalan!) -->
        <div class="col-lg-4 col-xl-2.5" style="flex: 0 0 auto; width: 20%; min-width: 230px;">
            <div class="card card-branded p-4 text-center h-100 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 15px;">Kelola Kontak</h5>
                    <p class="text-muted small mb-4">Ubah informasi email, nomor telepon, dan lokasi maps restoran.</p>
                </div>
                <a href="/tasty-secret-admin/kontak" class="btn-outline-dark-custom w-100 text-center py-2 fs-6">Buka</a>
            </div>
        </div>
    </div>
</div>

@endsection
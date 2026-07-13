@extends('layouts.main')
@section('title', 'Tentang Kami')
@section('content')
<style>
    /* Semua Styling Asli Lu Tetap Gua Pertahankan 100% */
    .about-header-banner {
        background: url('{{ asset('assets/images/Group 70.png') }}') center/cover no-repeat;
        height: 400px;
        position: relative;
        margin-top: -110px;
        display: flex;
        align-items: center;
    }
    .about-header-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }
    .about-header-banner .container {
        position: relative;
        z-index: 2;
    }
    .about-img-curve {
        border-radius: 15px;
        width: 100%;
        object-fit: cover;
    }
    .about-img-tall {
        height: 380px;
    }
    .about-img-square {
        aspect-ratio: 1 / 1;
        height: 240px;
    }
    .about-img-wide {
        height: 250px;
    }
    .text-justify-custom {
        text-align: justify;
        line-height: 1.8;
    }
</style>

<!-- 1. HEADER BANNER -->
<section class="about-header-banner mb-5">
    <div class="container">
        <h1 class="text-white text-uppercase fw-bold display-4 tracking-wide">Tentang Kami</h1>
    </div>
</section>

<!-- 2. TASTY FOOD SECTION -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <!-- Judul Dinamis -->
                <h2 class="text-uppercase fw-bold text-dark mb-4">{{ $tentang->tasty_judul }}</h2>
                <!-- Deskripsi Tebal Dinamis -->
                <p class="fw-bold text-dark text-justify-custom mb-3">
                    {!! nl2br(e($tentang->tasty_deskripsi_tebal)) !!}
                </p>
                <!-- Deskripsi Biasa Dinamis -->
                <p class="text-muted text-justify-custom">
                    {!! nl2br(e($tentang->tasty_deskripsi_biasa)) !!}
                </p>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <!-- Gambar 1 Dinamis -->
                        <img src="{{ asset('assets/images/' . $tentang->tasty_img1) }}" alt="Tasty Food 1" class="about-img-curve about-img-tall">
                    </div>
                    <div class="col-6">
                        <!-- Gambar 2 Dinamis -->
                        <img src="{{ asset('assets/images/' . $tentang->tasty_img2) }}" alt="Tasty Food 2" class="about-img-curve about-img-tall">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. VISI SECTION -->
<section class="py-5 my-4">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="row g-3">
                    <div class="col-6">
                        <!-- Gambar Visi 1 Dinamis -->
                        <img src="{{ asset('assets/images/' . $tentang->visi_img1) }}" alt="Visi 1" class="about-img-curve about-img-square">
                    </div>
                    <div class="col-6">
                        <!-- Gambar Visi 2 Dinamis -->
                        <img src="{{ asset('assets/images/' . $tentang->visi_img2) }}" alt="Visi 2" class="about-img-curve about-img-square">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <h3 class="text-uppercase fw-bold text-dark mb-4">Visi</h3>
                <!-- Teks Visi Dinamis -->
                <p class="text-muted text-justify-custom">
                    {!! nl2br(e($tentang->visi_deskripsi)) !!}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 4. MISI SECTION -->
<section class="py-5 my-4">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h3 class="text-uppercase fw-bold text-dark mb-4">Misi</h3>
                <!-- Teks Misi Dinamis -->
                <p class="text-muted text-justify-custom">
                    {!! nl2br(e($tentang->misi_deskripsi)) !!}
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Gambar Misi Dinamis -->
                <img src="{{ asset('assets/images/' . $tentang->misi_img) }}" alt="Misi Utama" class="about-img-curve about-img-wide">
            </div>
        </div>
    </div>
</section>
@endsection
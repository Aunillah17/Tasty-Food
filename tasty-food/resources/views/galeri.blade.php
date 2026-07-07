@extends('layouts.main')

@section('title', 'Galeri')

@section('content')
<style>
    /* ==========================================================================
       1. BANNER UTAMA GALERI
       ========================================================================== */
    .banner-gallery {
        position: relative;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("{{ asset('assets/images/img-4.png') }}") center/cover no-repeat;
        height: 280px;
        display: flex;
        align-items: center;
        margin-top: -105px;
        padding-top: 100px;
    }
    .banner-gallery h1 {
        font-weight: 900;
        font-size: 2.5rem;
        letter-spacing: 2px;
        color: #ffffff;
    }

    /* ==========================================================================
       2. CAROUSEL SLIDER BESAR (TENGAH)
       ========================================================================== */
    .gallery-slider-section {
        padding: 60px 0;
    }
    .carousel-inner {
        border-radius: 20px; /* Sudut melengkung halus sesuai mockup */
        overflow: hidden;
    }
    .carousel-item img {
        width: 100%;
        height: 450px;
        object-fit: cover;
    }
    /* Mengubah tombol panah menjadi bulat putih minimalis */
    .carousel-control-prev, .carousel-control-next {
        width: 45px;
        height: 45px;
        background-color: #ffffff !important;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        opacity: 1;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .carousel-control-prev { left: -22px; }
    .carousel-control-next { right: -22px; }
    
    .carousel-control-prev-icon, .carousel-control-next-icon {
        filter: invert(1); /* Mengubah warna panah di dalam bulatannya jadi hitam */
        width: 18px;
        height: 18px;
    }

    /* ==========================================================================
       3. GRID 4 KOLOM X 3 BARIS (BAWAH)
       ========================================================================== */
    .gallery-grid-section {
        padding: 20px 0 100px 0;
    }
    .gallery-card-box {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    }
    .gallery-grid-img {
        width: 100%;
        height: 240px;
        object-fit: cover;
    }
</style>

<!-- 1. BANNER ATAS -->
<div class="banner-gallery">
    <div class="container">
        <h1 class="text-uppercase mb-0">Galeri Kami</h1>
    </div>
</div>

<!-- 2. CAROUSEL SLIDER BESAR -->
<div class="container gallery-slider-section position-relative">
    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/anh-nguyen-kcA-c3f_3FE-unsplash.jpg') }}" alt="Slider Food 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="Slider Food 2">
            </div>
        </div>
        <!-- Tombol navigasi bulat melayang -->
        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</div>

<!-- 3. GRID FOTO (4 KOLOM x 3 BARIS) -->
<div class="container gallery-grid-section">
    <div class="row g-4">
        @php
            // List 12 gambar agar pas 3 baris kebawah
            $images_grid = [
                'anh-nguyen-kcA-c3f_3FE-unsplash.jpg',
                'eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg',
                'monika-grabkowska-P1aohbiT-EY-unsplash.jpg',
                'anna-pelzer-IGfIGP5ONV0-unsplash.jpg',
                'fathul-abrar-T-qI_MI2EMA-unsplash.jpg',
                'brooke-lark-1Rm9GLHV0UA-unsplash.jpg',
                'jimmy-dean-Jvw3pxgeiZw-unsplash.jpg',
                'ella-olsson-mmnKI8kMxpc-unsplash.jpg',
                'sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg',
                'brooke-lark-oaz0raysASk-unsplash.jpg',
                'brooke-lark-nBtmglfY0HU-unsplash.jpg',
                'img-2.png'
            ];
        @endphp

        @foreach($images_grid as $img)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="gallery-card-box">
                <img src="{{ asset('assets/images/' . $img) }}" class="gallery-grid-img" alt="Gallery Grid Item">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
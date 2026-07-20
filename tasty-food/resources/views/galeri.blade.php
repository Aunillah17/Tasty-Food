@extends('layouts.main')
@section('title', 'Galeri Kami')
@section('content')
<style>
    /* Styling Banner Atas (Header) - Seragam dengan halaman lain */
    .gallery-header-banner {
        background: url('{{ asset('assets/images/' . ($globalNavbar->banner_galeri ?? 'Group 70.avif')) }}') center/cover no-repeat;
        height: 400px;
        position: relative;
        margin-top: -110px; /* Diangkat agar serasi di bawah navbar transparan */
        display: flex;
        align-items: center;
    }
    .gallery-header-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }
    .gallery-header-banner .container {
        position: relative;
        z-index: 2;
    }
    /* Kustomisasi Slider / Carousel Gambar */
    .carousel-section {
        background-color: #f8f9fa; /* Background abu-abu halus sesuai request */
    }
    .carousel-inner, .carousel-item img {
        border-radius: 20px; /* Lengkungan sudut gambar slider sesuai mockup */
        height: 450px;
        object-fit: cover;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: #ffffff;
        background-image: none;
        border-radius: 50%;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }
    .carousel-control-prev-icon::after {
        content: '‹';
        color: #000000;
        font-size: 30px;
        font-weight: bold;
    }
    .carousel-control-next-icon::after {
        content: '›';
        color: #000000;
        font-size: 30px;
        font-weight: bold;
    }
    /* Styling Grid Kotak 4x3 */
    .gallery-grid-wrapper {
        aspect-ratio: 1 / 1; /* Memaksa gambar selalu berbentuk kotak presisi */
        overflow: hidden;
        border-radius: 15px; /* Lengkungan sudut grid foto sesuai mockup */
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .gallery-grid-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .gallery-grid-wrapper img:hover {
        transform: scale(1.06);
    }
</style>

<!-- ==========================================================================
   1. HEADER BANNER (Latar Belakang Group 70.avif)
   ========================================================================== -->
<section class="gallery-header-banner mb-5">
    <div class="container">
        <h1 class="text-white text-uppercase fw-bold display-4 tracking-wide">Galeri Kami</h1>
    </div>
</section>

<!-- ==========================================================================
   2. INTERAKTIF SLIDER SECTION (Latar Belakang Abu-abu Halus)
   ========================================================================== -->
<section class="carousel-section py-5 mb-5">
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-lg-10">
               
                <!-- Bootstrap 5 Carousel Components -->
                <div id="galleryTopSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @if($carousel->count() > 0)
                            {{-- Tampilkan data yang is_carousel = true --}}
                            @foreach($carousel as $key => $slide)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('assets/images/' . $slide->gambar) }}" class="d-block w-100" alt="{{ $slide->judul }}">
                                </div>
                            @endforeach
                        @else
                            {{-- Fallback Slider Bawaan Jika Tidak Ada Data Tercentang Carousel --}}
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/ella-olsson-mmnKI8kMxpc-unsplash.avif') }}" class="d-block w-100" alt="Slider 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/jonathan-borba-Gkc_xM3VY34-unsplash.avif') }}" class="d-block w-100" alt="Slider 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/mariana-medvedeva-iNwCO9ycBlc-unsplash.avif') }}" class="d-block w-100" alt="Slider 3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/michele-blackwell-rAyCBQTH7ws-unsplash.avif') }}" class="d-block w-100" alt="Slider 4">
                            </div>
                        @endif
                    </div>
                   
                    <!-- Tombol Geser Kiri -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#galleryTopSlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <!-- Tombol Geser Kanan -->
                    <button class="carousel-control-next" type="button" data-bs-target="#galleryTopSlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
   3. GRID FOTO UTAMA SECTION (Susunan 4 Kolom x 3 Baris)
   ========================================================================== -->
<section class="py-5 my-4">
    <div class="container">
       
        <div class="row g-4">
            @if($grid->count() > 0)
                {{-- Tampilkan khusus data yang is_carousel = false --}}
                @foreach($grid as $item)
                    <div class="col-xl-3 col-md-6">
                        <div class="gallery-grid-wrapper" title="{{ $item->judul }}">
                            <img src="{{ asset('assets/images/' . $item->gambar) }}" alt="{{ $item->judul }}">
                        </div>
                    </div>
                @endforeach
            @else
                {{-- Fallback 12 Gambar Grid Statis jika Belum Ada Data Grid di DB --}}
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/anh-nguyen-kcA-c3f_3FE-unsplash.avif') }}" alt="Galeri 1"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/anna-pelzer-IGfIGP5ONV0-unsplash.avif') }}" alt="Galeri 2"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/brooke-lark-1Rm9GLHV0UA-unsplash.avif') }}" alt="Galeri 3"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/brooke-lark-nBtmglfY0HU-unsplash.avif') }}" alt="Galeri 4"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/brooke-lark-oaz0raysASk-unsplash.avif') }}" alt="Galeri 5"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/eiliv-aceron-ZuIDLSz3XLg-unsplash.avif') }}" alt="Galeri 6"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/fathul-abrar-T-qI_MI2EMA-unsplash.avif') }}" alt="Galeri 7"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/jimmy-dean-Jvw3pxgeiZw-unsplash.avif') }}" alt="Galeri 8"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/luisa-brimble-HvXEbkcXjSk-unsplash.avif') }}" alt="Galeri 9"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.avif') }}" alt="Galeri 10"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/sanket-shah-SVA7TyHxojY-unsplash.avif') }}" alt="Galeri 11"></div></div>
                <div class="col-xl-3 col-md-6"><div class="gallery-grid-wrapper"><img src="{{ asset('assets/images/monika-grabkowska-P1aohbiT-EY-unsplash.avif') }}" alt="Galeri 12"></div></div>
            @endif
        </div>
    </div>
</section>
@endsection
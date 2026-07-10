@extends('layouts.main')

@section('title', 'Home')

@section('content')
<style>
    /* Aksen tombol & teks oranye kekuningan sesuai mockup */
    .btn-dark-custom {
        background-color: #000000;
        color: #ffffff;
        border-radius: 0px;
        padding: 12px 35px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }
    .btn-dark-custom:hover {
        background-color: #fbbf24;
        color: #000000;
    }
    .text-accent-yellow {
        color: #fbbf24;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
    }
    .text-accent-yellow:hover {
        color: #f59e0b;
    }
    
    /* Garis dekoratif abu-abu tipis di atas judul mockup */
    .title-line {
        width: 60px;
        height: 3px;
        background-color: #a1a1aa;
        margin-bottom: 20px;
    }
    .title-line-center {
        width: 50px;
        height: 3px;
        background-color: #000000;
        margin: 20px auto 0 auto;
    }

    /* Styling Section Tentang Kami & 4 Card Bulat */
    .about-bg-section {
        background: url('{{ asset('assets/images/img-4.png') }}') center/cover no-repeat;
        padding: 100px 0;
        position: relative;
    }
    .about-bg-section::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }
    .about-bg-section .container {
        position: relative;
        z-index: 2;
    }
    .card-section-bg {
    background-image: url("{{ asset('assets/images/Group 70.png') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    }
    .food-card {
        background: #ffffff;
        border-radius: 20px;
        border: none;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        padding: 35px 20px;
        text-align: center;
        transition: transform 0.3s ease;
    }
    .food-card:hover {
        transform: translateY(-10px);
    }
    .food-card img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        margin-top: -85px;
        margin-bottom: 20px;
        border: 5px solid #ffffff;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Styling Grid Galeri agar presisi kotak */
    .gallery-img-wrapper {
        aspect-ratio: 1 / 1;
        overflow: hidden;
        border-radius: 12px;
    }
    .gallery-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .gallery-img-wrapper img:hover {
        transform: scale(1.08);
    }
</style>

<!-- ==========================================================================
   1. HERO SECTION (Teks Kiri, Gambar Kanan - Responsif HP)
   ========================================================================== -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="title-line"></div>
                <h1 class="display-4 fw-light text-uppercase tracking-wide text-dark mb-1">Healthy</h1>
                <h1 class="display-3 fw-bold text-uppercase text-dark mb-4" style="letter-spacing: -1px;">Tasty Food</h1>
                <p class="text-muted mb-5 lead-sm" style="max-width: 500px; line-height: 1.8;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed lorem dictum, 
                    varius justo id, interdum diam. In hac habitasse platea dictumst. Fusce id lorem vel eros elementum.
                </p>
                <a href="{{ url('/tentang') }}" class="btn btn-dark-custom">Tentang Kami</a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center text-lg-end overflow-hidden">
                <!-- Gambar melengkung besar di sudut kanan -->
                <img src="{{ asset('assets/images/img-4.png') }}" alt="Healthy Tasty Food" class="img-fluid" style="max-height: 550px; object-fit: contain;">
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
   2. TENTANG KAMI SECTION & 4 CARD MAKANAN
   ========================================================================== -->
<section class="py-5 my-5 text-center">
    <div class="container mb-5">
        <h2 class="text-uppercase fw-bold text-dark mb-3">Tentang Kami</h2>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <p class="text-muted" style="line-height: 1.8;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet lectus convallis, 
                    interdum diam non, interdum diam. In hac habitasse platea dictumst. 
                    Sed feugiat elementum dui vel vulputate.
                </p>
                <div class="title-line-center"></div>
            </div>
        </div>
    </div>
</section>

<!-- Section Background Gambar dengan 4 Card Menjorok ke Atas -->
<section class="card-section-bg about-bg-section mb-5">
    <div class="container" style="margin-top: 40px;">
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="food-card">
                    <img src="{{ asset('assets/images/img-1.png') }}" alt="Menu 1">
                    <h5 class="fw-bold text-uppercase mb-3">Lorem Ipsum</h5>
                    <p class="text-muted small mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi efficitur maecenas.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="food-card">
                    <img src="{{ asset('assets/images/img-2.png') }}" alt="Menu 2">
                    <h5 class="fw-bold text-uppercase mb-3">Lorem Ipsum</h5>
                    <p class="text-muted small mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi efficitur maecenas.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="food-card">
                    <img src="{{ asset('assets/images/img-3.png') }}" alt="Menu 3">
                    <h5 class="fw-bold text-uppercase mb-3">Lorem Ipsum</h5>
                    <p class="text-muted small mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi efficitur maecenas.</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="food-card">
                    <img src="{{ asset('assets/images/img-4.png') }}" alt="Menu 4">
                    <h5 class="fw-bold text-uppercase mb-3">Lorem Ipsum</h5>
                    <p class="text-muted small mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi efficitur maecenas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
   3. BERITA KAMI SECTION (Pindah Halaman Saat Diklik)
   ========================================================================== -->
<section class="py-5 my-5">
    <div class="container">
        <h2 class="text-uppercase fw-bold text-dark text-center mb-5">Berita Kami</h2>
        
        <div class="row g-4">
            <!-- Berita Utama (Kiri Gede) -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <img src="{{ asset('assets/images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" class="card-img-top" alt="Berita Utama" style="height: 340px; object-fit: cover;">
                    <div class="card-body p-4 d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="fw-bold text-uppercase mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
                            <p class="text-muted small" style="line-height: 1.7;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet lectus convallis, interdum diam non, hendrerit diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed elementum feugiat dui.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="{{ url('/berita') }}" class="text-accent-yellow">Baca selengkapnya</a>
                            <span class="text-muted" style="font-size: 20px;">•••</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Berita Sampingan Grid (Kanan - 4 Items Mini) -->
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Sampingan 1 -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                            <img src="{{ asset('assets/images/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="card-img-top" alt="Berita" style="height: 160px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h6 class="fw-bold text-uppercase mb-2">Lorem Ipsum</h6>
                                <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ url('/berita') }}" class="text-accent-yellow" style="font-size: 12px;">Baca selengkapnya</a>
                                    <span class="text-muted">•••</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sampingan 2 -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                            <img src="{{ asset('assets/images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" class="card-img-top" alt="Berita" style="height: 160px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h6 class="fw-bold text-uppercase mb-2">Lorem Ipsum</h6>
                                <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ url('/berita') }}" class="text-accent-yellow" style="font-size: 12px;">Baca selengkapnya</a>
                                    <span class="text-muted">•••</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sampingan 3 -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                            <img src="{{ asset('assets/images/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" class="card-img-top" alt="Berita" style="height: 160px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h6 class="fw-bold text-uppercase mb-2">Lorem Ipsum</h6>
                                <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ url('/berita') }}" class="text-accent-yellow" style="font-size: 12px;">Baca selengkapnya</a>
                                    <span class="text-muted">•••</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sampingan 4 -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                            <img src="{{ asset('assets/images/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}" class="card-img-top" alt="Berita" style="height: 160px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h6 class="fw-bold text-uppercase mb-2">Lorem Ipsum</h6>
                                <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ url('/berita') }}" class="text-accent-yellow" style="font-size: 12px;">Baca selengkapnya</a>
                                    <span class="text-muted">•••</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
   4. GALERI KAMI SECTION (Grid Sesuai Urutan Kamu)
   ========================================================================== -->
<section class="py-5 my-5">
    <div class="container text-center">
        <h2 class="text-uppercase fw-bold text-dark mb-5">Galeri Kami</h2>
        
        <div class="row g-4 mb-5">
            <!-- Foto 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('assets/images/brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="Galeri 1">
                </div>
            </div>
            <!-- Foto 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('assets/images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}" alt="Galeri 2">
                </div>
            </div>
            <!-- Foto 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('assets/images/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" alt="Galeri 3">
                </div>
            </div>
            <!-- Foto 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('assets/images/jonathan-borba-Gkc_xM3VY34-unsplash.jpg') }}" alt="Galeri 4">
                </div>
            </div>
            <!-- Foto 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('assets/images/mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg') }}" alt="Galeri 5">
                </div>
            </div>
            <!-- Foto 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-img-wrapper">
                    <img src="{{ asset('assets/images/monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" alt="Galeri 6">
                </div>
            </div>
        </div>
        
        <!-- Tombol Lihat Lebih Banyak -->
        <a href="{{ url('/galeri') }}" class="btn btn-dark-custom px-5">Lihat Lebih Banyak</a>
    </div>
</section>
@endsection
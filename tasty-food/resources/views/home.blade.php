@extends('layouts.main')

@section('title', 'Home')

@section('content')
<style>
    /* ==========================================================================
       1. HERO SECTION
       ========================================================================== */
    .hero-section {
        position: relative;
        background: url("{{ asset('assets/images/img-4.png') }}") center/cover no-repeat;
        min-height: 95vh;
        display: flex;
        align-items: center;
        margin-top: -105px; /* Menarik konten ke atas agar menyatu di bawah navbar transparan */
        padding-top: 110px;
    }
    .hero-text-box h1 {
        font-weight: 900;
        font-size: 3.8rem;
        line-height: 1.1;
        letter-spacing: -1px;
    }
    .hero-text-box .text-outline {
        color: transparent;
        -webkit-text-stroke: 2px #000000;
    }
    .hero-text-box .text-solid {
        color: #000000;
    }
    .btn-square-dark {
        background-color: #000000;
        color: #ffffff;
        border: none;
        border-radius: 0;
        padding: 14px 40px;
        font-weight: 700;
        font-size: 13px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }
    .btn-square-dark:hover {
        background-color: #ffc107;
        color: #000000;
    }
    .hero-line {
        width: 60px;
        height: 4px;
        background-color: #000000;
    }

    /* ==========================================================================
       2. TENTANG KAMI SECTION (DENGAN CARD MELAYANG)
       ========================================================================== */
    .about-section {
        padding: 80px 0 0 0;
    }
    .section-title {
        font-weight: 800;
        font-size: 24px;
        letter-spacing: 1px;
        color: #000000;
    }
    .about-bg-banner {
        background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("{{ asset('assets/images/img-3.png') }}") center/cover no-repeat;
        min-height: 350px;
        margin-top: 60px;
        padding-top: 80px;
        position: relative;
    }
    .about-card-container {
        margin-top: -180px; /* Menarik card agar melayang di atas banner */
        position: relative;
        z-index: 5;
    }
    .floating-card {
        background: #ffffff;
        border: none;
        border-radius: 15px;
        padding: 30px 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        text-align: center;
        transition: transform 0.3s ease;
    }
    .floating-card:hover {
        transform: translateY(-10px);
    }
    .floating-card img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-top: -60px; /* Membuat gambar bulat menonjol keluar card sedikit */
        margin-bottom: 20px;
        border: 5px solid #ffffff;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* ==========================================================================
       3. BERITA KAMI SECTION
       ========================================================================== */
    .news-section {
        padding: 100px 0;
    }
    .main-news-card {
        border: none;
        border-radius: 16px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 8px 30px rgba(0,0,0,0.04);
    }
    .main-news-img {
        height: 340px;
        object-fit: cover;
        width: 100%;
    }
    .side-news-card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        background: #ffffff;
        box-sizing: border-box;
        box-shadow: 0 5px 20px rgba(0,0,0,0.03);
        height: 100%;
    }
    .side-news-img {
        height: 140px;
        object-fit: cover;
        width: 100%;
    }
    .news-readmore {
        font-weight: 700;
        font-size: 13px;
        color: #ffc107;
        text-decoration: none;
    }

    /* ==========================================================================
       4. GALERI KAMI SECTION
       ========================================================================== */
    .gallery-section {
        padding: 20px 0 100px 0;
    }
    .gallery-thumb {
        width: 100%;
        height: 260px;
        object-fit: cover;
        border-radius: 12px;
        transition: transform 0.4s ease;
    }
    .gallery-box {
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .gallery-box:hover .gallery-thumb {
        transform: scale(1.06);
    }
</style>

<!-- ==========================================
     1. HERO SECTION
     ========================================== -->
<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6 hero-text-box">
                <div class="hero-line mb-4"></div>
                <h1 class="text-outline text-uppercase mb-0">HEALTHY</h1>
                <h1 class="text-solid text-uppercase mb-4">TASTY FOOD</h1>
                <p class="text-dark opacity-75 mb-4 lh-lg" style="max-width: 450px; font-size: 14px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bodas maecenas elementum tempor pretium sit amet digi ssim koli.
                </p>
                <a href="/tentang" class="btn btn-square-dark text-uppercase">Tentang Kami</a>
            </div>
        </div>
    </div>
</div>


<!-- ==========================================
     2. TENTANG KAMI SECTION
     ========================================== -->
<div class="about-section text-center">
    <div class="container">
        <h2 class="section-title text-uppercase mb-3">Tentang Kami</h2>
        <p class="text-muted mx-auto lh-lg mb-0" style="max-width: 650px; font-size: 14px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elementum id arcu id sollicitudin. Ut luctus finibus erat ac finibus. Cras varius finibus animid est laborum.
        </p>
    </div>
    
    <!-- Bagian Banner Background Gelap -->
    <div class="about-bg-banner"></div>

    <!-- Bagian 4 Card Melayang Menumpuk Banner -->
    <div class="container about-card-container">
        <div class="row g-4 justify-content-center">
            @php
                $cards = [
                    ['img' => 'anh-nguyen-kcA-c3f_3FE-unsplash.jpg', 'title' => 'LOREM IPSUM'],
                    ['img' => 'eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg', 'title' => 'LOREM IPSUM'],
                    ['img' => 'anna-pelzer-IGfIGP5ONV0-unsplash.jpg', 'title' => 'LOREM IPSUM'],
                    ['img' => 'brooke-lark-1Rm9GLHV0UA-unsplash.jpg', 'title' => 'LOREM IPSUM']
                ];
            @endphp

            @foreach($cards as $c)
            <div class="col-6 col-md-3">
                <div class="floating-card">
                    <img src="{{ asset('assets/images/' . $c['img']) }}" alt="Food">
                    <h6 class="fw-bold text-uppercase mb-3" style="font-size: 15px; letter-spacing: 0.5px;">{{ $c['title'] }}</h6>
                    <p class="text-muted small mb-0 lh-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<!-- ==========================================
     3. BERITA KAMI SECTION
     ========================================== -->
<div class="container news-section">
    <h2 class="section-title text-uppercase text-center mb-5">Berita Kami</h2>
    
    <div class="row g-4">
        <!-- Berita Utama Sebelah Kiri (Besar) -->
        <div class="col-lg-6">
            <div class="card main-news-card h-100">
                <img src="{{ asset('assets/images/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" class="main-news-img" alt="Berita Utama">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-uppercase mb-2" style="font-size: 18px; letter-spacing: 0.5px;">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</h5>
                    <p class="text-muted small lh-lg mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Torquent integer elementum tempor pretium sit amet digi ssim koli morbi elementum.</p>
                    <a href="/berita" class="news-readmore text-uppercase">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Grid 4 Berita Kecil Sebelah Kanan (2x2) -->
        <div class="col-lg-6">
            <div class="row g-4">
                @php
                    $side_news = [
                        ['img' => 'ella-olsson-mmnKI8kMxpc-unsplash.jpg', 'title' => 'LOREM IPSUM'],
                        ['img' => 'sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg', 'title' => 'LOREM IPSUM'],
                        ['img' => 'brooke-lark-oaz0raysASk-unsplash.jpg', 'title' => 'LOREM IPSUM'],
                        ['img' => 'brooke-lark-nBtmglfY0HU-unsplash.jpg', 'title' => 'LOREM IPSUM']
                    ];
                @endphp

                @foreach($side_news as $sn)
                <div class="col-12 col-sm-6">
                    <div class="card side-news-card">
                        <img src="{{ asset('assets/images/' . $sn['img']) }}" class="side-news-img" alt="Berita Side">
                        <div class="card-body p-3">
                            <h6 class="fw-bold text-uppercase mb-2" style="font-size: 14px;">{{ $sn['title'] }}</h6>
                            <p class="text-muted card-text small lh-base mb-3" style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="/berita" class="news-readmore text-uppercase" style="font-size: 11px;">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<!-- ==========================================
     4. GALERI KAMI SECTION
     ========================================== -->
<div class="container gallery-section text-center">
    <h2 class="section-title text-uppercase mb-5">Galeri Kami</h2>
    
    <div class="row g-4 mb-5">
        @php
            $galeri_home = [
                'monika-grabkowska-P1aohbiT-EY-unsplash.jpg',
                'fathul-abrar-T-qI_MI2EMA-unsplash.jpg',
                'anh-nguyen-kcA-c3f_3FE-unsplash.jpg',
                'eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg',
                'anna-pelzer-IGfIGP5ONV0-unsplash.jpg',
                'brooke-lark-1Rm9GLHV0UA-unsplash.jpg'
            ];
        @endphp

        @foreach($galeri_home as $gh)
        <div class="col-6 col-md-4">
            <div class="gallery-box">
                <img src="{{ asset('assets/images/' . $gh) }}" class="gallery-thumb" alt="Galeri Tasty Food">
            </div>
        </div>
        @endforeach
    </div>

    <!-- Tombol Lihat Lebih Banyak Kotak Sesuai Contoh Mockup -->
    <a href="/galeri" class="btn btn-square-dark text-uppercase px-5 py-3">Lihat Lebih Banyak</a>
</div>
@endsection
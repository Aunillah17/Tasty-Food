@extends('layouts.main')

@section('title', 'Berita')

@section('content')
<style>
    /* ==========================================================================
       1. BANNER UTAMA BERITA
       ========================================================================== */
    .banner-news {
        position: relative;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("{{ asset('assets/images/img-4.png') }}") center/cover no-repeat;
        height: 280px;
        display: flex;
        align-items: center;
        margin-top: -105px; /* Menarik konten melewati batas navbar transparan */
        padding-top: 100px;
    }
    .banner-news h1 {
        font-weight: 900;
        font-size: 2.5rem;
        letter-spacing: 2px;
        color: #ffffff;
    }

    /* ==========================================================================
       2. BERITA SOROTAN / HIGHLIGHT (KIRI GAMBAR - KANAN TEKS)
       ========================================================================== */
    .highlight-section {
        padding: 80px 0;
    }
    .highlight-img {
        width: 100%;
        height: 380px;
        object-fit: cover;
        border-radius: 20px; /* Membuat lengkungan sudut halus sesuai contoh */
    }
    .highlight-title {
        font-weight: 800;
        font-size: 1.8rem;
        color: #000000;
        line-height: 1.3;
        letter-spacing: -0.5px;
    }
    .highlight-desc {
        color: #555555;
        font-size: 14px;
        line-height: 1.8;
    }
    .btn-read-more {
        background-color: #000000;
        color: #ffffff;
        border: none;
        border-radius: 0;
        padding: 12px 35px;
        font-weight: 700;
        font-size: 12px;
        letter-spacing: 1px;
        transition: background-color 0.3s;
    }
    .btn-read-more:hover {
        background-color: #ffc107;
        color: #000000;
    }

    /* ==========================================================================
       3. GRID BERITA LAINNYA (4 KOLOM)
       ========================================================================== */
    .news-grid-section {
        padding-bottom: 80px;
    }
    .news-grid-title {
        font-weight: 800;
        font-size: 1.5rem;
        color: #000000;
        margin-bottom: 40px;
    }
    .custom-news-card {
        border: none;
        background: transparent;
    }
    .custom-news-card .card-img-top {
        height: 160px;
        object-fit: cover;
        border-radius: 12px;
    }
    .custom-news-card .card-title {
        font-weight: 800;
        font-size: 14px;
        color: #000000;
        letter-spacing: 0.5px;
    }
    .custom-news-card .card-text {
        font-size: 13px;
        color: #666666;
        line-height: 1.6;
    }
    .link-yellow {
        color: #ffc107;
        font-weight: 700;
        font-size: 12px;
        text-decoration: none;
    }
    .link-yellow:hover {
        color: #000000;
    }
</style>

<!-- 1. BANNER ATAS -->
<div class="banner-news">
    <div class="container">
        <h1 class="text-uppercase mb-0">Berita Kami</h1>
    </div>
</div>

<!-- 2. BERITA HIGHLIGHT UTAMA -->
<div class="container highlight-section">
    <div class="row align-items-center g-5">
        <div class="col-md-6">
            <!-- Gambar salad gelap sebagai sorotan utama -->
            <img src="{{ asset('assets/images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" class="highlight-img" alt="Highlight Food">
        </div>
        <div class="col-md-6">
            <h2 class="highlight-title text-uppercase mb-4">APA SAJA MAKANAN KHAS NUSANTARA?</h2>
            <p class="highlight-desc mb-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
            </p>
            <p class="highlight-desc mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
            </p>
            <button class="btn btn-read-more text-uppercase">Baca Selengkapnya</button>
        </div>
    </div>
</div>

<!-- 3. GRID DAFTAR BERITA LAINNYA -->
<div class="container news-grid-section">
    <h3 class="news-grid-title text-uppercase">Berita Lainnya</h3>
    
    <div class="row g-4">
        @php
            // Menyusun daftar template gambar looping (8 buah card)
            $daftar_berita_lainnya = [
                ['img' => 'monika-grabkowska-P1aohbiT-EY-unsplash.jpg'],
                ['img' => 'sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg'],
                ['img' => 'brooke-lark-oaz0raysASk-unsplash.jpg'],
                ['img' => 'brooke-lark-nBtmglfY0HU-unsplash.jpg'],
                ['img' => 'monika-grabkowska-P1aohbiT-EY-unsplash.jpg'],
                ['img' => 'sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg'],
                ['img' => 'brooke-lark-oaz0raysASk-unsplash.jpg'],
                ['img' => 'brooke-lark-nBtmglfY0HU-unsplash.jpg']
            ];
        @endphp

        @foreach($daftar_berita_lainnya as $b)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card custom-news-card h-100">
                <img src="{{ asset('assets/images/' . $b['img']) }}" class="card-img-top" alt="Berita Thumbnail">
                <div class="card-body px-0 pt-3">
                    <h5 class="card-title text-uppercase mb-2">LOREM IPSUM</h5>
                    <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="link-yellow text-lowercase">Baca selengkapnya</a>
                        <span class="text-muted" style="font-size: 12px; letter-spacing: 2px;">•••</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
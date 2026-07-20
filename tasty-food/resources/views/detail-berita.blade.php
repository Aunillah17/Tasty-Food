@extends('layouts.main')
@section('title', $berita->judul)
@section('content')
<style>
    /* Styling Banner Atas (Header) - Senada dengan Berita & Tentang Kami */
    .news-detail-banner {
        background: url('{{ asset('assets/images/' . ($globalNavbar->banner_berita ?? 'Group 70.avif')) }}') center/cover no-repeat;
        height: 300px;
        position: relative;
        margin-top: -110px; /* Diangkat agar serasi di bawah navbar transparan */
        display: flex;
        align-items: center;
    }
    .news-detail-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }
    .news-detail-banner .container {
        position: relative;
        z-index: 2;
    }
    /* Tombol Outline Hitam Kustom Kotak Tegas */
    .btn-outline-dark-custom {
        background-color: transparent;
        color: #000000;
        border: 2px solid #000000;
        border-radius: 0px;
        padding: 12px 35px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }
    .btn-outline-dark-custom:hover {
        background-color: #000000;
        color: #ffffff;
    }
    /* Aksen garis dekoratif oranye kekuningan */
    .title-line-detail {
        width: 60px;
        height: 4px;
        background-color: #fbbf24;
        margin-bottom: 20px;
    }
    /* Frame Gambar Utama */
    .detail-img-main {
        border-radius: 20px;
        width: 100%;
        max-height: 500px;
        object-fit: cover;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }
</style>

<!-- 1. HEADER BANNER -->
<section class="news-detail-banner mb-5">
    <div class="container">
        <span class="badge bg-warning text-dark rounded-0 mb-2 px-3 text-uppercase" style="font-size: 11px; letter-spacing: 1px; font-weight: 700;">Tasty News</span>
        <h1 class="text-white text-uppercase fw-bold display-5 tracking-wide">Detail Artikel</h1>
    </div>
</section>

<!-- 2. KONTEN DETAIL BERITA -->
<div class="container my-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <!-- Judul Berita -->
            <h1 class="mb-3 fw-bold text-dark text-uppercase" style="font-size: 2.3rem; line-height: 1.3; letter-spacing: -0.5px;">
                {{ $berita->judul }}
            </h1>
            
            <!-- Garis Aksen -->
            <div class="title-line-detail"></div>
            
            <!-- Gambar Berita -->
            @if($berita->gambar)
                <div class="mb-5 mt-4 text-center">
                    <img src="{{ asset('assets/images/' . $berita->gambar) }}" class="detail-img-main" alt="{{ $berita->judul }}">
                </div>
            @endif
           
            <!-- Isi Konten Utama Berita -->
            <div class="berita-content text-muted text-justify" style="line-height: 2; font-size: 1.05rem; white-space: pre-line;">
                {!! nl2br(e($berita->detail_berita)) !!}
            </div>
           
            <!-- Tombol Kembali -->
            <div class="mt-5 pt-4 border-top">
                <a href="{{ url('/berita') }}" class="btn-outline-dark-custom">
                    ← Kembali ke Berita Kami
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
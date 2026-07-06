@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('content')
<style>
    /* ==========================================================================
       1. BANNER TENTANG KAMI
       ========================================================================== */
    .banner-about {
        position: relative;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("{{ asset('assets/images/img-4.png') }}") center/cover no-repeat;
        height: 280px;
        display: flex;
        align-items: center;
        margin-top: -105px;
        padding-top: 100px;
    }
    .banner-about h1 {
        font-weight: 900;
        font-size: 2.5rem;
        letter-spacing: 2px;
        color: #ffffff;
    }

    /* ==========================================================================
       2. TASTY FOOD HERO INFO (TEXT KIRI - DUA GAMBAR VERTIKAL KANAN)
       ========================================================================== */
    .info-section {
        padding: 90px 0;
    }
    .info-title {
        font-weight: 800;
        font-size: 2.2rem;
        color: #000000;
    }
    .info-text {
        color: #444444;
        line-height: 1.8;
        font-size: 15px;
    }
    .info-subtext {
        color: #777777;
        font-size: 14px;
        line-height: 1.7;
    }
    /* Mengatur tinggi dua gambar vertikal bersanding */
    .info-img-vertical {
        width: 100%;
        height: 420px;
        object-fit: cover;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    /* ==========================================================================
       3. ZIG-ZAG LAYOUT VISI & MISI
       ========================================================================== */
    .vm-section {
        padding-bottom: 100px;
    }
    .vm-title {
        font-weight: 800;
        font-size: 1.8rem;
        color: #000000;
        letter-spacing: 0.5px;
    }
    .vm-desc {
        color: #555555;
        font-size: 14px;
        line-height: 1.8;
    }
    /* Style untuk dua gambar berdampingan di bagian Visi */
    .grid-img-double {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 12px;
    }
    /* Style untuk satu gambar horizontal panjang di bagian Misi */
    .grid-img-single {
        width: 100%;
        height: 240px;
        object-fit: cover;
        border-radius: 12px;
    }
</style>

<!-- 1. HEADER BANNER ATAS -->
<div class="banner-about">
    <div class="container">
        <h1 class="text-uppercase mb-0">Tentang Kami</h1>
    </div>
</div>

<!-- 2. SECTION TASTY FOOD: TASTY FOOD [GAMBAR][GAMBAR] -->
<div class="container info-section">
    <div class="row align-items-center g-5">
        <!-- Kolom Kiri: Teks Deskripsi -->
        <div class="col-lg-6">
            <h2 class="info-title text-uppercase mb-4">TASTY FOOD</h2>
            <p class="info-text fw-bold mb-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.
            </p>
            <p class="info-subtext mb-0">
                Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante. In vel tempor arcu. Vestibulum sed dolor feugiat, pretium eros a, convallis diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis sodales magna arcu, sit amet interdum arcu feugiat ac.
            </p>
        </div>
        <!-- Kolom Kanan: Dua Gambar Vertikal Bersanding Sesuai Mockup -->
        <div class="col-lg-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="{{ asset('assets/images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" class="info-img-vertical" alt="Kitchen Image 1">
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" class="info-img-vertical" alt="Kitchen Image 2">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 3. SECTION VISI & MISI ZIG-ZAG -->
<div class="container vm-section">
    
    <!-- BARIS VISI: [GAMBAR] [GAMBAR] VISI -->
    <div class="row align-items-center g-5 mb-5 pb-5">
        <!-- Kolom Kiri: Dua Gambar Bersanding -->
        <div class="col-lg-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="{{ asset('assets/images/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" class="grid-img-double" alt="Visi Image 1">
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/images/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" class="grid-img-double" alt="Visi Image 2">
                </div>
            </div>
        </div>
        <!-- Kolom Kanan: Teks Penjelasan Visi -->
        <div class="col-lg-6">
            <h4 class="vm-title text-uppercase mb-3">VISI</h4>
            <p class="vm-desc mb-0">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex et ante volutpat posuere.
            </p>
        </div>
    </div>

    <!-- BARIS MISI: MISI [GAMBAR PANJANG] -->
    <div class="row align-items-center g-5">
        <!-- Kolom Kiri: Teks Penjelasan Misi -->
        <div class="col-lg-6 order-2 order-lg-1">
            <h4 class="vm-title text-uppercase mb-3">MISI</h4>
            <p class="vm-desc mb-0">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex et ante volutpat posuere.
            </p>
        </div>
        <!-- Kolom Kanan: Gambar Tunggal Panjang Mendatar -->
        <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{ asset('assets/images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}" class="grid-img-single" alt="Misi Image">
        </div>
    </div>

</div>
@endsection
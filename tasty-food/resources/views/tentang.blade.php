@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('content')
<style>
    /* Styling Banner Atas (Header) */
    .about-header-banner {
        background: url('{{ asset('assets/images/Group 70.png') }}') center/cover no-repeat;
        height: 400px;
        position: relative;
        margin-top: -110px; /* Menaikkan banner agar berada di bawah navbar transparan */
        display: flex;
        align-items: center;
    }
    .about-header-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0, 0, 0, 0.4); /* Efek gelap agar teks navbar putih terbaca jelas */
        z-index: 1;
    }
    .about-header-banner .container {
        position: relative;
        z-index: 2;
    }

    /* Efek gambar melengkung estetik sesuai mockup */
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

    /* Penyelarasan paragraf */
    .text-justify-custom {
        text-align: justify;
        line-height: 1.8;
    }
</style>

<!-- ==========================================================================
   1. HEADER BANNER (Latar Belakang Group 70.png)
   ========================================================================== -->
<section class="about-header-banner mb-5">
    <div class="container">
        <h1 class="text-white text-uppercase fw-bold display-4 tracking-wide">Tentang Kami</h1>
    </div>
</section>

<!-- ==========================================================================
   2. TASTY FOOD SECTION (Latar Belakang Abu-abu)
   ========================================================================== -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <!-- Teks Sebelah Kiri -->
            <div class="col-lg-6">
                <h2 class="text-uppercase fw-bold text-dark mb-4">Tasty Food</h2>
                <p class="fw-bold text-dark text-justify-custom mb-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce si t amet viverra ante.
                </p>
                <p class="text-muted text-justify-custom">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce si t amet viverra ante.
                </p>
            </div>
            <!-- Dua Gambar Sebelah Kanan (Berjajar Tegak) -->
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="{{ asset('assets/images/brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="Tasty Food 1" class="about-img-curve about-img-tall">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('assets/images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" alt="Tasty Food 2" class="about-img-curve about-img-tall">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
   3. VISI SECTION (Latar Belakang Putih, Gambar Kiri, Teks Kanan)
   ========================================================================== -->
<section class="py-5 my-4">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Dua Gambar Kotak Sebelah Kiri -->
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="{{ asset('assets/images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="Visi 1" class="about-img-curve about-img-square">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('assets/images/michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}" alt="Visi 2" class="about-img-curve about-img-square">
                    </div>
                </div>
            </div>
            <!-- Teks Visi Sebelah Kanan -->
            <div class="col-lg-6 order-1 order-lg-2">
                <h3 class="text-uppercase fw-bold text-dark mb-4">Visi</h3>
                <p class="text-muted text-justify-custom">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet, cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus ut suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante volutpat posuere. Morbi vel nunc tortor. Nulla facilisi. Nulla accumsan ullamcorper purus nec venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet erat vel leo rutrum lobortis.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
   4. MISI SECTION (Latar Belakang Putih, Teks Kiri, Gambar Kanan Lebar)
   ========================================================================== -->
<section class="py-5 my-4">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Teks Misi Sebelah Kiri -->
            <div class="col-lg-6">
                <h3 class="text-uppercase fw-bold text-dark mb-4">Misi</h3>
                <p class="text-muted text-justify-custom">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet, cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus ut suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante volutpat posuere. Morbi vel nunc tortor. Nulla facilisi. Nulla accumsan ullamcorper purus nec venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet erat vel leo rutrum lobortis.
                </p>
            </div>
            <!-- Satu Gambar Lebar Sebelah Kanan -->
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt="Misi Utama" class="about-img-curve about-img-wide">
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.main')

@section('title', 'Berita Kami')

@section('content')
<style>
    /* Styling Banner Atas (Header) - Disamakan dengan Tentang Kami */
    .news-header-banner {
        background: url('{{ asset('assets/images/Group 70.png') }}') center/cover no-repeat;
        height: 400px;
        position: relative;
        margin-top: -110px; /* Diangkat agar serasi di bawah navbar transparan */
        display: flex;
        align-items: center;
    }
    .news-header-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }
    .news-header-banner .container {
        position: relative;
        z-index: 2;
    }

    /* Tombol hitam kustom */
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
        display: inline-block;
        text-decoration: none;
    }
    .btn-dark-custom:hover {
        background-color: #fbbf24;
        color: #000000;
    }

    /* Teks oranye kekuningan untuk link card kecil */
    .text-accent-yellow {
        color: #fbbf24;
        font-weight: 600;
        font-size: 13px;
        text-decoration: none;
        text-transform: lowercase;
    }
    .text-accent-yellow:hover {
        color: #f59e0b;
    }

    /* Penyesuaian gambar melengkung */
    .news-img-main {
        border-radius: 20px;
        width: 100%;
        height: 400px;
        object-fit: cover;
    }

    /* Grid Berita Lainnya */
    .news-card-custom {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }
    .news-card-custom:hover {
        transform: translateY(-5px);
    }
    .news-card-custom img {
        height: 180px;
        object-fit: cover;
        width: 100%;
    }
</style>

<!-- ==========================================================================
   1. HEADER BANNER (Latar Belakang Group 70.png)
   ========================================================================== -->
<section class="news-header-banner mb-5">
    <div class="container">
        <h1 class="text-white text-uppercase fw-bold display-4 tracking-wide">Berita Kami</h1>
    </div>
</section>

<!-- ==========================================================================
   2. BERITA UTAMA SECTION (Latar Belakang Abu-abu Sesuai Mockup)
   ========================================================================== -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <!-- Gambar Berita Utama (Kiri) -->
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="Berita Utama" class="news-img-main">
            </div>
            <!-- Konten Berita Utama (Kanan) -->
            <div class="col-lg-6">
                <h3 class="fw-bold text-uppercase mb-4 text-dark" style="letter-spacing: 0.5px; line-height: 1.4;">
                    Apa Saja Makanan Khas Nusantara?
                </h3>
                <p class="text-muted mb-3 text-justify" style="line-height: 1.8;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
                </p>
                <p class="text-muted mb-5 text-justify" style="line-height: 1.8;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
                </p>
                <a href="{{ url('/berita/1') }}" class="btn btn-dark-custom">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
   3. BERITA LAINNYA SECTION (Grid 4 Kolom Ke Samping)
   ========================================================================== -->
<section class="py-5 my-4">
    <div class="container">
        <h4 class="text-uppercase fw-bold text-dark mb-5" style="letter-spacing: 0.5px;">Berita Lainnya</h4>
        
        <!-- Baris Grid Berita -->
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 news-card-custom">
                    <img src="{{ asset('assets/images/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt="Berita 1">
                    <div class="card-body p-3 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold text-uppercase text-dark mb-2">Lorem Ipsum</h6>
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="#" class="text-accent-yellow">baca selengkapnya</a>
                            <span class="text-muted small">•••</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 news-card-custom">
                    <img src="{{ asset('assets/images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" alt="Berita 2">
                    <div class="card-body p-3 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold text-uppercase text-dark mb-2">Lorem Ipsum</h6>
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="#" class="text-accent-yellow">baca selengkapnya</a>
                            <span class="text-muted small">•••</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 news-card-custom">
                    <img src="{{ asset('assets/images/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" alt="Berita 3">
                    <div class="card-body p-3 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold text-uppercase text-dark mb-2">Lorem Ipsum</h6>
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="#" class="text-accent-yellow">baca selengkapnya</a>
                            <span class="text-muted small">•••</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 news-card-custom">
                    <img src="{{ asset('assets/images/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}" alt="Berita 4">
                    <div class="card-body p-3 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold text-uppercase text-dark mb-2">Lorem Ipsum</h6>
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="#" class="text-accent-yellow">baca selengkapnya</a>
                            <span class="text-muted small">•••</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Baris ke-2 (Mengulang Loop Gambar Sesuai Request) -->
            <!-- Card 5 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 news-card-custom">
                    <img src="{{ asset('assets/images/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt="Berita 5">
                    <div class="card-body p-3 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold text-uppercase text-dark mb-2">Lorem Ipsum</h6>
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="#" class="text-accent-yellow">baca selengkapnya</a>
                            <span class="text-muted small">•••</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 news-card-custom">
                    <img src="{{ asset('assets/images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" alt="Berita 6">
                    <div class="card-body p-3 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold text-uppercase text-dark mb-2">Lorem Ipsum</h6>
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="#" class="text-accent-yellow">baca selengkapnya</a>
                            <span class="text-muted small">•••</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 news-card-custom">
                    <img src="{{ asset('assets/images/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" alt="Berita 7">
                    <div class="card-body p-3 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold text-uppercase text-dark mb-2">Lorem Ipsum</h6>
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="#" class="text-accent-yellow">baca selengkapnya</a>
                            <span class="text-muted small">•••</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 news-card-custom">
                    <img src="{{ asset('assets/images/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}" alt="Berita 8">
                    <div class="card-body p-3 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold text-uppercase text-dark mb-2">Lorem Ipsum</h6>
                            <p class="text-muted small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="#" class="text-accent-yellow">baca selengkapnya</a>
                            <span class="text-muted small">•••</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
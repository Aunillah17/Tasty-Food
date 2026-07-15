@extends('layouts.main')
@section('title', 'Berita Kami')
@section('content')
<style>
    /* Styling Banner Atas (Header) - Disamakan dengan Tentang Kami */
    .news-header-banner {
        background: url('{{ asset('assets/images/Group 70.avif') }}') center/cover no-repeat;
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

<!-- 1. HEADER BANNER -->
<section class="news-header-banner mb-5">
    <div class="container">
        <h1 class="text-white text-uppercase fw-bold display-4 tracking-wide">Berita Kami</h1>
    </div>
</section>

@if($beritas->count() > 0)
    <!-- 2. BERITA UTAMA SECTION (Mengambil Data Berita Paling Baru/Pertama) -->
    @php $beritaUtama = $beritas->first(); @endphp
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/' . $beritaUtama->gambar) }}" alt="{{ $beritaUtama->judul }}" class="news-img-main">
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold text-uppercase mb-4 text-dark" style="letter-spacing: 0.5px; line-height: 1.4;">
                        {{ $beritaUtama->judul }}
                    </h3>
                    <p class="text-muted mb-5 text-justify" style="line-height: 1.8;">
                        {{ $beritaUtama->deskripsi_pendek }}
                    </p>
                    <a href="{{ url('/berita/' . $beritaUtama->id) }}" class="btn btn-dark-custom">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. BERITA LAINNYA SECTION (Sisa Berita Dimasukkan Ke Grid) -->
    <section class="py-5 my-4">
        <div class="container">
            <h4 class="text-uppercase fw-bold text-dark mb-5" style="letter-spacing: 0.5px;">Berita Lainnya</h4>
           
            <div class="row g-4">
                @foreach($beritas->skip(1) as $b)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card h-100 news-card-custom">
                        <img src="{{ asset('assets/images/' . $b->gambar) }}" alt="{{ $b->judul }}">
                        <div class="card-body p-3 d-flex flex-column justify-content-between">
                            <div>
                                <h6 class="fw-bold text-uppercase text-dark mb-2">{{ $b->judul }}</h6>
                                <p class="text-muted small mb-3">{{ Str::limit($b->deskripsi_pendek, 90) }}</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <a href="{{ url('/berita/' . $b->id) }}" class="text-accent-yellow">baca selengkapnya</a>
                                <span class="text-muted small">•••</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@else
    <div class="container my-5 text-center py-5">
        <p class="text-muted fs-5">Belum ada data berita yang tersedia.</p>
    </div>
@endif

@endsection
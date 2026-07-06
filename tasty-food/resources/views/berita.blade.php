@extends('layouts.main')

@section('title', 'Berita')

@section('content')
<style>
    .banner-berita {
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("{{ asset('assets/images/img-4-2000x2000.png') }}") center/cover no-repeat;
        height: 250px; display: flex; align-items: center;
    }
    .banner-title { font-weight: 800; letter-spacing: 2px; }
    .card-berita-utama { border-radius: 15px; overflow: hidden; box-shadow: 0 8px 24px rgba(0,0,0,0.05); }
    .card-berita-samping { border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.04); }
</style>

<div class="banner-berita text-white mb-5">
    <div class="container">
        <h1 class="text-uppercase banner-title mb-0">Berita Kami</h1>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4">
        <div class="col-lg-7">
            <div class="card card-berita-utama border-0 h-100">
                <img src="{{ asset('assets/images/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" class="card-img-top" alt="Berita Utama" style="height: 380px; object-fit: cover;">
                <div class="card-body p-4">
                    <h3 class="card-title fw-bold text-uppercase mb-3" style="color: #ffc107;">MENGULIK KULINER TRADISIONAL DI ERA MODERN</h3>
                    <p class="text-muted small mb-3">📅 6 Juli 2026 | By Admin</p>
                    <p class="text-secondary lh-lg mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-5 d-flex flex-column gap-4">
            <h4 class="fw-bold text-uppercase mb-2">Berita Terpopuler</h4>
            
            <div class="card card-berita-samping border-0">
                <div class="row g-0 align-items-center">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}" class="img-fluid h-100" style="object-fit: cover; min-height: 120px;">
                    </div>
                    <div class="col-8">
                        <div class="card-body py-2 px-3">
                            <h5 class="card-title fw-bold text-uppercase mb-1" style="font-size: 14px;">TIPS MENYAJIKAN SALAD TETAP SEGAR</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
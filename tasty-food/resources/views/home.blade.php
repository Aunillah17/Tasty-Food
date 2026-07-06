@extends('layouts.main')

@section('title', 'Home')

@section('content')
<style>
    .hero-section { padding: 60px 0; }
    .hero-title { font-weight: 800; font-size: 48px; line-height: 1.2; }
    .btn-dark-custom { background-color: #000000; color: #ffffff; border-radius: 0; padding: 12px 30px; font-weight: 600; text-uppercase; }
    .feature-card { border: none; background: #f8f9fa; border-radius: 12px; padding: 30px; text-align: center; }
    .feature-icon { width: 60px; height: 60px; object-fit: contain; margin-bottom: 20px; }
</style>

<div class="container hero-section">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <h1 class="hero-title text-uppercase mb-4">HEALTHY <br><span style="color: #000000;">TASTY FOOD</span></h1>
            <p class="text-muted lh-lg mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bodas maecenas elementum tempor pretium sit amet.</p>
            <a href="/tentang" class="btn btn-dark-custom btn-lg">Tentang Kami</a>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('assets/images/img-1.png') }}" class="img-fluid w-100" alt="Healthy Food Hero">
        </div>
    </div>
</div>

<div class="container my-5 py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <img src="{{ asset('assets/images/img-2.png') }}" class="img-fluid rounded-4 shadow-sm" alt="Tentang Resto">
        </div>
        <div class="col-lg-6">
            <h2 class="fw-bold text-uppercase mb-4">DAPUR PILIHAN UTAMA</h2>
            <p class="text-secondary lh-lg mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras varius finibus animid est laborum.</p>
        </div>
    </div>
</div>

<div class="container my-5 py-4">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card">
                <img src="{{ asset('assets/images/Group 66.png') }}" class="feature-icon" alt="Icon 1">
                <h5 class="fw-bold text-uppercase mb-3">Bahan Segar</h5>
                <p class="text-muted small mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna morbi.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <img src="{{ asset('assets/images/Group 67.png') }}" class="feature-icon" alt="Icon 2">
                <h5 class="fw-bold text-uppercase mb-3">Koki Ahli</h5>
                <p class="text-muted small mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna morbi.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <img src="{{ asset('assets/images/Group 68.png') }}" class="feature-icon" alt="Icon 3">
                <h5 class="fw-bold text-uppercase mb-3">Rasa Premium</h5>
                <p class="text-muted small mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna morbi.</p>
            </div>
        </div>
    </div>
</div>
@endsection
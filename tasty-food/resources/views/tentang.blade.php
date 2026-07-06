@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('content')
<style>
    .banner-tentang {
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("{{ asset('assets/images/img-4.png') }}") center/cover no-repeat;
        height: 250px; display: flex; align-items: center;
    }
    .banner-title { font-weight: 800; letter-spacing: 2px; }
</style>

<div class="banner-tentang text-white mb-5">
    <div class="container">
        <h1 class="text-uppercase banner-title mb-0">Tentang Kami</h1>
    </div>
</div>

<div class="container my-5 py-4">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <h2 class="fw-bold text-uppercase mb-4">SEJARAH & VISI TASTY FOOD</h2>
            <p class="text-secondary lh-lg mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elementum id arcu id sollicitudin. Ut luctus finibus erat ac finibus.</p>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('assets/images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" class="img-fluid rounded-4 shadow" alt="Koki Kami">
        </div>
    </div>
</div>
@endsection
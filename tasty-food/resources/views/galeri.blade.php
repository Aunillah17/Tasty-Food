@extends('layouts.main')

@section('title', 'Galeri')

@section('content')
<style>
    .banner-galeri {
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('assets/images/img-3.png') }}") center/cover no-repeat;
        height: 250px; display: flex; align-items: center;
    }
    .banner-title { font-weight: 800; letter-spacing: 2px; }
    .galeri-item { position: relative; overflow: hidden; border-radius: 12px; height: 250px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .galeri-item img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; }
    .galeri-item:hover img { transform: scale(1.1); }
</style>

<div class="banner-galeri text-white mb-5">
    <div class="container">
        <h1 class="text-uppercase banner-title mb-0">Galeri Kami</h1>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4">
        
        @php
            $daftar_galeri = [
                'anh-nguyen-kcA-c3f_3FE-unsplash.jpg',         // Gambar 17
                'eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg',       //       18
                'anna-pelzer-IGfIGP5ONV0-unsplash.jpg',        //       19
                'brooke-lark-1Rm9GLHV0UA-unsplash.jpg',        //       20
                'brooke-lark-oaz0raysASk-unsplash.jpg',        //       21
                'brooke-lark-nBtmglfY0HU-unsplash.jpg',        //       22
                'monika-grabkowska-P1aohbiT-EY-unsplash.jpg',  //       23
                'fathul-abrar-T-qI_MI2EMA-unsplash.jpg'         //       24
            ];
        @endphp

        @foreach($daftar_galeri as $index => $nama_file)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="galeri-item">
                <img src="{{ asset('assets/images/' . $nama_file) }}" alt="Tasty Food {{ $index + 1 }}">
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
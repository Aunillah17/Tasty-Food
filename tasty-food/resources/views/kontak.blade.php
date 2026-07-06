@extends('layouts.main')

@section('title', 'Kontak')

@section('content')
<style>
    .banner-kontak {
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('assets/images/img-4.png') }}") center/cover no-repeat;
        height: 250px; display: flex; align-items: center;
    }
    .banner-title { font-weight: 800; letter-spacing: 2px; }
    .form-control:focus { border-color: #ffc107; box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25); }
    .info-box { background-color: #f8f9fa; border-radius: 12px; }
</style>

<div class="banner-kontak text-white mb-5">
    <div class="container">
        <h1 class="text-uppercase banner-title mb-0">Kontak Kami</h1>
    </div>
</div>

<div class="container my-5 py-3">
    <div class="row g-5">
        <div class="col-lg-7">
            <h3 class="fw-bold text-uppercase mb-4">Hubungi Kami</h3>
            <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesan sukses dikirim!');">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control p-3 bg-light border-0" placeholder="Nama Anda" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control p-3 bg-light border-0" placeholder="Email Anda" required>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control p-3 bg-light border-0" rows="5" placeholder="Tulis pesan..." required style="resize: none;"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning text-white fw-bold text-uppercase w-100 py-3" style="background-color: #ffc107; border: none;">Kirim Pesan</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-5">
            <h3 class="fw-bold text-uppercase mb-4">Informasi Resto</h3>
            <div class="d-flex flex-column gap-3">
                <div class="p-4 info-box border-0 d-flex gap-3 align-items-start">
                    <img src="{{ asset('assets/images/ic_place_24px.png') }}" style="width: 24px; height: 24px;">
                    <div>
                        <h6 class="fw-bold text-uppercase mb-1">Lokasi</h6>
                        <p class="text-muted small mb-0">Jl. Buah Batu No. 123, Kota Bandung</p>
                    </div>
                </div>
                <div class="p-4 info-box border-0 d-flex gap-3 align-items-start">
                    <img src="{{ asset('assets/images/ic_markunread_24px.png') }}" style="width: 24px; height: 24px;">
                    <div>
                        <h6 class="fw-bold text-uppercase mb-1">Email</h6>
                        <p class="text-muted small mb-0">info@tastyfood.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
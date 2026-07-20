@extends('layouts.main')
@section('title', 'Kontak Kami')
@section('content')
<style>
    /* Styling Banner Atas (Header) */
    .contact-header-banner {
        background: url('{{ asset('assets/images/' . ($globalNavbar->banner_kontak ?? 'Group 70.avif')) }}') center/cover no-repeat;
        height: 400px;
        position: relative;
        margin-top: -110px;
        display: flex;
        align-items: center;
    }
    .contact-header-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }
    .contact-header-banner .container {
        position: relative;
        z-index: 2;
    }
    .form-custom-input {
        border: 1.5px solid #a1a1aa;
        border-radius: 12px;
        padding: 15px 20px;
        font-size: 14px;
        color: #333333;
    }
    .form-custom-input:focus {
        border-color: #000000;
        box-shadow: none;
    }
    .form-custom-textarea {
        height: 100%;
        min-height: 220px;
        resize: none;
    }
    .btn-submit-custom {
        background-color: #000000;
        color: #ffffff;
        border: none;
        border-radius: 10px;
        width: 100%;
        padding: 16px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }
    .btn-submit-custom:hover {
        background-color: #fbbf24;
        color: #000000;
    }
    .info-icon-box {
        width: 90px;
        height: 90px;
        object-fit: contain;
        margin-bottom: 15px;
    }
    .map-bg-wrapper {
        background-color: #f8f9fa;
        border-radius: 16px;
        overflow: hidden;
    }
    .map-iframe-container {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
    }
</style>

<!-- 1. HEADER BANNER -->
<section class="contact-header-banner mb-5">
    <div class="container">
        <h1 class="text-white text-uppercase fw-bold display-4 tracking-wide">Kontak Kami</h1>
    </div>
</section>

<!-- 2. FORMULIR HUBUNGI KAMI -->
<section class="py-5">
    <div class="container">
        <h3 class="text-uppercase fw-bold text-dark mb-5" style="letter-spacing: 0.5px;">Kontak Kami</h3>
       
        <form action="#" method="POST">
            @csrf
            <div class="row g-4 mb-4">
                <div class="col-lg-6">
                    <div class="d-flex flex-column gap-4">
                        <input type="text" name="subject" class="form-control form-custom-input" placeholder="Subject" required>
                        <input type="text" name="name" class="form-control form-custom-input" placeholder="Name" required>
                        <input type="email" name="email" class="form-control form-custom-input" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <textarea name="message" class="form-control form-custom-input form-custom-textarea" placeholder="Message" required></textarea>
                </div>
            </div>
           
            <div class="row mb-5">
                <div class="col-12">
                    <button type="submit" class="btn btn-submit-custom">Kirim</button>
                </div>
            </div>
        </form>

        <!-- 3. TIGA LOGO INFO KONTAK DINAMIS -->
        <div class="row text-center g-4 my-5 pt-4">
            <!-- Email Info -->
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/images/Group 66@2x.avif') }}" alt="Email Icon" class="info-icon-box">
                    <h6 class="fw-bold text-uppercase text-dark mb-2" style="letter-spacing: 0.5px;">Email</h6>
                    <p class="text-muted small">{{ $kontak->email ?? 'tastyfood@gmail.com' }}</p>
                </div>
            </div>
            <!-- Phone Info -->
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/images/Group 67@2x.avif') }}" alt="Phone Icon" class="info-icon-box">
                    <h6 class="fw-bold text-uppercase text-dark mb-2" style="letter-spacing: 0.5px;">Phone</h6>
                    <p class="text-muted small">{{ $kontak->phone ?? '+62 812 3456 7890' }}</p>
                </div>
            </div>
            <!-- Location Info -->
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/images/Group 68@2x.avif') }}" alt="Location Icon" class="info-icon-box">
                    <h6 class="fw-bold text-uppercase text-dark mb-2" style="letter-spacing: 0.5px;">Location</h6>
                    <p class="text-muted small">{{ $kontak->location ?? 'Kota Bandung, Jawa Barat' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. GOOGLE MAPS DINAMIS -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="map-bg-wrapper p-4 p-md-5">
            <div class="map-iframe-container">
                <iframe
                    src="{{ $kontak->maps_link ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5588059086115!2d107.66179867587425!3d-6.943197993057106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7ea519b7d5f%3A0xc3afbf68fe6a9282!2sCyberlabs%20-%20PT%20Komunikasi%20Cerdas%20Indonesia!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid' }}"
                    width="100%"
                    height="450"
                    style="border:0; display:block;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>
@endsection
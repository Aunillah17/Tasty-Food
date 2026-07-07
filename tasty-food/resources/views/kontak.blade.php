@extends('layouts.main')

@section('title', 'Kontak')

@section('content')
<style>
    /* ==========================================================================
       1. BANNER UTAMA KONTAK
       ========================================================================== */
    .banner-contact {
        position: relative;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("{{ asset('assets/images/img-4.png') }}") center/cover no-repeat;
        height: 280px;
        display: flex;
        align-items: center;
        margin-top: -105px;
        padding-top: 100px;
    }
    .banner-contact h1 {
        font-weight: 900;
        font-size: 2.5rem;
        letter-spacing: 2px;
        color: #ffffff;
    }

    /* ==========================================================================
       2. FORM SECTION
       ========================================================================== */
    .contact-form-section {
        padding: 80px 0;
    }
    .contact-form-section h2 {
        font-weight: 800;
        font-size: 1.6rem;
        color: #000000;
        letter-spacing: 0.5px;
    }
    .custom-input {
        border: 1px solid #777777;
        border-radius: 8px;
        padding: 12px 15px;
        font-size: 14px;
        background-color: transparent;
    }
    .custom-input:focus {
        border-color: #000000;
        box-shadow: none;
    }
    .btn-send {
        background-color: #000000;
        color: #ffffff;
        font-weight: 700;
        font-size: 13px;
        letter-spacing: 2px;
        padding: 14px;
        border: none;
        border-radius: 8px;
        transition: background-color 0.3s;
    }
    .btn-send:hover {
        background-color: #333333;
        color: #ffffff;
    }

    /* ==========================================================================
       3. INFO CARDS ICON BULAT
       ========================================================================== */
    .contact-info-section {
        padding-bottom: 80px;
    }
    .info-circle-icon {
        width: 70px;
        height: 70px;
        background-color: #000000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px auto;
    }

    /* ==========================================================================
       4. MAP SECTION (BACKGROUND GREY LIGHT PADDING)
       ========================================================================== */
    .map-container-wrapper {
        background-color: #f9f9f9;
        padding: 60px 0;
    }
    .map-box {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    }
    .info-card-title {
        font-weight: 800;
        font-size: 15px;
        color: #000000;
        letter-spacing: 0.5px;
    }
    .info-card-text {
        font-size: 13px;
        color: #555555;
    }
</style>

<!-- 1. BANNER ATAS -->
<div class="banner-contact">
    <div class="container">
        <h1 class="text-uppercase mb-0">Kontak Kami</h1>
    </div>
</div>

<!-- 2. SECTION FORM KONTAK -->
<div class="container contact-form-section">
    <h2 class="text-uppercase mb-4">KONTAK KAMI</h2>
    
    <form action="#" method="POST">
        @csrf
        <div class="row g-4 mb-4">
            <!-- Kolom Kiri: Input Stack -->
            <div class="col-md-6 d-flex flex-column gap-3">
                <input type="text" class="form-control custom-input" placeholder="Subject" required>
                <input type="text" class="form-control custom-input" placeholder="Name" required>
                <input type="email" class="form-control custom-input" placeholder="Email" required>
            </div>
            
            <!-- Kolom Kanan: Textarea Message -->
            <div class="col-md-6">
                <textarea class="form-control custom-input h-100" rows="5" placeholder="Message" style="resize: none;" required></textarea>
            </div>
        </div>
        
        <!-- Tombol Kirim Lebar Penuh -->
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-send w-100 text-uppercase">Kirim</button>
            </div>
        </div>
    </form>
</div>

<!-- 3. SECTION ICON BULAT INFO (MENGGUNAKAN ASET GAMBAR PERUSAHAAN) -->
<div class="container contact-info-section text-center">
    <div class="row g-4">
        <!-- EMAIL -->
        <div class="col-md-4">
            <div class="info-circle-icon">
                <!-- Sesuaikan nama file gambar ikon email dari perusahaan, contoh: icon-email.png atau email.svg -->
                <img src="{{ asset('assets/images/icon-email.png') }}" alt="Email Icon" style="width: 30px; height: 30px; object-fit: contain;">
            </div>
            <h5 class="info-card-title text-uppercase mb-2">EMAIL</h5>
            <p class="info-card-text mb-0">tastyfood@gmail.com</p>
        </div>
        
        <!-- PHONE -->
        <div class="col-md-4">
            <div class="info-circle-icon">
                <!-- Sesuaikan nama file gambar ikon telepon dari perusahaan, contoh: icon-phone.png -->
                <img src="{{ asset('assets/images/icon-phone.png') }}" alt="Phone Icon" style="width: 30px; height: 30px; object-fit: contain;">
            </div>
            <h5 class="info-card-title text-uppercase mb-2">PHONE</h5>
            <p class="info-card-text mb-0">+62 812 3456 7890</p>
        </div>
        
        <!-- LOCATION -->
        <div class="col-md-4">
            <div class="info-circle-icon">
                <!-- Sesuaikan nama file gambar ikon lokasi dari perusahaan, contoh: icon-location.png -->
                <img src="{{ asset('assets/images/icon-location.png') }}" alt="Location Icon" style="width: 30px; height: 30px; object-fit: contain;">
            </div>
            <h5 class="info-card-title text-uppercase mb-2">LOCATION</h5>
            <p class="info-card-text mb-0">Kota Bandung, Jawa Barat</p>
        </div>
    </div>
</div>

<!-- 4. SECTION GOOGLE MAPS -->
<div class="map-container-wrapper">
    <div class="container">
        <div class="map-box">
            <!-- Menggunakan Embed iframe Google Maps area Bandung -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m13!1m4!1m3!1m1!1s0x2e68e6398252177d%3A0xac4d43e9cd1a4a85!2sBandung%2C+Bandung+City%2C+West+Java!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252177d%3A0xac4d43e9cd1a4a85!2sBandung%2C+Kota+Bandung%2C+Jawa+Barat!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                width="100%" 
                height="400" 
                style="border:0; display:block;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>
@endsection
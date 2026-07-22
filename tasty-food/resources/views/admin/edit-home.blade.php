@extends('layouts.admin')
@section('title', 'Kelola Halaman Home')

@section('content')
<div class="container my-4 mb-5">
    <!-- Header Page -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-6 text-center text-md-start">
            <h1 class="fw-bold text-uppercase text-dark mb-1" style="letter-spacing: -0.5px;">Kelola Home</h1>
            <p class="text-muted small mb-0">Modifikasi teks banner utama, deskripsi, serta konten 4 card melayang.</p>
        </div>
        <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
            <a href="/tasty-secret-admin" class="btn btn-outline-secondary rounded-0 px-4 text-uppercase fw-bold fs-7"> Kembali ke Dashboard</a>
        </div>
    </div>
   
    <!-- Alert Notifikasi Sukses -->
    @if(session('sukses'))
        <div class="alert alert-success rounded-0 border-0 shadow-sm d-flex align-items-center p-3 mb-4" role="alert">
            <span class="fs-5 me-2">✅</span>
            <div class="fw-bold">{{ session('sukses') }}</div>
        </div>
    @endif

    <!-- Alert Notifikasi Error / Gagal Validasi -->
    @if ($errors->any())
        <div class="alert alert-danger rounded-0 border-0 shadow-sm p-3 mb-4">
            <div class="fw-bold mb-2">❌ Terjadi Kesalahan Input:</div>
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
    <!-- Form Utama Pembaruan Data (Wajib enctype multipart/form-data untuk upload file) -->
    <form action="/tasty-secret-admin/home/update" method="POST" enctype="multipart/form-data">
        @csrf
       
        <!-- BLOCK 1: BRANDING, HERO SECTION & ABOUT PREVIEW -->
        <div class="card card-branded p-4 mb-4">
            <h4 class="fw-bold text-uppercase text-dark mb-4 pb-2 border-bottom" style="letter-spacing: 0.5px;">
                📌 Identitas & Hero Section
            </h4>
            <div class="row g-3">
                <!-- INPUT: Logo Teks Navbar Global -->
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-bold text-danger text-uppercase small">Logo Teks Navbar (Global)</label>
                    <input type="text" name="logo_text" class="form-control form-control-custom" value="{{ $home->logo_text }}" required>
                    <div class="form-text text-muted small mt-1">Mengubah tulisan brand utama pada pojok kiri atas navbar publik (contoh default: <code>TASTY FOOD</code>).</div>
                </div>
                
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Judul Atas (Hero)</label>
                    <input type="text" name="hero_judul_atas" class="form-control form-control-custom" value="{{ $home->hero_judul_atas }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Judul Bawah (Hero)</label>
                    <input type="text" name="hero_judul_bawah" class="form-control form-control-custom" value="{{ $home->hero_judul_bawah }}" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label fw-bold text-dark text-uppercase small">Deskripsi Utama (Hero)</label>
                    <textarea name="hero_deskripsi" class="form-control form-control-custom" rows="3" required>{{ $home->hero_deskripsi }}</textarea>
                </div>
                
                <!-- UBAH JADI INPUT FILE: Hero Image -->
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Upload Gambar Hero (Opsional)</label>
                    <input type="file" name="hero_img" class="form-control form-control-custom" accept="image/*">
                    <div class="form-text text-muted small mt-1">Biarkan kosong jika tidak ingin mengganti gambar hero yang sekarang.</div>
                    
                    @if($home->hero_img)
                    <div class="mt-2">
                        <small class="text-muted d-block mb-1">Gambar saat ini:</small>
                        <img src="{{ asset('assets/images/' . $home->hero_img) }}" class="img-thumbnail" style="max-height: 80px;">
                    </div>
                    @endif
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Ringkasan Teks Tentang Kami</label>
                    <textarea name="about_preview" class="form-control form-control-custom" rows="2" required>{{ $home->about_preview }}</textarea>
                </div>
            </div>
        </div>
       
        <!-- BLOCK 2: 4 CARD MAKANAN BULAT -->
        <div class="card card-branded p-4 mb-5">
            <h4 class="fw-bold text-uppercase text-dark mb-4 pb-2 border-bottom" style="letter-spacing: 0.5px;">
                🍔 Konten 4 Card Makanan Melayang
            </h4>
           
            <div class="row g-4">
                @php
                    $cards = [
                        ['id' => '1', 'img' => $home->card1_img, 'judul' => $home->card1_judul, 'desk' => $home->card1_deskripsi],
                        ['id' => '2', 'img' => $home->card2_img, 'judul' => $home->card2_judul, 'desk' => $home->card2_deskripsi],
                        ['id' => '3', 'img' => $home->card3_img, 'judul' => $home->card3_judul, 'desk' => $home->card3_deskripsi],
                        ['id' => '4', 'img' => $home->card4_img, 'judul' => $home->card4_judul, 'desk' => $home->card4_deskripsi],
                    ];
                @endphp

                @foreach($cards as $card)
                <!-- CARD {{ $card['id'] }} -->
                <div class="col-xl-3 col-md-6">
                    <div class="p-3 bg-light border" style="border-radius: 8px;">
                        <h6 class="fw-bold text-dark text-uppercase border-bottom pb-2 mb-3">Item Card {{ $card['id'] }}</h6>
                        
                        <!-- UBAH JADI INPUT FILE: Card Image -->
                        <div class="mb-2">
                            <label class="small fw-bold text-muted text-uppercase mb-1">Upload Gambar</label>
                            <input type="file" name="card{{ $card['id'] }}_img" class="form-control form-control-custom px-2 py-1" accept="image/*">
                            
                            @if($card['img'])
                            <div class="mt-2 text-center">
                                <img src="{{ asset('assets/images/' . $card['img']) }}" class="img-thumbnail rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                            </div>
                            @endif
                        </div>

                        <div class="mb-2">
                            <label class="small fw-bold text-muted text-uppercase mb-1">Nama Menu</label>
                            <input type="text" name="card{{ $card['id'] }}_judul" class="form-control form-control-custom px-2 py-1" value="{{ $card['judul'] }}" required>
                        </div>
                        <div>
                            <label class="small fw-bold text-muted text-uppercase mb-1">Deskripsi Pendek</label>
                            <textarea name="card{{ $card['id'] }}_deskripsi" class="form-control form-control-custom px-2 py-1" rows="3" required>{{ $card['desk'] }}</textarea>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
       
        <!-- Tombol Aksi Simpan Permanen -->
        <div class="row">
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-dark rounded-0 px-5 py-3 text-uppercase fw-bold shadow-sm" style="letter-spacing: 1px;">
                    💾 Simpan Semua Perubahan
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
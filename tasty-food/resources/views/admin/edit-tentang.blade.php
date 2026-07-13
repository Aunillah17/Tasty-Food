@extends('layouts.admin')
@section('title', 'Kelola Tentang Kami')
@section('content')

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <!-- Tombol Kembali yang Selaras -->
            <a href="/tasty-secret-admin" class="btn-outline-dark-custom mb-4">← Kembali ke Dashboard</a>

            <div class="card card-branded p-4 p-md-5">
                <div class="title-line-admin"></div>
                <h2 class="fw-bold text-uppercase text-dark mb-1" style="letter-spacing: -0.5px;">Kelola Halaman</h2>
                <h1 class="display-6 fw-bold text-uppercase text-dark mb-4">Tentang Kami</h1>
                <p class="text-muted mb-5">Sesuaikan teks cerita narasi dan aset file gambar halaman Tentang melalui form di bawah ini.</p>
                
                <!-- Notifikasi Sukses -->
                @if(session('sukses'))
                    <div class="alert alert-success bg-dark text-white rounded-0 border-0 fw-bold p-3 mb-4 d-flex align-items-center">
                        <span class="text-warning me-2">✔</span> {{ session('sukses') }}
                    </div>
                @endif

                <form action="/tasty-secret-admin/tentang/update" method="POST">
                    @csrf
                    
                    <!-- SECTION 1: TASTY FOOD -->
                    <div class="mb-5">
                        <h4 class="fw-bold text-uppercase text-dark border-bottom border-2 pb-2 mb-4">1. Section Tasty Food</h4>
                        
                        <div class="mb-4">
                            <label for="tasty_judul" class="form-label fw-bold small text-uppercase text-muted">Judul Utama Section</label>
                            <input type="text" class="form-control form-control-branded" id="tasty_judul" name="tasty_judul" value="{{ $tentang->tasty_judul }}" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="tasty_deskripsi_tebal" class="form-label fw-bold small text-uppercase text-muted">Deskripsi Paragraf Tebal (Atas)</label>
                            <textarea class="form-control form-control-branded" id="tasty_deskripsi_tebal" name="tasty_deskripsi_tebal" rows="3" required>{{ $tentang->tasty_deskripsi_tebal }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="tasty_deskripsi_biasa" class="form-label fw-bold small text-uppercase text-muted">Deskripsi Paragraf Biasa (Bawah)</label>
                            <textarea class="form-control form-control-branded" id="tasty_deskripsi_biasa" name="tasty_deskripsi_biasa" rows="3" required>{{ $tentang->tasty_deskripsi_biasa }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="tasty_img1" class="form-label fw-bold small text-uppercase text-muted">Nama File Gambar 1 (Kiri)</label>
                                <input type="text" class="form-control form-control-branded" id="tasty_img1" name="tasty_img1" value="{{ $tentang->tasty_img1 }}" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="tasty_img2" class="form-label fw-bold small text-uppercase text-muted">Nama File Gambar 2 (Kanan)</label>
                                <input type="text" class="form-control form-control-branded" id="tasty_img2" name="tasty_img2" value="{{ $tentang->tasty_img2 }}" required>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 2: VISI -->
                    <div class="mb-5">
                        <h4 class="fw-bold text-uppercase text-dark border-bottom border-2 pb-2 mb-4">2. Section Visi</h4>
                        
                        <div class="mb-4">
                            <label for="visi_deskripsi" class="form-label fw-bold small text-uppercase text-muted">Deskripsi Konten Visi</label>
                            <textarea class="form-control form-control-branded" id="visi_deskripsi" name="visi_deskripsi" rows="4" required>{{ $tentang->visi_deskripsi }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="visi_img1" class="form-label fw-bold small text-uppercase text-muted">Nama File Gambar Kotak 1</label>
                                <input type="text" class="form-control form-control-branded" id="visi_img1" name="visi_img1" value="{{ $tentang->visi_img1 }}" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="visi_img2" class="form-label fw-bold small text-uppercase text-muted">Nama File Gambar Kotak 2</label>
                                <input type="text" class="form-control form-control-branded" id="visi_img2" name="visi_img2" value="{{ $tentang->visi_img2 }}" required>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 3: MISI -->
                    <div class="mb-5">
                        <h4 class="fw-bold text-uppercase text-dark border-bottom border-2 pb-2 mb-4">3. Section Misi</h4>
                        
                        <div class="mb-4">
                            <label for="misi_deskripsi" class="form-label fw-bold small text-uppercase text-muted">Deskripsi Konten Misi</label>
                            <textarea class="form-control form-control-branded" id="misi_deskripsi" name="misi_deskripsi" rows="4" required>{{ $tentang->misi_deskripsi }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="misi_img" class="form-label fw-bold small text-uppercase text-muted">Nama File Gambar Lebar (Misi)</label>
                            <input type="text" class="form-control form-control-branded" id="misi_img" name="misi_img" value="{{ $tentang->misi_img }}" required>
                        </div>
                    </div>

                    <!-- Tombol Simpan Khas Tasty Food -->
                    <button type="submit" class="btn-dark-custom w-100 py-3 fs-6">Simpan Semua Perubahan</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
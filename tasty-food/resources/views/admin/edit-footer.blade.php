@extends('layouts.admin')
@section('title', 'Kelola Footer Konten')
@section('content')
<div class="container my-4 mb-5">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h1 class="fw-bold text-uppercase text-dark mb-1" style="letter-spacing: -0.5px;">Kelola Footer</h1>
            <p class="text-muted small mb-0">Ubah info deskripsi, media sosial, kontak email, nomor telepon, dan hak cipta.</p>
        </div>
        <div class="col-md-6 text-md-end mt-3 mt-md-0">
            <a href="/tasty-secret-admin" class="btn btn-outline-secondary rounded-0 px-4 text-uppercase fw-bold fs-7"> Kembali ke Dashboard</a>
        </div>
    </div>

    @if(session('sukses'))
        <div class="alert alert-success rounded-0 border-0 shadow-sm d-flex align-items-center p-3 mb-4" role="alert">
            <span class="fs-5 me-2">✅</span>
            <div class="fw-bold">{{ session('sukses') }}</div>
        </div>
    @endif

    <form action="/tasty-secret-admin/footer/update" method="POST">
        @csrf
        <div class="card card-branded p-4 mb-4">
            <h4 class="fw-bold text-uppercase text-dark mb-4 pb-2 border-bottom" style="letter-spacing: 0.5px;">📌 Profil & Sosial Media</h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Nama Brand Footer</label>
                    <input type="text" name="brand_title" class="form-control form-control-custom" value="{{ $footer->brand_title }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Teks Hak Cipta (Copyright)</label>
                    <input type="text" name="copyright_text" class="form-control form-control-custom" value="{{ $footer->copyright_text }}" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label fw-bold text-dark text-uppercase small">Deskripsi Singkat</label>
                    <textarea name="brand_desc" class="form-control form-control-custom" rows="3" required>{{ $footer->brand_desc }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Link Facebook URL</label>
                    <input type="url" name="facebook_url" class="form-control form-control-custom" value="{{ $footer->facebook_url }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold text-dark text-uppercase small">Link Twitter URL</label>
                    <input type="url" name="twitter_url" class="form-control form-control-custom" value="{{ $footer->twitter_url }}">
                </div>
            </div>
        </div>

        <div class="card card-branded p-4 mb-4">
            <h4 class="fw-bold text-uppercase text-dark mb-4 pb-2 border-bottom" style="letter-spacing: 0.5px;">📞 Hubungi Kami (Contact Info)</h4>
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label fw-bold text-dark text-uppercase small">Alamat Email</label>
                    <input type="email" name="email_address" class="form-control form-control-custom" value="{{ $footer->email_address }}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold text-dark text-uppercase small">Nomor Telepon</label>
                    <input type="text" name="phone_number" class="form-control form-control-custom" value="{{ $footer->phone_number }}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold text-dark text-uppercase small">Teks Lokasi Singkat</label>
                    <input type="text" name="location_text" class="form-control form-control-custom" value="{{ $footer->location_text }}" required>
                </div>
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-dark rounded-0 px-5 py-3 text-uppercase fw-bold shadow-sm" style="letter-spacing: 1px;">💾 Simpan Footer</button>
        </div>
    </form>
</div>
@endsection
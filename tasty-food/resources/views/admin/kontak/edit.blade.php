@extends('layouts.admin')
@section('title', 'Kelola Kontak')
@section('content')
<div class="container my-4 mb-5">
    <div class="row mb-4 align-items-center">
        <div class="col-md-8">
            <div class="title-line-admin"></div>
            <h1 class="display-5 fw-bold text-uppercase text-dark mb-1">Kelola Informasi Kontak</h1>
            <p class="text-muted mb-0" style="max-width: 600px;">
                Atur informasi email resmi, nomor telepon perusahaan, alamat lokasi, dan tautan Google Maps yang tampil di halaman kontak utama.
            </p>
        </div>
        <!-- Tombol Navigasi ke Inbox Pesan -->
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="/tasty-secret-admin/kontak/inbox" class="btn btn-dark rounded-0 px-4 text-uppercase fw-bold shadow-none" style="letter-spacing: 0.5px;">
                📥 Lihat Inbox Pesan
            </a>
        </div>
    </div>

    @if(session('sukses'))
        <div class="alert alert-warning border-2 border-dark rounded-0 fw-bold shadow-sm mb-4">
            {{ session('sukses') }}
        </div>
    @endif

    <div class="card card-branded p-4 p-md-5">
        <form action="/tasty-secret-admin/kontak/update" method="POST">
            @csrf
            
            <div class="row g-4 mb-4">
                <!-- 1. Email -->
                <div class="col-md-6">
                    <label for="email" class="form-label fw-bold text-uppercase fs-7">📧 Email Perusahaan</label>
                    <input type="email" name="email" id="email" class="form-control form-control-branded @error('email') is-invalid @enderror" value="{{ old('email', $kontak->email ?? '') }}" required>
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- 2. Phone -->
                <div class="col-md-6">
                    <label for="phone" class="form-label fw-bold text-uppercase fs-7">📞 Nomor Telepon / HP</label>
                    <input type="text" name="phone" id="phone" class="form-control form-control-branded @error('phone') is-invalid @enderror" value="{{ old('phone', $kontak->phone ?? '') }}" required>
                    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- 3. Location -->
                <div class="col-12">
                    <label for="location" class="form-label fw-bold text-uppercase fs-7">📍 Lokasi / Alamat Singkat</label>
                    <input type="text" name="location" id="location" class="form-control form-control-branded @error('location') is-invalid @enderror" value="{{ old('location', $kontak->location ?? '') }}" required>
                    @error('location') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- 4. Google Maps Embed Link -->
                <div class="col-12">
                    <label for="maps_link" class="form-label fw-bold text-uppercase fs-7">🗺️ Google Maps Embed URL (SRC Only)</label>
                    <textarea name="maps_link" id="maps_link" rows="4" class="form-control form-control-branded @error('maps_link') is-invalid @enderror" required>{{ old('maps_link', $kontak->maps_link ?? '') }}</textarea>
                    <div class="form-text small text-muted mt-2">
                        <strong>Tips:</strong> Ambil nilai dari atribut <code>src="..."</code> pada kode Embed Map Google Maps.
                    </div>
                    @error('maps_link') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="d-flex gap-3">
                <button type="submit" class="btn btn-dark-custom">Simpan Perubahan</button>
                <a href="/tasty-secret-admin" class="btn btn-outline-dark-custom">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
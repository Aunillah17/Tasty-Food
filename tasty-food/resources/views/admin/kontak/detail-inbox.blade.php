@extends('layouts.admin')
@section('title', 'Detail & Balas Pesan')
@section('content')
<div class="container my-4 mb-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold text-uppercase text-dark mb-1">Detail Pesan Masuk</h1>
            <p class="text-muted small">Baca pesan secara lengkap dan kirimkan balasan langsung ke email pengirim.</p>
        </div>
    </div>

    <div class="row g-4">
        <!-- Card Detail Pesan (Read-Only) -->
        <div class="col-lg-6">
            <div class="card card-branded h-100 p-4 border-0 shadow-sm">
                <h5 class="fw-bold text-uppercase text-dark mb-3 border-bottom pb-2">Informasi Pengirim</h5>
                
                <div class="mb-3">
                    <label class="form-label text-muted small text-uppercase fw-bold">Subjek Pesan</label>
                    <input type="text" class="form-control form-control-custom bg-light" value="{{ $pesan->subject }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label text-muted small text-uppercase fw-bold">Nama Pengirim</label>
                    <input type="text" class="form-control form-control-custom bg-light" value="{{ $pesan->name }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label text-muted small text-uppercase fw-bold">Email Pengirim</label>
                    <input type="text" class="form-control form-control-custom bg-light" value="{{ $pesan->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label text-muted small text-uppercase fw-bold">Isi Pesan / Komplain</label>
                    <textarea class="form-control form-control-custom bg-light" rows="5" readonly>{{ $pesan->message }}</textarea>
                </div>
                <div class="mt-2">
                    <a href="/tasty-secret-admin/kontak/inbox" class="btn btn-outline-secondary rounded-0 px-4 text-uppercase fw-bold small">← Kembali ke Inbox</a>
                </div>
            </div>
        </div>

        <!-- Form Kirim Balasan Email -->
        <div class="col-lg-6">
            <div class="card card-branded h-100 p-4 border-0 shadow-sm">
                <h5 class="fw-bold text-uppercase text-dark mb-3 border-bottom pb-2">Kirim Balasan via Email</h5>
                
                <form action="/tasty-secret-admin/kontak/inbox/balas/{{ $pesan->id }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold text-dark text-uppercase small">Tulis Balasan / Solusi</label>
                        <textarea name="balasan" class="form-control form-control-custom" rows="8" placeholder="Tulis balasan untuk dikirim ke email pengirim..." required></textarea>
                    </div>
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-dark rounded-0 px-5 text-uppercase fw-bold shadow-none">📨 Kirim Balasan Email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
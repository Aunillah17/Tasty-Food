@extends('layouts.admin')
@section('title', 'Inbox Pesan Masuk')
@section('content')
<div class="container my-4 mb-5">
    <div class="row mb-4 align-items-center">
        <div class="col-md-8">
            <h1 class="fw-bold text-uppercase text-dark mb-1">Inbox Pesan Masuk</h1>
            <p class="text-muted small">Daftar aspirasi, komplain, atau support dari pengunjung melalui halaman kontak publik.</p>
        </div>
        <div class="col-md-4 text-md-end">
            <a href="/tasty-secret-admin/kontak" class="btn btn-outline-dark rounded-0 px-4 text-uppercase fw-bold small">⚙️ Pengaturan Kontak</a>
        </div>
    </div>

    <!-- Alert Sukses -->
    @if(session('sukses'))
        <div class="alert alert-success rounded-0 border-0 shadow-sm p-3 mb-4" role="alert">
            <div class="fw-bold">✅ {{ session('sukses') }}</div>
        </div>
    @endif

    <div class="row g-4">
        @forelse($pesans as $pesan)
            <div class="col-md-6">
                <div class="card card-branded h-100 p-4 border-0 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="badge bg-dark rounded-0 text-uppercase px-3 py-2" style="font-size: 10px;">{{ $pesan->created_at->diffForHumans() }}</span>
                        <span class="text-muted small">📧 {{ $pesan->email }}</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-2 text-uppercase">{{ $pesan->subject }}</h5>
                    <p class="text-muted small mb-3">Dari: <strong class="text-dark">{{ $pesan->name }}</strong></p>
                    <p class="text-secondary small bg-light p-3 rounded-0 border-start border-4 border-dark mb-4" style="line-height: 1.6;">
                        {{ Str::limit($pesan->message, 120) }}
                    </p>
                    <div class="mt-auto d-flex justify-content-between align-items-center">
                        <a href="/tasty-secret-admin/kontak/inbox/hapus/{{ $pesan->id }}" class="btn btn-outline-danger rounded-0 px-3 text-uppercase fw-bold small" onclick="return confirm('Yakin ingin menghapus pesan ini?')">🗑️ Hapus</a>
                        <a href="/tasty-secret-admin/kontak/inbox/detail/{{ $pesan->id }}" class="btn btn-dark rounded-0 px-4 text-uppercase fw-bold small">🔍 Buka & Balas Pesan</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card card-branded p-5 text-center border-0 shadow-sm">
                    <p class="text-muted mb-0">Belum ada pesan atau komplain masuk dari pengunjung.</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
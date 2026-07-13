<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TentangController; // Disatukan di atas agar rapi

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================================================================
// 1. ROUTE HALAMAN DEPAN (WEB UTAMA)
// ==========================================================================

// Halaman Utama (Home)
Route::get('/', [BeritaController::class, 'home']);

// Halaman Berita Kami
Route::get('/berita', [BeritaController::class, 'index']);

// Halaman Detail/Baca Berita Khusus
Route::get('/berita/{id}', [BeritaController::class, 'show']);

// Halaman Tentang Kami (Sekarang diatur oleh TentangController agar dinamis)
Route::get('/tentang', [TentangController::class, 'index']);

// Halaman Galeri
Route::get('/galeri', function () {
    return view('galeri');
});

// Halaman Kontak
Route::get('/kontak', function () {
    return view('kontak');
});


// ==========================================================================
// 2. ROUTE PINTU RAHASIA PANEL ADMIN (CMS)
// ==========================================================================

// Dashboard Utama Admin
Route::get('/tasty-secret-admin', function () {
    return view('admin.dashboard');
});

// Menampilkan halaman form edit Tentang di admin
Route::get('/tasty-secret-admin/tentang', [TentangController::class, 'editAdmin']);

// Memproses tombol "Simpan Perubahan" form Tentang ke database
Route::post('/tasty-secret-admin/tentang/update', [TentangController::class, 'updateAdmin']);
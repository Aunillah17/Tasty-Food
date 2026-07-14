<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================================================================
// 1. ROUTE HALAMAN DEPAN (WEB UTAMA)
// ==========================================================================

// Halaman Utama (Home)
Route::get('/', [HomeController::class, 'index']);

// Halaman Berita Kami (Menampilkan Semua Berita)
Route::get('/berita', [BeritaController::class, 'index']);

// Halaman Detail / Baca Berita Khusus (Fitur Baca Selengkapnya Tetap Aman)
Route::get('/berita/{id}', [BeritaController::class, 'show']);

// Halaman Tentang Kami
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
// 2. ROUTE PANEL ADMIN (CMS)
// ==========================================================================

// Dashboard Utama Admin
Route::get('/tasty-secret-admin', function () {
    return view('admin.dashboard');
});

// Kelola Halaman Home
Route::get('/tasty-secret-admin/home', [HomeController::class, 'editAdmin']);
Route::post('/tasty-secret-admin/home/update', [HomeController::class, 'updateAdmin']);

// Kelola Halaman Tentang
Route::get('/tasty-secret-admin/tentang', [TentangController::class, 'editAdmin']);
Route::post('/tasty-secret-admin/tentang/update', [TentangController::class, 'updateAdmin']);

// Kelola Halaman Berita (CRUD Lengkap)
Route::get('/tasty-secret-admin/berita', [BeritaController::class, 'indexAdmin']);
Route::get('/tasty-secret-admin/berita/tambah', [BeritaController::class, 'createAdmin']);
Route::post('/tasty-secret-admin/berita/simpan', [BeritaController::class, 'storeAdmin']);
Route::get('/tasty-secret-admin/berita/edit/{id}', [BeritaController::class, 'editAdmin']);
Route::post('/tasty-secret-admin/berita/update/{id}', [BeritaController::class, 'updateAdmin']);
Route::get('/tasty-secret-admin/berita/hapus/{id}', [BeritaController::class, 'destroyAdmin']);
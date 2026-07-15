<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\NavbarController;
// Import juga controller halaman publik lu di sini (contoh nama umumnya):
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================================
// Halaman Depan / Publik (Gunakan Controller Asli Lu)
// ==========================================
Route::get('/', [HomeController::class, 'index']); // Menggunakan controller asli biar data $home muncul
Route::get('/tentang', [TentangController::class, 'index']); // Menggunakan controller asli tentang
Route::get('/berita', [BeritaController::class, 'indexFront']); // Sesuaikan dengan fungsi halaman depan berita lu
Route::get('/galeri', function () { return view('galeri'); }); // Kalau galeri statis, biarkan begini
Route::get('/kontak', function () { return view('kontak'); }); // Kalau kontak statis, biarkan begini


// ==========================================
// Panel Admin (Tasty Secret Admin)
// ==========================================
Route::prefix('tasty-secret-admin')->group(function () {
    
    // Dashboard Admin
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    // 1. Kelola Berita
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::get('/berita/tambah', [BeritaController::class, 'create']);
    Route::post('/berita/simpan', [BeritaController::class, 'store']);
    Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']);
    Route::post('/berita/update/{id}', [BeritaController::class, 'update']);
    Route::get('/berita/hapus/{id}', [BeritaController::class, 'destroy']);

    // 2. Kelola Teks Navbar
    Route::get('/navbar', [NavbarController::class, 'editAdmin']);
    Route::post('/navbar/update', [NavbarController::class, 'updateAdmin']);
    
});
<?php
use Illuminate\Support\Facades\Route;
// Import semua controller yang dibutuhkan
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================================
// Halaman Depan / Publik
// ==========================================
Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/detail/{id}', [BeritaController::class, 'show']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);

// ==========================================
// Authentication Admin (Login & Logout)
// ==========================================
Route::get('/tasty-secret-admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/tasty-secret-admin/login', [AuthController::class, 'login']);
Route::get('/tasty-secret-admin/logout', [AuthController::class, 'logout'])->name('logout');

// ==========================================
// Panel Admin (Diproteksi Wajib Login)
// ==========================================
Route::prefix('tasty-secret-admin')->middleware('auth')->group(function () {
   
    // Dashboard Admin
    Route::get('/', function () { 
        return view('admin.dashboard'); 
    })->name('admin.dashboard');
   
    // 1. Kelola Home
    Route::get('/home', [HomeController::class, 'editAdmin']);
    Route::post('/home/update', [HomeController::class, 'updateAdmin']);
   
    // 2. Kelola Tentang
    Route::get('/tentang', [TentangController::class, 'editAdmin']);
    Route::post('/tentang/update', [TentangController::class, 'updateAdmin']);
   
    // 3. Kelola Berita
    Route::get('/berita', [BeritaController::class, 'indexAdmin']);
    Route::get('/berita/tambah', [BeritaController::class, 'createAdmin']);
    Route::post('/berita/simpan', [BeritaController::class, 'storeAdmin']);
    Route::get('/berita/edit/{id}', [BeritaController::class, 'editAdmin']);
    Route::post('/berita/update/{id}', [BeritaController::class, 'updateAdmin']);
    Route::get('/berita/hapus/{id}', [BeritaController::class, 'destroyAdmin']);
   
    // 4. Kelola Navbar
    Route::get('/navbar', [NavbarController::class, 'editAdmin']);
    Route::post('/navbar/update', [NavbarController::class, 'updateAdmin']);
   
    // 5. Kelola Footer
    Route::get('/footer', [FooterController::class, 'editAdmin']);
    Route::post('/footer/update', [FooterController::class, 'updateAdmin']);

    // 6. Kelola Galeri
    Route::get('/galeri', [GaleriController::class, 'indexAdmin']);
    Route::get('/galeri/tambah', [GaleriController::class, 'createAdmin']);
    Route::post('/galeri/simpan', [GaleriController::class, 'storeAdmin']);
    Route::get('/galeri/edit/{id}', [GaleriController::class, 'editAdmin']);
    Route::post('/galeri/update/{id}', [GaleriController::class, 'updateAdmin']);
    Route::get('/galeri/hapus/{id}', [GaleriController::class, 'destroyAdmin']);

    // 7. Kelola Kontak
    Route::get('/kontak', [KontakController::class, 'editAdmin']);
    Route::post('/kontak/update', [KontakController::class, 'updateAdmin']);
});
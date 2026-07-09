<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Tasty Food (Reset Clean Setup)
|--------------------------------------------------------------------------
*/

// Jalur Utama (Halaman Depan / Home)
Route::get('/', function () {
    return view('home');
});

// Jalur Halaman Tentang Kami
Route::get('/tentang', function () {
    return view('tentang');
});

// Jalur Halaman Berita (Nanti kita ubah pakai Controller pas masuk Tahap Backend)
Route::get('/berita', function () {
    return view('berita');
});

// Jalur Halaman Galeri Foto
Route::get('/galeri', function () {
    return view('galeri');
});

// Jalur Halaman Kontak & Maps
Route::get('/kontak', function () {
    return view('kontak');
});
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            // Teks Menu Navbar
            $table->string('menu_home')->default('Home');
            $table->string('menu_tentang')->default('Tentang');
            $table->string('menu_berita')->default('Berita');
            $table->string('menu_galeri')->default('Galeri');
            $table->string('menu_kontak')->default('Kontak');
            
            // Header Banner Gambar Halaman Publik (FITUR BARU)
            $table->string('banner_tentang')->default('Group 70.avif');
            $table->string('banner_berita')->default('Group 70.avif');
            $table->string('banner_galeri')->default('Group 70.avif');
            $table->string('banner_kontak')->default('Group 70.avif');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};
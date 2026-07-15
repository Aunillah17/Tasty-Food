<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->string('menu_home')->default('Home');
            $table->string('menu_tentang')->default('Tentang');
            $table->string('menu_berita')->default('Berita');
            $table->string('menu_galeri')->default('Galeri');
            $table->string('menu_kontak')->default('Kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};

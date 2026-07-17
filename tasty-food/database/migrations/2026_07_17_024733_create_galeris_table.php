<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();
            $table->string('gambar'); // Nama file gambar
            $table->string('judul'); // Judul foto
            $table->text('deskripsi')->nullable(); // Keterangan opsional
            $table->boolean('is_carousel')->default(false); // TRUE = Slider Atas, FALSE = Grid Bawah
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
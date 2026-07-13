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
    Schema::create('tentangs', function (Blueprint $table) {
        $table->id();
        
        // 1. Konten Section Tasty Food
        $table->string('tasty_judul');
        $table->text('tasty_deskripsi_tebal');
        $table->text('tasty_deskripsi_biasa');
        $table->string('tasty_img1');
        $table->string('tasty_img2');

        // 2. Konten Section Visi
        $table->text('visi_deskripsi');
        $table->string('visi_img1');
        $table->string('visi_img2');

        // 3. Konten Section Misi
        $table->text('misi_deskripsi');
        $table->string('misi_img');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentangs');
    }
};

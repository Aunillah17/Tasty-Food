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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();

            $table->string('logo_text')->default('TASTY FOOD');
        
            // 1. Hero Section & Tentang Preview
            $table->string('hero_judul_atas');
            $table->string('hero_judul_bawah');
            $table->text('hero_deskripsi');
            $table->string('hero_img');
            $table->text('about_preview');

            // 2. Data Card 1
            $table->string('card1_img');
            $table->string('card1_judul');
            $table->text('card1_deskripsi');

            // 3. Data Card 2
            $table->string('card2_img');
            $table->string('card2_judul');
            $table->text('card2_deskripsi');

            // 4. Data Card 3
            $table->string('card3_img');
            $table->string('card3_judul');
            $table->text('card3_deskripsi');

            // 5. Data Card 4
            $table->string('card4_img');
            $table->string('card4_judul');
            $table->text('card4_deskripsi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('brand_title')->default('Tasty Food');
            $table->text('brand_desc');
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('location_text');
            $table->string('copyright_text')->default('Copyright &copy;2026 All rights reserved.');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
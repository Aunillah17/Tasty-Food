<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil semua seeder secara berurutan sesuai halamannya
        $this->call([
            HomeSeeder::class,    // Mengisi data awal halaman Home
            TentangSeeder::class, // Mengisi data awal halaman Tentang
            BeritaSeeder::class,  // Mengisi 9 data berita sesuai mockup gambar[cite: 1]
        ]);
    }
}
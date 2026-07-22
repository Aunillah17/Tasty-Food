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
            HomeSeeder::class,
            TentangSeeder::class,
            BeritaSeeder::class,
            KontakSeeder::class,
            UserSeeder::class,
        ]);
    }
}
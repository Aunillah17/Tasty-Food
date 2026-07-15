<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    public function run(): void
    {
        Navbar::truncate();
        Navbar::create([
            'menu_home' => 'Home',
            'menu_tentang' => 'Tentang',
            'menu_berita' => 'Berita',
            'menu_galeri' => 'Galeri',
            'menu_kontak' => 'Kontak',
        ]);
    }
}
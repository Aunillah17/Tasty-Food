<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        // Berita Contoh 1
        Berita::create([
            'judul' => 'Kelezatan Makanan Khas Tasty Food yang Menggugah Selera',
            'ringkasan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rasa autentik yang bikin nagih.',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'gambar' => 'berita1.jpg'
        ]);

        // Berita Contoh 2
        Berita::create([
            'judul' => 'Rahasia Dapur Tasty Food: Bahan Segar Pilihan Utama',
            'ringkasan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Kualitas bahan selalu dijaga.',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus turpis massa tincidunt dui ut ornare lectus. Id porta nibh venenatis cras sed felis eget. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed. Platea dictumst quisque sagittis purus sit amet volutpat consequat.',
            'gambar' => 'berita2.jpg'
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        Home::create([
            // Hero Section & Tentang Preview
            'hero_judul_atas'  => 'Healthy',
            'hero_judul_bawah' => 'Tasty Food',
            'hero_deskripsi'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed lorem dictum, varius justo id, interdum diam. In hac habitasse platea dictumst. Fusce id lorem vel eros elementum.',
            'hero_img'         => 'img-4.avif',
            'about_preview'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet lectus convallis, interdum diam non, interdum diam. In hac habitasse platea dictumst. Sed feugiat elementum dui vel vulputate.',

            // Card 1
            'card1_img'       => 'img-1.avif',
            'card1_judul'     => 'Lorem Ipsum',
            'card1_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi efficitur maecenas.',

            // Card 2
            'card2_img'       => 'img-2.avif',
            'card2_judul'     => 'Lorem Ipsum',
            'card2_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi efficitur maecenas.',

            // Card 3
            'card3_img'       => 'img-3.avif',
            'card3_judul'     => 'Lorem Ipsum',
            'card3_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi efficitur maecenas.',

            // Card 4
            'card4_img'       => 'img-4.avif',
            'card4_judul'     => 'Lorem Ipsum',
            'card4_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi efficitur maecenas.',
        ]);
    }
}
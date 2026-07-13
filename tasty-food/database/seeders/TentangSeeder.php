<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tentang;

class TentangSeeder extends Seeder
{
    public function run(): void
    {
        Tentang::create([
            // Tasty Food Section
            'tasty_judul' => 'Tasty Food',
            'tasty_deskripsi_tebal' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce si t amet viverra ante.',
            'tasty_deskripsi_biasa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce si t amet viverra ante.',
            'tasty_img1' => 'brooke-lark-oaz0raysASk-unsplash.jpg',
            'tasty_img2' => 'sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg',

            // Visi Section
            'visi_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet, cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus ut suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio.',
            'visi_img1' => 'fathul-abrar-T-qI_MI2EMA-unsplash.jpg',
            'visi_img2' => 'michele-blackwell-rAyCBQTH7ws-unsplash.jpg',

            // Misi Section
            'misi_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet, cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus ut suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio.',
            'misi_img' => 'sanket-shah-SVA7TyHxojY-unsplash.jpg',
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Data untuk Carousel / Slider Atas (is_carousel = true)
        $carouselItems = [
            [
                'gambar' => 'ella-olsson-mmnKI8kMxpc-unsplash.avif',
                'judul' => 'Menu Sarapan Sehat Organik',
                'deskripsi' => 'Kombinasi buah segar dan sereal untuk memulai hari.',
                'is_carousel' => true
            ],
            [
                'gambar' => 'jonathan-borba-Gkc_xM3VY34-unsplash.avif',
                'judul' => 'Sajian Utama Spesial Malam',
                'deskripsi' => 'Makan malam mewah dengan resep rahasia koki profesional.',
                'is_carousel' => true
            ],
            [
                'gambar' => 'mariana-medvedeva-iNwCO9ycBlc-unsplash.avif',
                'judul' => 'Pencuci Mulut Es Krim Buah',
                'deskripsi' => 'Kesegaran es krim dipadukan dengan potongan strawberry segar.',
                'is_carousel' => true
            ],
            [
                'gambar' => 'michele-blackwell-rAyCBQTH7ws-unsplash.avif',
                'judul' => 'Minuman Matcha Latte Dingin',
                'deskripsi' => 'Racikan teh hijau murni kualitas premium berpadu dengan susu gurih.',
                'is_carousel' => true
            ],
        ];

        // 2. Data untuk Grid Utama Bawah (is_carousel = false)
        $gridItems = [
            ['gambar' => 'anh-nguyen-kcA-c3f_3FE-unsplash.avif', 'judul' => 'Sajian Utama', 'is_carousel' => false],
            ['gambar' => 'anna-pelzer-IGfIGP5ONV0-unsplash.avif', 'judul' => 'Menu Salad Segar', 'is_carousel' => false],
            ['gambar' => 'brooke-lark-1Rm9GLHV0UA-unsplash.avif', 'judul' => 'Sarapan Estetik', 'is_carousel' => false],
            ['gambar' => 'brooke-lark-nBtmglfY0HU-unsplash.avif', 'judul' => 'Kue Manis Penutup', 'is_carousel' => false],
            ['gambar' => 'brooke-lark-oaz0raysASk-unsplash.avif', 'judul' => 'Porsi Buah Pagi', 'is_carousel' => false],
            ['gambar' => 'eiliv-aceron-ZuIDLSz3XLg-unsplash.avif', 'judul' => 'Makan Siang Lezat', 'is_carousel' => false],
            ['gambar' => 'fathul-abrar-T-qI_MI2EMA-unsplash.avif', 'judul' => 'Kuliner Nusantara', 'is_carousel' => false],
            ['gambar' => 'jimmy-dean-Jvw3pxgeiZw-unsplash.avif', 'judul' => 'Daging Panggang Premium', 'is_carousel' => false],
            ['gambar' => 'luisa-brimble-HvXEbkcXjSk-unsplash.avif', 'judul' => 'Jamuan Bersama Keluarga', 'is_carousel' => false],
            ['gambar' => 'sebastian-coman-photography-eBmyH7oO5wY-unsplash.avif', 'judul' => 'Minuman Spesial Resto', 'is_carousel' => false],
            ['gambar' => 'sanket-shah-SVA7TyHxojY-unsplash.avif', 'judul' => 'Kudapan Sore', 'is_carousel' => false],
            ['gambar' => 'monika-grabkowska-P1aohbiT-EY-unsplash.avif', 'judul' => 'Puding Cokelat Spesial', 'is_carousel' => false],
        ];

        // Masukkan data carousel ke database
        foreach ($carouselItems as $item) {
            Galeri::create($item);
        }

        // Masukkan data grid ke database
        foreach ($gridItems as $item) {
            Galeri::create($item);
        }
    }
}
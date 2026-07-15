<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menghapus data berita lama agar tidak double saat di-seed ulang
        Berita::truncate();

        // 1. DATA BERITA UTAMA (Paling atas di mockup)
        Berita::create([
            'judul' => 'Apa Saja Makanan Khas Nusantara?',
            'deskripsi_pendek' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.',
            'detail_berita' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.",
            'gambar' => 'fathul-abrar-T-qI_MI2EMA-unsplash.avif', // Silahkan ganti nama file aset lu nanti
        ]);

        // 2. DATA GRID BERITA LAINNYA (8 Card di bawahnya)
        $beritaLainnya = [
            [
                'judul' => 'LOREM IPSUM',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.',
                'gambar' => 'sanket-shah-SVA7TyHxojY-unsplash.avif'
            ],
            [
                'judul' => 'LOREM IPSUM',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.',
                'gambar' => 'sebastian-coman-photography-eBmyH7oO5wY-unsplash.avif'
            ],
            [
                'judul' => 'LOREM IPSUM',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.',
                'gambar' => 'jimmy-dean-Jvw3pxgeiZw-unsplash.avif'
            ],
            [
                'judul' => 'LOREM IPSUM',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.',
                'gambar' => 'luisa-brimble-HvXEbkcXjSk-unsplash.avif'
            ],
            [
                'judul' => 'LOREM IPSUM',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.',
                'gambar' => 'sanket-shah-SVA7TyHxojY-unsplash.avif'
            ],
            [
                'judul' => 'LOREM IPSUM',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.',
                'gambar' => 'sebastian-coman-photography-eBmyH7oO5wY-unsplash.avif'
            ],
            [
                'judul' => 'LOREM IPSUM',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.',
                'gambar' => 'jimmy-dean-Jvw3pxgeiZw-unsplash.avif'
            ],
            [
                'judul' => 'LOREM IPSUM',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu.',
                'gambar' => 'luisa-brimble-HvXEbkcXjSk-unsplash.avif'
            ],
        ];

        foreach ($beritaLainnya as $item) {
            Berita::create([
                'judul' => $item['judul'],
                'deskripsi_pendek' => $item['deskripsi'],
                'detail_berita' => $item['deskripsi'] . ' Taruh isi lengkap konten berita di sini jika halaman detail dibuka.',
                'gambar' => $item['gambar'],
            ]);
        }
    }
}
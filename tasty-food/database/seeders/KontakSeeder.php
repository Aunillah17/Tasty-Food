<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak;

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        Kontak::create([
            'email' => 'tastyfood@gmail.com',
            'phone' => '+62 812 3456 7890',
            'location' => 'Kota Bandung, Jawa Barat',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5588059086115!2d107.66179867587425!3d-6.943197993057106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7ea519b7d5f%3A0xc3afbf68fe6a9282!2sCyberlabs%20-%20PT%20Komunikasi%20Cerdas%20Indonesia!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid'
        ]);
    }
}
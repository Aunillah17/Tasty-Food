<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@tastyfood.com'],
            [
                'name' => 'Admin Tasty Food',
                'password' => Hash::make('Tastyadmin123'),
            ]
        );
    }
}
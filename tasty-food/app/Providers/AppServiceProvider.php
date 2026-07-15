<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use App\Models\Navbar;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 1. Memaksa Laravel menggunakan URL Codespaces kamu secara global (Tetap Aman)
        URL::forceRootUrl('https://ominous-couscous-g4rw7pw944jxcpwgw-8000.app.github.dev');

        // 2. Menyediakan data navbar ke semua halaman secara otomatis jika tabelnya sudah di-migrate
        if (\Schema::hasTable('navbars')) {
            $navbarData = Navbar::first() ?? new Navbar([
                'menu_home' => 'Home',
                'menu_tentang' => 'Tentang',
                'menu_berita' => 'Berita',
                'menu_galeri' => 'Galeri',
                'menu_kontak' => 'Kontak',
            ]);
            View::share('globalNavbar', $navbarData);
        }
    }
}
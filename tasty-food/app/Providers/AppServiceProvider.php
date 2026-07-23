<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\Navbar;
use App\Models\Home;
use App\Models\Footer;

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
        // Baris URL::forceRootUrl udah dihapus biar otomatis ngikutin localhost / environment saat ini

        // 1. Menyediakan data navbar & banner global ke semua halaman secara otomatis
        if (Schema::hasTable('navbars')) {
            $navbarData = Navbar::first() ?? new Navbar([
                'menu_home' => 'Home',
                'menu_tentang' => 'Tentang',
                'menu_berita' => 'Berita',
                'menu_galeri' => 'Galeri',
                'menu_kontak' => 'Kontak',
                'banner_tentang' => 'Group 70.avif',
                'banner_berita' => 'Group 70.avif',
                'banner_galeri' => 'Group 70.avif',
                'banner_kontak' => 'Group 70.avif',
            ]);
            
            View::share('globalNavbar', $navbarData);
        }

        // 2. Menyediakan data homeGlobal (untuk Teks Logo) jika tabel sudah ada
        if (Schema::hasTable('homes')) {
            View::share('homeGlobal', Home::first());
        }

        // 3. Menyediakan data footerGlobal jika tabel sudah ada
        if (Schema::hasTable('footers')) {
            View::share('footerGlobal', Footer::first());
        }
    }
}
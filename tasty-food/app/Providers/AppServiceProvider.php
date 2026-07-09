<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Memaksa Laravel menggunakan URL Codespaces kamu secara global
        URL::forceRootUrl('https://ominous-couscous-g4rw7pw944jxcpwgw-8000.app.github.dev');
    }
}
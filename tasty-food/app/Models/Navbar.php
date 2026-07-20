<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $table = 'navbars';
    
    protected $fillable = [
        'menu_home',
        'menu_tentang',
        'menu_berita',
        'menu_galeri',
        'menu_kontak',
        'banner_tentang',
        'banner_berita',
        'banner_galeri',
        'banner_kontak'
    ];
}
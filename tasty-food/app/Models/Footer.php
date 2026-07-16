<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_title', 'brand_desc', 'facebook_url', 'twitter_url', 
        'email_address', 'phone_number', 'location_text', 'copyright_text'
    ];
}
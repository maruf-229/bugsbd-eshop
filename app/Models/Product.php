<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'meta_description',
        'meta_keywords',
        'logo',
        'favicon',
        'address',
        'email',
        'phone',
        'footer',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'youtube_url',
    ];
}

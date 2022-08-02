<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'sammary',
        'description',
        'additional_info',
        'strock',
        'cat_id',
        'image',
        'bid_price',
        'best_bid_price',
        'user_id',
        'active',
    ];

   
}

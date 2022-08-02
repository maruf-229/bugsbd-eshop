<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_first',
        'title_second',
        'title_third',
        'image',
        'active',
        'sub_title',
    ];

   
}

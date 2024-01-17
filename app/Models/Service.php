<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'images',
        'image_logo',
        'title_ar',
        'title_en',
        'desc_ar',
        'desc_en',
    ];

    protected $casts = [
        'images' => 'array'
    ];
}

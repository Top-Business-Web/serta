<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutArch extends Model
{
    use HasFactory;

    protected $table = 'about_arches';

    protected $fillable = [
        'title_ar',
        'title_en',
        'image',
        'pdf',
        'description_ar',
        'description_en',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryArch extends Model
{
    use HasFactory;

    protected $table = 'category_arches';

    protected $fillable = [
        'title_ar',
        'title_en',
    ];
}

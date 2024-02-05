<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefits extends Model
{
    use HasFactory;

    protected $table = 'benefits';

    protected $fillable = [
        'image',
        'title_ar',
        'title_en'
    ];
}

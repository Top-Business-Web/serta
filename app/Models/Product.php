<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

//    protected $guarded = [];

    protected $fillable = [
        'title_ar',
        'title_en',
        'sub_title_ar',
        'sub_title_en',
        'desc_ar',
        'desc_en',
        'images',
        'details',
        'sub_categories_id',
    ];

    protected $casts = [
        'images' => 'array',
        'details' => 'array',
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_categories_id', 'id');
    }
}

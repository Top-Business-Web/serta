<?php

namespace App\Models;

use App\Enums\SectorTypeEnum;
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
        'location_ar',
        'location_en',
        'year',
        'sector',
        'status',
        'desc_ar',
        'desc_en',
        'images',
        'details',
        'sub_categories_id',
    ];

    protected $casts = [
        'images' => 'array',
        'details' => 'array',
        'sector' => SectorTypeEnum::class,
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_categories_id', 'id');
    }
}

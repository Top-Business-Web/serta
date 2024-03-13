<?php

namespace App\Models;

use App\Enums\SectorTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Architecture extends Model
{
    use HasFactory;

    protected $table = 'architectures';

    protected $fillable = [
        'title_ar',
        'title_en',
        'categoryArch_id',
        'customer_ar',
        'customer_en',
        'location_ar',
        'location_en',
        'year',
        'sector',
        'status',
        'desc_ar',
        'desc_en',
        'images',
        'details',
    ];

    protected $casts = [
        'images' => 'array',
        'details' => 'array',
        'sector' => 'string',
    ];


    public function categoryArch() : BelongsTo
    {
        return $this->belongsTo(CategoryArch::class, 'categoryArch_id', 'id');
    }
}

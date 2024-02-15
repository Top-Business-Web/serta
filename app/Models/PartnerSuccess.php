<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerSuccess extends Model
{
    use HasFactory;

    protected $name = 'partner_successes';

    protected $fillable = [
        'image',
        'second_image',
    ];
}

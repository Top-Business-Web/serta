<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchitectureRequest extends Model
{
    use HasFactory;

    protected $table = 'architecture_requests';

    protected $fillable = [
        'name',
        'adjective',
        'email',
        'phone',
        'location',
        'category',
        'space',
        'dimensions',
        'subject',
        'message',
    ];
}

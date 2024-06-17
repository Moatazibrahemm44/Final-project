<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'original_price',
        'image',
        'address',
        'slug',
    ];
}

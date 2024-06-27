<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationInfo extends Model
{   use HasFactory;
    protected $table = 'destination_info';
    protected $fillable = [ 
        'destination_id',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
        'bigimage',
        'heading',
        'description',
        'price',
    ];

    public function destination()
    {
        return $this->belongsTo(destination::class);
    }
}
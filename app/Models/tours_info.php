<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tours_info extends Model
{
    protected $table = 'tours_info'; // Specify the table name if it's different

    // Define the relationship with tours table
    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id', 'id');
    }
}


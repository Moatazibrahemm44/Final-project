<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];
    protected $table = 'tours'; // Specify the table name if it's different

    // Define the relationship with tours_info table
    public function tourInfo()
    {
        return $this->hasOne(Tours_info::class, 'tour_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function locationCategory()
    {
        return $this->belongsTo(LocationCategory::class, 'location_category_id');
    }
}

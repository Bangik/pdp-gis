<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    use HasFactory;
    protected $fillable = [
        'farm_id',
        'name',
        'area',
        'geojson_data',
        'color'
    ];

    public function farm()
    {
        return $this->belongsTo(Farm::class);
    }
}

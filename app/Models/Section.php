<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'farm_id',
        'name',
        'area',
        'geojson_data',
        'latitude',
        'longitude',
        'elevation',
        'color'
    ];

    public function farm()
    {
        return $this->belongsTo(Farm::class);
    }

    public function blocks()
    {
        return $this->hasMany(Block::class);
    }
}

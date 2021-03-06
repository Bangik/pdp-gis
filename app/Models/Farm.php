<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'districts',
        'city',
        'area',
        'geojson_data',
        'color'
    ];

    public function section()
    {
        return $this->hasMany(Section::class);
    }
}

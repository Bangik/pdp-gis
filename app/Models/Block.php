<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_id',
        'name',
        'slug',
        'description',
        'latitude',
        'longitude',
        'area',
        'elevation',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}

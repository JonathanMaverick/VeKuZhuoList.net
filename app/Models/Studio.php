<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $fillable = [
        'studio_name',
        'studio_logo',
        'studio_description'
    ];

    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
}

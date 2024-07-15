<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

    protected $fillable = [
        'genre_name',
    ];

    public function animes()
    {
        return $this->belongsToMany(Anime::class, 'anime_genres');
    }

    use HasFactory;
}

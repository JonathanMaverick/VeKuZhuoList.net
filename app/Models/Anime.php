<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'anime_name',
        'release_date',
        'views',
        'mal_score',
        'synopsis',
        'trailer_url',
    ];
    use HasFactory;
}


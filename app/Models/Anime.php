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
    'image_url',
    'total_episodes',
    'studio_id',
    'season_id', 
    ];

  public function genres()
  {
    return $this->belongsToMany(Genre::class, 'anime_genres');
  }

  public function studio()
  {
    return $this->belongsTo(Studio::class);
  }

  public function season()
  {
    return $this->belongsTo(Season::class);
  }

  public function characters()
  {
    return $this->hasMany(Character::class);
  }

  use HasFactory;
}

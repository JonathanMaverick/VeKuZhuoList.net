<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

  protected $fillable = [
    'character_name',
    'character_image',
    'anime_id',
    'voice_actor_id',
  ];

  public function animes()
  {
    return $this->belongsTo(Anime::class, 'anime_characters');
  }

  public function voiceActor()
  {
    return $this->belongsTo(VoiceActor::class);
  }

  use HasFactory;
}

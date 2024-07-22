<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoiceActor extends Model
{
  use HasFactory;

  protected $fillable = [
    'voice_actor_name',
    'voice_actor_image'
  ];

  public function characters()
  {
    return $this->hasMany(Character::class);
  }
}

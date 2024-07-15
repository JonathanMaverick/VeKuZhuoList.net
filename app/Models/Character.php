<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    protected $fillable = [
        'character_name',
    ];

    public function animes()
    {
        return $this->belongsTo(Anime::class, 'anime_characters');
    }

    public function voiceActors()
    {
        return $this->belongsTo(VoiceActor::class, 'character_voice_actors');
    }

    use HasFactory;
}

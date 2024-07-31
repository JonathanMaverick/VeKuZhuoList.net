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

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function voiceActor()
    {
        return $this->belongsTo(VoiceActor::class);
    }

    use HasFactory;
}

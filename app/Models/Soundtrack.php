<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soundtrack extends Model
{
    protected $fillable = [
        'soundtrack_name',
        'audio_url',
        'soundtrack_type'
    ];

    public function animes()
    {
        return $this->belongsTo(Anime::class);
    }

    use HasFactory;
}

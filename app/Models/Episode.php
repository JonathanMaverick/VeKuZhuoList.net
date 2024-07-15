<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{

    protected $fillable = [
        'episode_title',
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
        'season_name',
    ];

    public function animes()
    {
        return $this->hasMany(Anime::class);
    }
    
    use HasFactory;
}

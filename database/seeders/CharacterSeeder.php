<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Character::create([
            'character_name' => 'Naruto Uzumaki',
            'character_image' => 'https://cdn.myanimelist.net/images/characters/2/284121.jpg',
            'anime_id' => 1,
            'voice_actor_id' => 1
        ]);
    }
}

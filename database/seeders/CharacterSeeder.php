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
        $characters = [
            [
                'character_name' => 'Naruto Uzumaki',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/2/284121.jpg',
                'anime_id' => 1,
                'voice_actor_id' => 1
            ],
            [
                'character_name' => 'Kakashi Hatake',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/7/284129.jpg',
                'anime_id' => 1,
                'voice_actor_id' => 2
            ],
            [
                'character_name' => 'Sasuke Uchiha',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/6/284127.jpg',
                'anime_id' => 1,
                'voice_actor_id' => 3
            ],
            [
                'character_name' => 'Sakura Haruno',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/9/69275.jpg',
                'anime_id' => 1,
                'voice_actor_id' => 4
            ]
        ];

        Character::insert($characters);
    }
}

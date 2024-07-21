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
            ],
            [
                'character_name' => 'Yuuji Itadori',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/6/467646.jpg',
                'anime_id' => 2,
                'voice_actor_id' => 5
            ],
            [
                'character_name' => 'Megumi Fushiguro',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/2/392689.jpg',
                'anime_id' => 2,
                'voice_actor_id' => 6
            ],
            [
                'character_name' => 'Nobara Kugisaki',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/12/422313.jpg',
                'anime_id' => 2,
                'voice_actor_id' => 7
            ],
            [
                'character_name' => 'Gojo Satoru',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/15/422168.jpg',
                'anime_id' => 2,
                'voice_actor_id' => 8
            ],
            [
                'character_name' => 'Eren Yeager',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/10/216895.jpg',
                'anime_id' => 3,
                'voice_actor_id' => 9
            ],
            [
                'character_name' => 'Mikasa Ackerman',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/9/215563.jpg',
                'anime_id' => 3,
                'voice_actor_id' => 10
            ],
            [
                'character_name' => 'Armin Arlert',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/8/220267.jpg',
                'anime_id' => 3,
                'voice_actor_id' => 11
            ],
            [
                'character_name' => 'Power',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/7/494969.jpg',
                'anime_id' => 4,
                'voice_actor_id' => 12
            ],
            [
                'character_name' => 'Denji',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/3/492407.jpg',
                'anime_id' => 4,
                'voice_actor_id' => 13
            ]
        ];

        Character::insert($characters);
    }
}

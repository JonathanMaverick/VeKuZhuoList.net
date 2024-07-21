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
            ],
            [
                'character_name' => 'Violet Evergarden',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/9/345616.jpg',
                'anime_id' => 5,
                'voice_actor_id' => 10
            ],
            [
                'character_name' => 'Kanna Kamui',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/2/322173.jpg',
                'anime_id' => 6,
                'voice_actor_id' => 14
            ],
            [
                'character_name' => 'Tohru',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/11/322676.jpg',
                'anime_id' => 6,
                'voice_actor_id' => 15
            ],
            [
                'character_name' => 'Kobayashi',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/3/456442.jpg',
                'anime_id' => 6,
                'voice_actor_id' => 16
            ],
            [
                'character_name' => 'Yuuko Aioi',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/15/114020.jpg',
                'anime_id' => 7,
                'voice_actor_id' => 17
            ],
            [
                'character_name' => 'Saitama',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/11/294388.jpg',
                'anime_id' => 8,
                'voice_actor_id' => 18
            ],
            [
                'character_name' => 'Genos',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/9/297329.jpg',
                'anime_id' => 8,
                'voice_actor_id' => 19
            ],
            [
                'character_name' => 'Killua Zoldyck',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/2/327920.jpg',
                'anime_id' => 9,
                'voice_actor_id' => 20
            ],
            [
                'character_name' => 'Gon Freecss',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/11/174517.jpg',
                'anime_id' => 9,
                'voice_actor_id' => 22
            ],
            [
                'character_name' => 'Leorio Paradinight',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/11/549311.jpg',
                'anime_id' => 9,
                'voice_actor_id' => 23
            ],
            [
                'character_name' => 'Kurapika',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/3/549312.jpg',
                'anime_id' => 9,
                'voice_actor_id' => 21
            ],
            [
                'character_name' => 'Sora',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/12/274345.jpg',
                'anime_id' => 10,
                'voice_actor_id' => 24
            ],
            [
                'character_name' => 'Shiro',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/12/274347.jpg',
                'anime_id' => 10,
                'voice_actor_id' => 25
            ],
            [
                'character_name' => 'Tanjiro Kamado',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/6/386735.jpg',
                'anime_id' => 11,
                'voice_actor_id' => 26
            ],
            [
                'character_name' => 'Nezuko Kamado',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/15/384829.jpg',
                'anime_id' => 11,
                'voice_actor_id' => 27
            ],
            [
                'character_name' => 'Zenitsu Agatsuma',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/10/459689.jpg',
                'anime_id' => 11,
                'voice_actor_id' => 28
            ],
            [
                'character_name' => 'Inosuke Hashibira',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/3/329560.jpg',
                'anime_id' => 11,
                'voice_actor_id' => 24
            ],
            [
                'character_name' => 'Saber',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/6/275276.jpg',
                'anime_id' => 12,
                'voice_actor_id' => 29
            ],
            [
                'character_name' => 'Loid Forger',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/2/457747.jpg',
                'anime-id' => 13,
                'voice_actor_id' => 30
            ],
            [
                'character_name' => 'Yor Forger',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/11/457934.jpg',
                'anime_id' => 13,
                'voice_actor_id' => 31
            ],
            [
                'character_name' => 'Anya Forger',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/4/457933.jpg',
                'anime_id' => 13,
                'voice_actor_id' => 32
            ],
            [
                'character_name' => 'Shikanoko Noko',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/6/542119.jpg',
                'anime_id' => 14,
                'voice_actor_id' => 22
            ],
            [
                'character_name' => 'Torako "Koshitan" Koshi',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/6/542120.jpg',
                'anime_id' => 14,
                'voice_actor_id' => 22
            ],
            [
                'character_name' => 'Vivy (Diva)',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/5/437608.jpg',
                'anime_id' => 15,
                'voice_actor_id' => 32
            ],
            [
                'character_name' => 'Bojji',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/12/451497.jpg',
                'anime_id' => 16,
                'voice_actor_id' => 33
            ],
            [
                'character_name' => 'Kage',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/8/451498.jpg',
                'anime_id' => 16,
                'voice_actor_id' => 34
            ],
            [
                'character_name' => 'Edward Elric',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/9/72533.jpg',
                'anime_id' => 17,
                'voice_actor_id' => 35
            ],
            [
                'character_name' => 'Alphonse Elric',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/5/54265.jpg',
                'anime_id' => 17,
                'voice_actor_id' => 36
            ],
            [
                'character_name' => 'Shoto Todoroki',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/12/332527.jpg',
                'anime_id' => 18,
                'voice_actor_id' => 9
            ],
            [
                'character_name' => 'Katsuki Bakugo',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/12/299406.jpg',
                'anime_id' => 18,
                'voice_actor_id' => 37
            ],
            [
                'character_name' => 'Izuku Midoriya',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/12/332526.jpg',
                'anime_id' => 18,
                'voice_actor_id' => 38
            ],
            [
                'character_name' => 'Kaguya Shinomiya',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/2/504723.jpg',
                'anime_id' => 19,
                'voice_actor_id' => 39
            ],
            [
                'character_name' => 'Miyuki Shirogane',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/16/371541.jpg',
                'anime_id' => 19,
                'voice_actor_id' => 18
            ],
            [
                'character_name' => 'Kazuto Kirigaya',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/7/204821.jpg',
                'anime_id' => 20,
                'voice_actor_id' => 24
            ],
            [
                'character_name' => 'Asuna Yuuki',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/15/262053.jpg',
                'anime_id' => 20,
                'voice_actor_id' => 40
            ],
            [
                'character_name' => 'Chitoge Kirisaki',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/7/241651.jpg',
                'anime_id' => 21,
                'voice_actor_id' => 41
            ],
            [
                'character_name' => 'Raku Ichijo',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/12/242215.jpg',
                'anime_id' => 21,
                'voice_actor_id' => 42
            ],
            [
                'character_name' => 'Kosaki Onodera',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/9/241653.jpg',
                'anime_id' => 21,
                'voice_actor_id' => 43
            ],
            [
                'character_name' => 'Marin Kitagawa',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/6/457309.jpg',
                'anime_id' => 22,
                'voice_actor_id' => 44
            ],
            [
                'character_name' => 'Wakana Gojo',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/5/472608.jpg',
                'anime_id' => 22,
                'voice_actor_id' => 45
            ],
            [
                'character_name' => 'Arima Kana',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/6/503733.jpg',
                'anime_id' => 23,
                'voice_actor_id' => 22
            ],
            [
                'character_name' => 'Aquamarine Hoshino',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/9/496455.jpg',
                'anime_id' => 23,
                'voice_actor_id' => 46
            ],
            [
                'character_name' => 'Kurokawa Akane',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/5/512681.jpg',
                'anime_id' => 23,
                'voice_actor_id' => 47
            ],
            [
                'character_name' => 'Tokuyuki Houjou',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/13/525049.jpg',
                'anime_id' => 24,
                'voice_actor_id' => 48
            ],
            [
                'character_name' => 'Yorishige Suwa',
                'character_image' => 'https://cdn.myanimelist.net/images/characters/2/556141.jpg',
                'anime_id' => 24,
                'voice_actor_id' => 8
            ],
            [
                
            ]
        ];

        Character::insert($characters);
    }
}

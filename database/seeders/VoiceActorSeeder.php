<?php

namespace Database\Seeders;

use App\Models\VoiceActor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoiceActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $voice_actor = [
            [
                'voice_actor_name' => 'Junko Takeuchi',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/1/54677.jpg'
            ],
            [
                'voice_actor_name' => 'Kazuhiko Inoue',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/3/68015.jpg'
            ],
            [
                'voice_actor_name' => 'Noriaki Sugiyama',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/3/73289.jpg'
            ],
            [
                'voice_actor_name' => 'Chie Nakamura',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/2/75895.jpg'
            ],
            [
                'voice_actor_name' => 'Junya Enoki',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/2/62840.jpg'

            ],
            [
                'voice_actor_name' => 'Yuma Uchida',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/2/73526.jpg'
            ],
            [
                'voice_actor_name' => 'Asami Seto',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/3/65839.jpg'
            ],
            [
                'voice_actor_name' => 'Yuuichi Nakamura',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/1/74056.jpg'
            ],
            [
                'voice_actor_name' => 'Yuuki Kaji',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/2/66416.jpg'
            ],
            [
                'voice_actor_name' => 'Yui Ishikawa',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/2/69967.jpg'
            ],
            [
                'voice_actor_name' => 'Marina Inoue',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/1/68016.jpg'
            ],
            [
                'voice_actor_name' => 'Faizou Ai',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/2/76160.jpg'
            ],
            [
                'voice_actor_name' => 'Kikunosuke Toya',
                'voice_actor_image' => 'https://cdn.myanimelist.net/images/characters/3/492407.jpg'
            ]
        ];

        VoiceActor::insert($voice_actor);
    }
}

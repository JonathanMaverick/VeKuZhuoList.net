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
        VoiceActor::create([
            'voice_actor_name' => 'Junko Takeuchi',
            'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/1/54677.jpg'
        ]);

        VoiceActor::create([
            'voice_actor_name' => 'Kazuhiko Inoue',
            'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/3/68015.jpg'
        ]);

        VoiceActor::create([
            'voice_actor_name' => 'Noriaki Sugiyama',
            'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/3/73289.jpg'
        ]);

        VoiceActor::create([
            'voice_actor_name' => 'Chie Nakamura',
            'voice_actor_image' => 'https://cdn.myanimelist.net/images/voiceactors/2/75895.jpg'
        ]);
    }
}

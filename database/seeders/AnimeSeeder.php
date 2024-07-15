<?php

namespace Database\Seeders;

use App\Models\Anime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create();

        Anime::create([
            'anime_name' => 'Naruto',
            'release_date' => '2002-10-03',
            'views' => 1000000,
            'mal_score' => 8.3,
            'synopsis' => 'Naruto Uzumaki, a mischievous adolescent ninja, struggles as he searches for recognition and dreams of becoming the Hokage, the village\'s leader and strongest ninja.',
            'trailer_url' => 'https://www.youtube.com/watch?v=QczGoCmX-pI',
            'image_url' => 'anime_images/naruto.png',
            'studio_id' => 15,
            'season_id' => 1,
        ]);
    }
}

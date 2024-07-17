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
        $faker = Factory::create();

        $anime = [
            [
                'anime_name' => 'Naruto',
                'release_date' => '2002-10-03',
                'views' => 1000000,
                'mal_score' => 8.27,
                'synopsis' => 'Naruto Uzumaki, a mischievous adolescent ninja, struggles as he searches for recognition and dreams of becoming the Hokage, the village\'s leader and strongest ninja.',
                'trailer_url' => 'QczGoCmX-pI',
                'total_episodes' => 500,
                'image_url' => 'anime_images/naruto.png',
                'studio_id' => 15,
                'season_id' => 1
            ],
        ];

        Anime::insert($anime);

        for ($i = 0; $i < 300; $i++) {
            Anime::create([
                'anime_name' => $faker->words(3, true),
                'release_date' => $faker->date(),
                'views' => $faker->numberBetween(1000, 1000000),
                'mal_score' => $faker->randomFloat(2, 1, 10),
                'synopsis' => $faker->paragraph(),
                'trailer_url' => $faker->regexify('[A-Za-z0-9_-]{11}'),
                'total_episodes' => $faker->numberBetween(12, 500),
                'image_url' => 'anime_images/' . $faker->word() . '.png',
                'studio_id' => $faker->numberBetween(1, 10),
                'season_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}

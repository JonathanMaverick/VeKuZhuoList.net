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

        for ($i = 0; $i < 10; $i++) {
            Anime::create([
                'anime_name' => $faker->words(3, true),
                'release_date' => $faker->date(),
                'views' => $faker->numberBetween(1000, 1000000),
                'mal_score' => $faker->randomFloat(2, 0, 10),
                'synopsis' => $faker->paragraph,
                'trailer_url' => $faker->url,
            ]);
        }
    }
}

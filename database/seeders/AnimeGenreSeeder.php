<?php

namespace Database\Seeders;

use App\Models\AnimeGenre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimeGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $anime_genre = [
            [
                'anime_id' => 1,
                'genre_id' => 1
            ],
            [
                'anime_id' => 1,
                'genre_id' => 2
            ],
            [
                'anime_id' => 1,
                'genre_id' => 5
            ]
        ];

        AnimeGenre::insert($anime_genre);
    }
}

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
            ],
            [
                'anime_id' => 2,
                'genre_id' => 1
            ],
            [
                'anime_id' => 2,
                'genre_id' => 5
            ],
            [
                'anime_id' => 3,
                'genre_id' => 1
            ],
            [
                'anime_id' => 3,
                'genre_id' => 4
            ],
            [
                'anime_id' => 4,
                'genre_id' => 1
            ],
            [
                'anime_id' => 4,
                'genre_id' => 5
            ],
            [
                'anime_id' => 5,
                'genre_id' => 4
            ],
            [
                'anime_id' => 5,
                'genre_id' => 5
            ],
            [
                'anime_id' => 6,
                'genre_id' => 5
            ],
            [
                'anime_id' => 6,
                'genre_id' => 11
            ],
            [
                'anime_id' => 7,
                'genre_id' => 3
            ],
            [
                'anime_id' => 8,
                'genre_id' => 1
            ],
            [
                'anime_id' => 8,
                'genre_id' => 3
            ],
            [
                'anime_id' => 9,
                'genre_id' => 1
            ],
            [
                'anime_id' => 9,
                'genre_id' => 2
            ],
            [
                'anime_id' => 9,
                'genre_id' => 5
            ],
            [
                'anime_id' => 10,
                'genre_id' => 3
            ],
            [
                'anime_id' => 10,
                'genre_id' => 5
            ],
            [
                'anime_id' => 11,
                'genre_id' => 1
            ],
            [
                'anime_id' => 11,
                'genre_id' => 5
            ],
            [
                'anime_id' => 12,
                'genre_id' => 1
            ],
            [
                'anime_id' => 12,
                'genre_id' => 5
            ],
            [
                'anime_id' => 12,
                'genre_id' => 13
            ],
            [
                'anime_id' => 13,
                'genre_id' => 1
            ],
            [
                'anime_id' => 13,
                'genre_id' => 3
            ],
            [
                'anime_id' => 14,
                'genre_id' => 3
            ],
            [
                'anime_id' => 15,
                'genre_id' => 1
            ],
            [
                'anime_id' => 15,
                'genre_id' => 10
            ],
            [
                'anime_id' => 16,
                'genre_id' => 2
            ],
            [
                'anime_id' => 16,
                'genre_id' => 5
            ],
            [
                'anime_id' => 17,
                'genre_id' => 1
            ],
            [
                'anime_id' => 17,
                'genre_id' => 2
            ],
            [
                'anime_id' => 17,
                'genre_id' => 4
            ],
            [
                'anime_id' => 17,
                'genre_id' => 5
            ],
            [
                'anime_id' => 18,
                'genre_id' => 1
            ],
            [
                'anime_id' => 19,
                'genre_id' => 3
            ],
            [
                'anime_id' => 20,
                'genre_id' => 1
            ],
            [
                'anime_id' => 20,
                'genre_id' => 2
            ],
            [
                'anime_id' => 20,
                'genre_id' => 5
            ],
            [
                'anime_id' => 20,
                'genre_id' => 9
            ],
            [
                'anime_id' => 21,
                'genre_id' => 3
            ],
            [
                'anime_id' => 21,
                'genre_id' => 9
            ],
            [
                'anime_id' => 22,
                'genre_id' => 9
            ],
            // lanjut 23
        ];

        AnimeGenre::insert($anime_genre);
    }
}

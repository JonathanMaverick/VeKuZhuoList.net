<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $genres = [
            [
                'genre_name' => 'Action',
            ],
            [
                'genre_name' => 'Adventure',
            ],
            [
                'genre_name' => 'Comedy',
            ],
            [
                'genre_name' => 'Drama',
            ],
            [
                'genre_name' => 'Fantasy',
            ],
            [
                'genre_name' => 'Magic',
            ],
            [
                'genre_name' => 'Mystery',
            ],
            [
                'genre_name' => 'Psychological',
            ],
            [
                'genre_name' => 'Romance',
            ],
            [
                'genre_name' => 'Sci-Fi',
            ],
            [
                'genre_name' => 'Slice of Life',
            ],
            [
                'genre_name' => 'Sports',
            ],
            [
                'genre_name' => 'Supernatural',
            ],
            [
                'genre_name' => 'Horror',
            ]
        ];

        Genre::insert($genres);

    }
}

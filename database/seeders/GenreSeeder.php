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
        Genre::create([
            'genre_name' => 'Action',
        ]);

        Genre::create([
            'genre_name' => 'Adventure',
        ]);

        Genre::create([
            'genre_name' => 'Comedy',
        ]);

        Genre::create([
            'genre_name' => 'Drama',
        ]);

        Genre::create([
            'genre_name' => 'Fantasy',
        ]);

        Genre::create([
            'genre_name' => 'Magic',
        ]);

        Genre::create([
            'genre_name' => 'Mecha',
        ]);

        Genre::create([
            'genre_name' => 'Music',
        ]);

        Genre::create([
            'genre_name' => 'Mystery',
        ]);

        Genre::create([
            'genre_name' => 'Psychological',
        ]);

        Genre::create([
            'genre_name' => 'Romance',
        ]);

        Genre::create([
            'genre_name' => 'Sci-Fi',
        ]);

        Genre::create([
            'genre_name' => 'Slice of Life',
        ]);

        Genre::create([
            'genre_name' => 'Sports',
        ]);

        Genre::create([
            'genre_name' => 'Supernatural',
        ]);

        Genre::create([
            'genre_name' => 'Horror',
        ]);

        Genre::create([
            'genre_name' => 'Thriller',
        ]);

        Genre::create([
            'genre_name' => 'Martial Arts',
        ]);

        Genre::create([
            'genre_name' => 'Game',
        ]);
    }
}

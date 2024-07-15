<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seasons = [
            'Winter', 'Spring', 'Summer', 'Fall'
        ];

        for ($year = 2007; $year <= 2024; $year++) {
            foreach ($seasons as $season) {
                Season::create([
                    'season_name' => $season . ' ' . $year
                ]);
            }
        }
    }
}

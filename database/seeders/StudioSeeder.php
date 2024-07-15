<?php

namespace Database\Seeders;

use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Studio::create([
            'studio_name' => 'MAPPA',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/e3a5163d-3b09-4e98-922b-79180a75539f_600x600_i?s=3289c478fd611569ebccd7ff076151df',
            'studio_description' => "MAPPA (MAPPA Co., Ltd.) is a Japanese animation studio founded by Masao Maruyama in June 2011, following his departure from Madhouse. It employs 408 people as of April 2024 between its Tokyo, Osaka and Sendai studios. Maruyama's intent was for the film Kono Sekai no Katasumi ni (In This Corner of the World) to be the studio's first release, though the project would not be complete until 2016. By that time, the studio had already co-produced Sakamichi no Apollon (Kids on the Slope) and Hajime no Ippo: Rising, and released its first original anime—Zankyou no Terror (Terror in Resonance).

The name MAPPA is an acronym for Maruyama Animation Produce Project Association. Maruyama stepped down as president in 2016 to form Studio M2. He was replaced by former Studio 4°C employee Manabu Ootsuka."
        ]);

        Studio::create([
            'studio_name' => 'Kyoto Animation',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/b066ff17-81d3-40db-b1f2-2927de70c0e3_600x600_i?s=edb149cf051e2d7984975063a1b3b3a7'
        ]);

        Studio::create([
            'studio_name' => 'Madhouse',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/e68488ab-f0a0-411f-850a-18fb3e21b96c_600x600_i?s=21618c9c3183ffded748d303a253b637'
        ]);

        Studio::create([
            'studio_name' => 'ufotable',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/03171393-4a85-451d-a025-4a3f05d1aede_600x600_i?s=48ebfd25c277dd148d41f88568f60aa6'
        ]);

        Studio::create([
            'studio_name' => 'Wit Studio',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/03171393-4a85-451d-a025-4a3f05d1aede_600x600_i?s=48ebfd25c277dd148d41f88568f60aa6'
        ]);

        Studio::create([
            'studio_name' => 'Bones',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/969047f0-a8ec-475e-ad0d-6e0d5cd8e17f_600x600_i?s=4145bdb95a29f3fe1447baa8045a7420'
        ]);

        Studio::create([
            'studio_name' => 'Studio Ghibli',
        ]);

        Studio::create([
            'studio_name' => 'A-1 Pictures',
        ]);

        Studio::create([
            'studio_name' => 'Shaft',
        ]);

        Studio::create([
            'studio_name' => 'CloverWorks',
        ]);

        Studio::create([
            'studio_name' => 'Trigger',
        ]);

        Studio::create([
            'studio_name' => 'Prduction I.G',
        ]);

        Studio::create([
            'studio_name' => 'Toe Animation',
        ]);

        Studio::create([
            'studio_name' => 'Sunrise',
        ]);

        Studio::create([
            'studio_name' => 'David Production',
        ]);
    }
}

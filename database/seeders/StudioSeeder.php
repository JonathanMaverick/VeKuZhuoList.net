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
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/b066ff17-81d3-40db-b1f2-2927de70c0e3_600x600_i?s=edb149cf051e2d7984975063a1b3b3a7',
            'studio_description' => "Kyoto Animation (Kyoto Animation Co., Ltd.) (often abbreviated KyoAni) is a Japanese animation studio based in Uji, Kyoto Prefecture. Youko Hatta (born Youko Sugiyama), who had previously studied under Osamu Tezuka as an artist at Mushi Production, founded the company with her husband, Hideaki Hatta, in 1981. Kyoto Animation spent its early years doing finishing work for other companies' productions, but opened its own drawing department in 1986, the year following its establishment as a limited company.

By the mid-90s, the company had developed a strong reputation in the industry, as well as ties to studios such as Gonzo, Shin-Ei Animation, and Sunrise. Kyoto Animation released its first full in-house production—the first Munto OVA—in March 2003, and its first television anime, Full Metal Panic? Fumoffu, in the summer of the same year.

The company gained worldwide attention on July 18, 2019 when an arson attack destroyed its original studio (known as Studio 1) in Fushimi, claiming the lives of 36 people."
        ]);

        Studio::create([
            'studio_name' => 'Madhouse',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/e68488ab-f0a0-411f-850a-18fb3e21b96c_600x600_i?s=21618c9c3183ffded748d303a253b637',
            'studio_description' => "Madhouse (MADHOUSE Inc.) is a Japanese animation studio based in Nakano City, Tokyo. Ex-Mushi Production animators—including Masao Maruyama, Osamu Dezaki, Rintarou, and Yoshiaki Kawajiri—are often credited with founding the company in 1972, though Rintarou would not join the studio until 1982. Madhouse primarily did contract work for other studios until the 1990s, when it achieved success independently. Television adaptations of Trigun and Clamp's Cardcaptor Sakura in 1998 were hits domestically and later aired overseas, and the same year director Satoshi Kon's Perfect Blue was released as his first of four critically-acclaimed films with the company.

Madhouse remained successful throughout the 2000s and 2010s, adding director Mamoru Hosoda to its roster and releasing numerous popular television anime, including adaptations of Hajime no Ippo, Death Note, and One Punch Man. Maruyama stepped down from his role as president and left the company in June 2011 to start studio MAPPA."
        ]);

        Studio::create([
            'studio_name' => 'ufotable',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/03171393-4a85-451d-a025-4a3f05d1aede_600x600_i?s=48ebfd25c277dd148d41f88568f60aa6',
            'studio_description' => "ufotable is a Japanese animation studio based in Suginami, Tokyo. Hikaru Kondou—a former production assistant at Tokyo Movie Shinsha (now TMS Entertainment) and Telecom Animation Film and producer at Step Eizou—founded the studio in October 2000. The company's name originates from a UFO-shaped table Kondou came across as he was devising the studio's vision. He subsequently acquired the table and named the studio after it.

At the time of establishment, the studio primarily produced adaptations of novel, manga, and original projects by ASCII Media Works (now Kadokawa), most of which featured wacky comedy and eccentric developments. Following the release of the Kara no Kyoukai (The Garden of Sinners) film series, ufotable came into the spotlight.

Contrary to popular belief, the quality of ufotable shows is due to their unusual degree of production independence, in-house talent, and exceptional organization, rather than having vastly higher budgets than other animation studios.

As of February 2023, the company employs about 240 full-time staff between its Suginami and Tokushima studios, the latter of which was established in April 2009."
        ]);

        Studio::create([
            'studio_name' => 'Wit Studio',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/03171393-4a85-451d-a025-4a3f05d1aede_600x600_i?s=48ebfd25c277dd148d41f88568f60aa6',
            'studio_description' => "Wit Studio, Inc., stylized as WIT Studio, is a Japanese animation studio founded on June 1, 2012, by producers at Production I.G as a subsidiary of IG Port. It is headquartered in Musashino, Tokyo, with Production I.G producer George Wada as president and Tetsuya Nakatake, also a producer at Production I.G., as a director of the studio.

The studio was founded by George Wada, a former employee of Production I.G, in 2012. After its founding, Tetsuya Nakatake was placed as the representative director of the studio. Several other former Production I.G staff members joined Wit after its founding, including animation directors Kyōji Asano and Satoshi Kadowaki, and director Tetsurō Araki, all of whom worked together on Attack on Titan.

Wit Studio was funded with an initial investment of ¥30,000,000 in capital from IG Port, Wada and Nakatake, who are reported to own 66.6%, 21.6% and 10.0% equity in the studio respectively.

In December 2020, Wit Studio established a stop motion studio in partnership with Pui Pui Molcar director Tomoki Misato.

In May 2022, Wit Studio in partnership with Aniplex, CloverWorks and Shueisha formed a new company called JOEN. The company's objective is to facilitate the planning and production of television anime series, anime films, and short clips."
        ]);

        Studio::create([
            'studio_name' => 'Bones',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/969047f0-a8ec-475e-ad0d-6e0d5cd8e17f_600x600_i?s=4145bdb95a29f3fe1447baa8045a7420',
            'studio_description' => "Bones (Bones Inc.) is a Japanese animation studio based in Suginami, Tokyo. The studio was founded by previous Sunrise producer Masahiko Minami and animators Hiroshi Ousaka and Toshihiro Kawamoto in 1998. Following Sunrise's production model, Bones' founders divided the company into five smaller studios, Studio A-E.

Studio Bones has put out a variety of television and film since its debut project of Hiwou War Chronicles in 2000, including popular anime such as Ouran Koukou Host Club (Ouran High School Host Club), Hagane no Renkinjutsushi: Fullmetal Alchemist (Fullmetal Alchemist: Brotherhood), Boku no Hero Academia (My Hero Academia), and Bungou Stray Dogs"
        ]);

        Studio::create([
            'studio_name' => 'Studio Ghibli',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/e6d02dfe-71e9-49d2-bef1-68e585c2605e_600x600_i?s=f8bba4a0f7ae97f80c95e463c7529bd6',
            'studio_description' => "Studio Ghibli (Studio Ghibli, Inc.) is a Japanese animation studio based in Koganei, Tokyo. It is best known for its range of animated feature films, and has also produced several short subjects, television commercials, and two television films. Its mascot and most recognizable symbol is a character named Totoro, a giant spirit inspired by raccoon dogs (Tanuki) and cats from the 1988 anime film My Neighbor Totoro. Among the studio's highest-grossing films are Spirited Away (2001), Howl's Moving Castle (2004) and Ponyo (2008). The studio was founded on June 15, 1985, by the directors Hayao Miyazaki and Isao Takahata and producer Toshio Suzuki, after acquiring Topcraft's assets."
        ]);

        Studio::create([
            'studio_name' => 'A-1 Pictures',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/4713c58b-833f-4c92-bf4a-0e2f7af8a461_600x600_i?s=925a453653da58d385adb82b5d423a69',
            'studio_description' => "A-1 Pictures (A-1 Pictures Inc.) is a Japanese animation studio in Suginami, Tokyo. Founded by former Sunrise producer Mikihiro Iwata in 2005, it was established as a subsidary of Aniplex. The studio was meant to oversee Aniplex's family-oriented series before it evolved into producing various independent anime projects.

A-1 Pictures has since released popular television anime such as Fairy Tail, Sword Art Online, Nanatsu no Taizai (The Seven Deadly Sins), and Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen (Kaguya-Sama: Love is War)."
        ]);

        Studio::create([
            'studio_name' => 'Shaft',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/6abfb420-5815-4a62-b978-cbbf9b868fa0_600x600_i?s=5fe7fdaf8e4e09c14c58d7ac6fc29f80',
            'studio_description' => "Shaft (stylized as SHAFT) is a Japanese animation studio headquartered in Suginami, Tokyo, and founded in 1975. Since 2004, the studio's productions have been broadly influenced by director Akiyuki Shinbo, whose visual style and avant-garde cinematography are featured in works including Hidamari Sketch, Sayonara Zetsubou-Sensei, the Monogatari series, Puella Magi Madoka Magica, Nisekoi, and March Comes In Like a Lion."
        ]);

        Studio::create([
            'studio_name' => 'CloverWorks',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/75875b81-17bb-4f7e-a06f-bb149d54687e_600x600_i?s=b90a570d03511f70dbac7e04869f4835',
            'studio_description' => "CloverWorks (CloverWorks, Inc) is a Japanese subsidiary animation company from Suginami, Tokyo. It was original named Kouenji Studio under A-1 Pictures owned by parent company Aniplex. The studio was rebranded as CloverWorks in April 2018. In October 2018, CloverWorks separated from A-1 Pictures while remaining a subsidary of Aniplex.

The studio has released 25 projects since its rebranding with an additional four projects - Slow Start, Darling in the Franxx, Persona 5: The Animation, and Ace Attorney Season 2 - changing the credited studio from A-1 Pictures to CloverWorks either during or after their original runs."
        ]);

        Studio::create([
            'studio_name' => 'Trigger',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/bc3f892a-8581-45b1-8a95-81b6ac518f3d_600x600_i?s=d2a2e7f05478dbb999b17d35c44445db'
        ]);

        Studio::create([
            'studio_name' => 'Toei Animation',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/33d49515-685a-4133-8ad3-41b09197e88d_600x600_i?s=cd6405cb06051286ce2bfbd4ce645443',
            'studio_description' => "Toei Animation (Toei Animation Co., Ltd.) is a Japanese animation studio owned by the Toei Company. Since its founding in 1948, Toei has created a large number of TV series, and films, many of which are popular worldwide. One of them is One Piece. Hayao Miyazaki, Isao Takahata, and Yoichi Kotabe have all worked with the company in the past. Toei is a shareholder in the Japanese anime satellite television network, Animax, along with other well-known anime studios and production companies such as Sunrise, TMS Entertainment and Nihon Ad Systems Inc.

Until 1998, Toei Animation was known as Toei Doga (東映動画 Tōei Dōga) (although even then the company's official English name was indeed Toei Animation Co. Ltd.), with dōga being the original Japanese word. for Animation which was widely used until the 1970s. Their mascot is the cat Pero.

Toei Animation produced the anime versions of many of Go Nagai's works during the 1970s, including Devilman, Cutey Honey, Dororon Enma-kun, and Majokko Tickle (all in association with Nagai's Dynamic Productions).

In addition to producing anime for domestic consumption in Japan, Toei Animation also provides animation works for many American-made television series, such as Muppet Babies and Many Little Pony. Many of these productions, such as Transformers and G.I. Joe was contracted to them through Sunbow Productions."
        ]);

        Studio::create([
            'studio_name' => 'Sunrise',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/6a9279a7-1aeb-4a2b-bceb-4e7f24fae7b1_600x600_i?s=3550689bfb655805cd6d4d3b3987cc91'
        ]);

        Studio::create([
            'studio_name' => 'David Production',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/35b70810-c616-495c-8bee-ad27fe52b273_600x600_i?s=0dccf633ec8318c9ff88f309d332a998'
        ]);

        Studio::create([
            'studio_name' => 'Pierrot',
            'studio_logo' => 'https://ih1.redbubble.net/image.5221021303.6521/flat,750x1000,075,f.jpg'
        ]);

        Studio::create([
            'studio_name' => 'C-Station',
            'studio_logo' => 'https://cdn.myanimelist.net/s/common/company_logos/97a95374-f91f-4fe5-8f3d-9ba18b39a0c4_600x600_i?s=9bb13f19db01535db0011a15f922de40'
        ]);
    }
}

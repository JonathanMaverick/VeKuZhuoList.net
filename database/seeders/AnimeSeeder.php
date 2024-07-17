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
            [
                'anime_name' => 'Jujutsu Kaisen',
                'release_date' => '2020-10-03',
                'views' => 185716,
                'mal_score' => 8.59,
                'synopsis' => 'Idly indulging in baseless paranormal activities with the Occult Club, high schooler Yuuji Itadori spends his days at either the clubroom or the hospital, where he visits his bedridden grandfather. However, this leisurely lifestyle soon takes a turn for the strange when he unknowingly encounters a cursed item. Triggering a chain of supernatural occurrences, Yuuji finds himself suddenly thrust into the world of Curses—dreadful beings formed from human malice and negativity—after swallowing the said item, revealed to be a finger belonging to the demon Sukuna Ryoumen, the King of Curses.

Yuuji experiences first-hand the threat these Curses pose to society as he discovers his own newfound powers. Introduced to the Tokyo Prefectural Jujutsu High School, he begins to walk down a path from which he cannot return—the path of a Jujutsu sorcerer.',
                'trailer_url' => '4A_X-Dvl0ws',
                'total_episodes' => 24,
                'image_url' => 'anime_images/jujutsu.jpg',
                'studio_id' => 1,
                'season_id' => 56
            ],
            [
                'anime_name' => 'Shingeki no Kyojin: The Final Season',
                'release_date' => '2020-12-07',
                'views' => 2027958,
                'mal_score' => 8.78,
                'synopsis' => 'Gabi Braun and Falco Grice have been training their entire lives to inherit one of the seven Titans under Marley\'s control and aid their nation in eradicating the Eldians on Paradis. However, just as all seems well for the two cadets, their peace is suddenly shaken by the arrival of Eren Yeager and the remaining members of the Survey Corps.

Having finally reached the Yeager family basement and learned about the dark history surrounding the Titans, the Survey Corps has at long last found the answer they so desperately fought to uncover. With the truth now in their hands, the group set out for the world beyond the walls.

In Shingeki no Kyojin: The Final Season, two utterly different worlds collide as each party pursues its own agenda in the long-awaited conclusion to Paradis\' fight for freedom.',
                'trailer_url' => 'SlNpRThS9t8',
                'total_episodes' => 16,
                'image_url' => 'anime_images/aotfin.jpg',
                'studio_id' => 1,
                'season_id' => 57
            ],
            [
                'anime_name' => 'Chainsaw Man',
                'release_date' => '2022-10-12',
                'views' => 1000000,
                'mal_score' => 8.27,
                'synopsis' => 'Denji is robbed of a normal teenage life, left with nothing but his deadbeat father\'s overwhelming debt. His only companion is his pet, the chainsaw devil Pochita, with whom he slays devils for money that inevitably ends up in the yakuza\'s pockets. All Denji can do is dream of a good, simple life: one with delicious food and a beautiful girlfriend by his side. But an act of greedy betrayal by the yakuza leads to Denji\'s brutal, untimely death, crushing all hope of him ever achieving happiness.

Remarkably, an old contract allows Pochita to merge with the deceased Denji and bestow devil powers on him, changing him into a hybrid able to transform his body parts into chainsaws. Because Denji\'s new abilities pose a significant risk to society, the Public Safety Bureau\'s elite devil hunter Makima takes him in, letting him live as long as he obeys her command. Guided by the promise of a content life alongside an attractive woman, Denji devotes everything and fights with all his might to make his naive dreams a reality.',
                'trailer_url' => 'q15CRdE5Bv0',
                'total_episodes' => 12,
                'image_url' => 'anime_images/chainsaw.jpg',
                'studio_id' => 1,
                'season_id' => 64
            ],
            [
                'anime_name' => 'Violet Evergarden',
                'release_date' => '2018-01-11',
                'views' => 1803924,
                'mal_score' => 8.68,
                'synopsis' => 'The Great War finally came to an end after four long years of conflict; fractured in two, the continent of Telesis slowly began to flourish once again. Caught up in the bloodshed was Violet Evergarden, a young girl raised for the sole purpose of decimating enemy lines. Hospitalized and maimed in a bloody skirmish during the War\'s final leg, she was left with only words from the person she held dearest, but with no understanding of their meaning.

Recovering from her wounds, Violet starts a new life working at CH Postal Services after a falling out with her new intended guardian family. There, she witnesses by pure chance the work of an "Auto Memory Doll," amanuenses that transcribe people\'s thoughts and feelings into words on paper. Moved by the notion, Violet begins work as an Auto Memory Doll, a trade that will take her on an adventure, one that will reshape the lives of her clients and hopefully lead to self-discovery.',
                'trailer_url' => 'g5xWqjFglsk',
                'total_episodes' => 13,
                'image_url' => 'anime_images/violet.jpg',
                'studio_id' => 2,
                'season_id' => 45
            ],
            [
                'anime_name' => 'Kobayashi-san Chi no Maid Dragon',
                'release_date' => '2012-01-12',
                'views' => 1244426,
                'mal_score' => 7.94,
                'synopsis' => 'As Kobayashi sets off for another day at work, she opens her apartment door only to be met by an unusually frightening sight—the head of a dragon, staring at her from across the balcony. The dragon immediately transforms into a cute, busty, and energetic young girl dressed in a maid outfit, introducing herself as Tooru.

It turns out that the stoic programmer had come across the dragon the previous night on a drunken excursion to the mountains, and since the mythical beast had nowhere else to go, she had offered the creature a place to stay in her home. Thus, Tooru had arrived to cash in on the offer, ready to repay her savior\'s kindness by working as her personal maidservant. Though deeply regretful of her words and hesitant to follow through on her promise, a mix of guilt and Tooru\'s incredible dragon abilities convinces Kobayashi to take the girl in.

Despite being extremely efficient at her job, the maid\'s unorthodox methods of housekeeping often end up horrifying Kobayashi and at times bring more trouble than help. Furthermore, the circumstances behind the dragon\'s arrival on Earth seem to be much more complicated than at first glance, as Tooru bears some heavy emotions and painful memories. To top it all off, Tooru\'s presence ends up attracting several other mythical beings to her new home, bringing in a host of eccentric personalities. Although Kobayashi makes her best effort to handle the crazy situation that she has found herself in, nothing has prepared her for this new life with a dragon maid.',
                'trailer_url' => 'okBHQWnYImg',
                'total_episodes' => 13,
                'image_url' => 'anime_images/kobayashi.jpg',
                'studio_id' => 2,
                'season_id' => 41
            ],
            [
                'anime_name' => 'Nichijou',
                'release_date' => '2011-04-03',
                'views' => 906350,
                'mal_score' => 8.46,
                'synopsis' => 'Nichijou primarily focuses on the daily antics of a trio of childhood friends—high school girls Mio Naganohara, Yuuko Aioi and Mai Minakami—whose stories soon intertwine with the young genius Hakase Shinonome, her robot caretaker Nano, and their talking cat Sakamoto. With every passing day, the lives of these six, as well as of the many people around them, experience both the calms of normal life and the insanity of the absurd. Walking to school, being bitten by a talking crow, spending time with friends, and watching the principal suplex a deer: they are all in a day\'s work in the extraordinary everyday lives of those in Nichijou.',
                'trailer_url' => 'CD6VdVDVDXI',
                'total_episodes' => 26,
                'image_url' => 'anime_images/nichijou.jpg',
                'studio_id' => 2,
                'season_id' => 18
            ],
            [
                'anime_name' => 'One Punch Man',
                'release_date' => '2015-10-05',
                'views' => 3250760,
                'mal_score' => 8.49,
                'synopsis' => 'The seemingly unimpressive Saitama has a rather unique hobby: being a hero. In order to pursue his childhood dream, Saitama relentlessly trained for three years, losing all of his hair in the process. Now, Saitama is so powerful, he can defeat any enemy with just one punch. However, having no one capable of matching his strength has led Saitama to an unexpected problem—he is no longer able to enjoy the thrill of battling and has become quite bored.

One day, Saitama catches the attention of 19-year-old cyborg Genos, who witnesses his power and wishes to become Saitama\'s disciple. Genos proposes that the two join the Hero Association in order to become certified heroes that will be recognized for their positive contributions to society. Saitama, who is shocked that no one knows who he is, quickly agrees. Meeting new allies and taking on new foes, Saitama embarks on a new journey as a member of the Hero Association to experience the excitement of battle he once felt.',
                'trailer_url' => 'Poo5lqoWSGw',
                'total_episodes' => 12,
                'image_url' => 'anime_images/saitama.jpg',
                'studio_id' => 3,
                'season_id' => 36
            ],
            [
                'anime_name' => 'Hunter x Hunter',
                'release_date' => '2011-10-02',
                'views' => 2868577,
                'mal_score' => 9.03,
                'synopsis' => 'Hunters devote themselves to accomplishing hazardous tasks, all from traversing the world\'s uncharted territories to locating rare items and monsters. Before becoming a Hunter, one must pass the Hunter Examination—a high-risk selection process in which most applicants end up handicapped or worse, deceased.

Ambitious participants who challenge the notorious exam carry their own reason. What drives 12-year-old Gon Freecss is finding Ging, his father and a Hunter himself. Believing that he will meet his father by becoming a Hunter, Gon takes the first step to walk the same path.

During the Hunter Examination, Gon befriends the medical student Leorio Paladiknight, the vindictive Kurapika, and ex-assassin Killua Zoldyck. While their motives vastly differ from each other, they band together for a common goal and begin to venture into a perilous world.',
                'trailer_url' => 'D9iTQRB4XRk',
                'total_episodes' => 148,
                'image_url' => 'anime_images/hunter.jpg',
                'studio_id' => 3,
                'season_id' => 20
            ],
            [
                'anime_name' => 'No Game No Life',
                'release_date' => '2014-04-19',
                'views' => 2413156,
                'mal_score' => 8.06,
                'synopsis' => 'Sixteen sentient races inhabit Disboard, a world overseen by Tet, the One True God. The lowest of the sixteen—Imanity—consists of humans, a race with no affinity for magic. In a place where everything is decided through simple games, humankind seems to have no way out of their predicament—but the arrival of two outsiders poses a change.

On Earth, stepsiblings Sora and Shiro are two inseparable shut-ins who dominate various online games under the username "Blank." While notorious on the internet, the pair believe that life is merely another dull game. However, after responding to a message from an unknown user, they are suddenly transported to Disboard. The mysterious sender turns out to be Tet, who informs them about the world\'s absolute rules. After Tet leaves, Sora and Shiro begin their search for more information and a place to stay, taking them to Elkia—Imanity\'s only remaining kingdom.

There, the duo encounters Stephanie Dola, an emotional girl vying for the kingdom\'s sovereignty. In desperation, she attempts to regain her father\'s throne, but her foolhardiness makes her goal unachievable. Inspired by the girl\'s motivation and passion, Sora and Shiro decide to aid Stephanie in getting Elkia back on its feet, ultimately aiming to become the new rulers of the enigmatic realm.',
                'trailer_url' => 'fV7nGIUuyzA',
                'total_episodes' => 12,
                'image_url' => 'anime_images/ngnl.jpg',
                'studio_id' => 3,
                'season_id' => 30
            ],
            [
                'anime_name' => 'Kimetsu no Yaiba: Yuukaku-hen',
                'release_date' => '2021-12-05',
                'views' => 1465474,
                'mal_score' => 8.74,
                'synopsis' => 'The devastation of the Mugen Train incident still weighs heavily on the members of the Demon Slayer Corps. Despite being given time to recover, life must go on, as the wicked never sleep: a vicious demon is terrorizing the alluring women of the Yoshiwara Entertainment District. The Sound Hashira, Tengen Uzui, and his three wives are on the case. However, when he soon loses contact with his spouses, Tengen fears the worst and enlists the help of Tanjirou Kamado, Zenitsu Agatsuma, and Inosuke Hashibira to infiltrate the district\'s most prominent houses and locate the depraved Upper Rank Demon.',
                'trailer_url' => 'QwvWdnd2Ktg',
                'total_episodes' => 11,
                'image_url' => 'anime_images/demon.jpg',
                'studio_id' => 4,
                'season_id' => 61
            ],
            [
                'anime_name' => 'Fate/Zero',
                'release_date' => '2011-10-02',
                'views' => 1511778,
                'mal_score' => 8.27,
                'synopsis' => 'With the promise of granting any wish, the omnipotent Holy Grail triggered three wars in the past, each too cruel and fierce to leave a victor. In spite of that, the wealthy Einzbern family is confident that the Fourth Holy Grail War will be different; namely, with a vessel of the Holy Grail now in their grasp. Solely for this reason, the much hated "Magus Killer" Kiritsugu Emiya is hired by the Einzberns, with marriage to their only daughter Irisviel as binding contract.

Kiritsugu now stands at the center of a cutthroat game of survival, facing off against six other participants, each armed with an ancient familiar, and fueled by unique desires and ideals. Accompanied by his own familiar, Saber, the notorious mercenary soon finds his greatest opponent in Kirei Kotomine, a priest who seeks salvation from the emptiness within himself in pursuit of Kiritsugu.

Based on the light novel written by Gen Urobuchi, Fate/Zero depicts the events of the Fourth Holy Grail War—10 years prior to Fate/stay night. Witness a battle royale in which no one is guaranteed to survive.',
                'trailer_url' => '21-1-ioCfXY',
                'total_episodes' => 13,
                'image_url' => 'anime_images/fate.jpg',
                'studio_id' => 4,
                'season_id' => 20
            ],
            [
                'anime_name' => 'Spy x Family',
                'release_date' => '2022-04-09',
                'views' => 1591735,
                'mal_score' => 8.51,
                'synopsis' => 'Corrupt politicians, frenzied nationalists, and other warmongering forces constantly jeopardize the thin veneer of peace between neighboring countries Ostania and Westalis. In spite of their plots, renowned spy and master of disguise "Twilight" fulfills dangerous missions one after another in the hope that no child will have to experience the horrors of war.

In the bustling Ostanian city of Berlint, Twilight dons the alias of "Loid Forger," an esteemed psychiatrist. However, his true intention is to gather intelligence on prominent politician Donovan Desmond, who only appears rarely in public at his sons\' school: the prestigious Eden Academy. Enlisting the help of unmarried city hall clerk Yor Briar to act as his wife and adopting the curious six-year-old orphan Anya as his daughter, Loid enacts his master plan. He will enroll Anya in Eden Academy, where Loid hopes she will excel and give him the opportunity to meet Donovan without arousing suspicion.

Unfortunately for Loid, even a man of his talents has trouble playing the figure of a loving father and husband. And just like Loid is hiding his true identity, Yor—who is an underground assassin known as "Thorn Princess"—and Anya—an esper who can read people\'s minds—have no plans to disclose their own secrets either. Although this picture-perfect family is founded on deception, the Forgers gradually come to understand that the love they share for one another trumps all else.',
                'trailer_url' => '_VRxEEBa1XU',
                'total_episodes' => 12,
                'image_url' => 'anime_images/spy.jpg',
                'studio_id' => 5,
                'season_id' => 62
            ],
            [
                'anime_name' => 'Shikanoko Nokonoko Koshitantan',
                'release_date' => '2024-07-07',
                'views' => 125508,
                'mal_score' => 7.95,
                'synopsis' => 'No one knows Torako used to be a delinquent. All of her classmates only know her as the perfect student. But everything changes when Nokotan, a transfer student with antlers, enters her life. Antlers aren\'t the only thing strange about Nokotan. Her deer nose can sniff out Torako\'s secret past! Whether it\'s at school or the zoo, chaos follows this doe-eyed girl\'s every step. Torako has so many questions! Is Nokotan a deer, a girl, or something in-between?',
                'trailer_url' => 'Bf4XTzeUBHo',
                'total_episodes' => 2,
                'image_url' => 'anime_images/noko.jpg',
                'studio_id' => 5,
                'season_id' => 71
            ],
            [
                'anime_name' => 'Vivy: Fluorite Eye\'s Song',
                'release_date' => '2021-04-03',
                'views' => 544,635,
                'mal_score' => 8.39,
                'synopsis' => 'When highly evolved AIs set out to eradicate mankind, the carnage that ensues fills the air with the stench of fresh blood and burning bodies. In a desperate bid to prevent the calamity from ever occurring, a scientist bets everything on a remnant from the past.

Turning the clock back a hundred years, AIs are already an integral part of human society, programmed with specific missions meant to be carried out for their entire course of operation. Vivy, the first ever autonomous AI, is a songstress tasked with spreading happiness through her voice. In a theme park where she hardly ever gets a proper audience, she strives to pour her heart out into her performances, bound to repeat it day after day—that is, until an advanced AI from the future appears before her and enlists her help in stopping a devastating war a hundred years in the making. With no time to process the revelation that flips her world upside down, Vivy is catapulted into a century-long journey to avert the violent history yet to come.',
                'trailer_url' => 't3IHpQZHPFY',
                'total_episodes' => 13,
                'image_url' => 'anime_images/vivy.jpg',
                'studio_id' => 5,
                'season_id' => 58
            ],
            [
                'anime_name' => 'Ousama Ranking',
                'release_date' => '2021-10-15',
                'views' => 655928,
                'mal_score' => 8.51,
                'synopsis' => 'The people of the kingdom look down on the young Prince Bojji, who can neither hear nor speak. They call him "The Useless Prince" while jeering at his supposed foolishness.

However, while Bojji may not be physically strong, he is certainly not weak of heart. When a chance encounter with a shadow creature should have left him traumatized, it instead makes him believe that he has found a friend amidst those who only choose to notice his shortcomings. He starts meeting with Kage, the shadow, regularly, to the point where even the otherwise abrasive creature begins to warm up to him.

Kage and Bojji\'s unlikely friendship lays the budding foundations of the prince\'s journey, one where he intends to conquer his fears and insecurities. Despite the constant ridicule he faces, Bojji resolves to fulfill his desire of becoming the best king he can be.',
                'trailer_url' => 'c1HHoucIxRg',
                'total_episodes' => 23,
                'image_url' => 'anime_images/ousama.jpg',
                'studio_id' => 5,
                'season_id' => 60
            ],
            [
                'anime_name' => 'Fullmetal Alchemist: Brotherhood',
                'release_date' => '2009-04-05',
                'views' => 3378315,
                'mal_score' => 9.09,
                'synopsis' => 'After a horrific alchemy experiment goes wrong in the Elric household, brothers Edward and Alphonse are left in a catastrophic new reality. Ignoring the alchemical principle banning human transmutation, the boys attempted to bring their recently deceased mother back to life. Instead, they suffered brutal personal loss: Alphonse\'s body disintegrated while Edward lost a leg and then sacrificed an arm to keep Alphonse\'s soul in the physical realm by binding it to a hulking suit of armor.

The brothers are rescued by their neighbor Pinako Rockbell and her granddaughter Winry. Known as a bio-mechanical engineering prodigy, Winry creates prosthetic limbs for Edward by utilizing "automail," a tough, versatile metal used in robots and combat armor. After years of training, the Elric brothers set off on a quest to restore their bodies by locating the Philosopher\'s Stone—a powerful gem that allows an alchemist to defy the traditional laws of Equivalent Exchange.

As Edward becomes an infamous alchemist and gains the nickname "Fullmetal," the boys\' journey embroils them in a growing conspiracy that threatens the fate of the world.',
                'trailer_url' => '--IcmZkvL0Q',
                'total_episodes' => 64,
                'image_url' => 'anime_images/fullmetal.jpg',
                'studio_id' => 6,
                'season_id' => 10
            ],
            [
                'anime_name' => 'Boku no Hero Academia',
                'release_date' => '2016-04-03',
                'views' => 3052015,
                'mal_score' => 7.86,
                'synopsis' => 'The appearance of "quirks," newly discovered super powers, has been steadily increasing over the years, with 80 percent of humanity possessing various abilities from manipulation of elements to shapeshifting. This leaves the remainder of the world completely powerless, and Izuku Midoriya is one such individual.

Since he was a child, the ambitious middle schooler has wanted nothing more than to be a hero. Izuku\'s unfair fate leaves him admiring heroes and taking notes on them whenever he can. But it seems that his persistence has borne some fruit: Izuku meets the number one hero and his personal idol, All Might. All Might\'s quirk is a unique ability that can be inherited, and he has chosen Izuku to be his successor!

Enduring many months of grueling training, Izuku enrolls in UA High, a prestigious high school famous for its excellent hero training program, and this year\'s freshmen look especially promising. With his bizarre but talented classmates and the looming threat of a villainous organization, Izuku will soon learn what it really means to be a hero.',
                'trailer_url' => 'D5fYOnwYkj4',
                'total_episodes' => 13,
                'image_url' => 'anime_images/hero.jpg',
                'studio_id' => 6,
                'season_id' => 38
            ],
            [
                'anime_name' => 'Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen',
                'release_date' => '2019-01-12',
                'views' => 1,758,869,
                'mal_score' => 8.40,
                'synopsis' => 'At the renowned Shuchiin Academy, Miyuki Shirogane and Kaguya Shinomiya are the student body\'s top representatives. Ranked the top student in the nation and respected by peers and mentors alike, Miyuki serves as the student council president. Alongside him, the vice president Kaguya—eldest daughter of the wealthy Shinomiya family—excels in every field imaginable. They are the envy of the entire student body, regarded as the perfect couple.

However, despite both having already developed feelings for the other, neither are willing to admit them. The first to confess loses, will be looked down upon, and will be considered the lesser. With their honor and pride at stake, Miyuki and Kaguya are both equally determined to be the one to emerge victorious on the battlefield of love!',
                'trailer_url' => 'Ti2kJ-GYO68',
                'total_episodes' => 12,
                'image_url' => 'anime_images/kaguya.jpg',
                'studio_id' => 8,
                'season_id' => 49
            ],
            [
                'anime_name' => 'Sword Art Online',
                'release_date' => '2012-07-08',
                'views' => 3096710,
                'mal_score' => 7.21,
                'synopsis' => 'Ever since the release of the innovative NerveGear, gamers from all around the globe have been given the opportunity to experience a completely immersive virtual reality. Sword Art Online (SAO), one of the most recent games on the console, offers a gateway into the wondrous world of Aincrad, a vivid, medieval landscape where users can do anything within the limits of imagination. With the release of this worldwide sensation, gaming has never felt more lifelike.

However, the idyllic fantasy rapidly becomes a brutal nightmare when SAO\'s creator traps thousands of players inside the game. The "log-out" function has been removed, with the only method of escape involving beating all of Aincrad\'s one hundred increasingly difficult levels. Adding to the struggle, any in-game death becomes permanent, ending the player\'s life in the real world.

While Kazuto "Kirito" Kirigaya was fortunate enough to be a beta-tester for the game, he quickly finds that despite his advantages, he cannot overcome SAO\'s challenges alone. Teaming up with Asuna Yuuki and other talented players, Kirito makes an effort to face the seemingly insurmountable trials head-on. But with difficult bosses and threatening dark cults impeding his progress, Kirito finds that such tasks are much easier said than done.',
                'trailer_url' => '6ohYYtxfDCg',
                'total_episodes' => 25,
                'image_url' => 'anime_images/sao.jpg',
                'studio_id' => 8,
                'season_id' => 23
            ],
            [
                'anime_name' => 'Nisekoi',
                'release_date' => '2014-01-11',
                'views' => 1177895,
                'mal_score' => 7.56,
                'synopsis' => 'Raku Ichijou, a first-year student at Bonyari High School, is the sole heir to an intimidating yakuza family. Ten years ago, Raku made a promise to his childhood friend. Now, all he has to go on is a pendant with a lock, which can only be unlocked with the key which the girl took with her when they parted.

Now, years later, Raku has grown into a typical teenager, and all he wants is to remain as uninvolved in his yakuza background as possible while spending his school days alongside his middle school crush Kosaki Onodera. However, when the American Bee Hive Gang invades his family\'s turf, Raku\'s idyllic romantic dreams are sent for a toss as he is dragged into a frustrating conflict: Raku is to pretend that he is in a romantic relationship with Chitoge Kirisaki, the beautiful daughter of the Bee Hive\'s chief, so as to reduce the friction between the two groups. Unfortunately, reality could not be farther from this whopping lie—Raku and Chitoge fall in hate at first sight, as the girl is convinced he is a pathetic pushover, and in Raku\'s eyes, Chitoge is about as attractive as a savage gorilla.

Nisekoi follows the daily antics of this mismatched couple who have been forced to get along for the sake of maintaining the city\'s peace. With many more girls popping up his life, all involved with Raku\'s past somehow, his search for the girl who holds his heart and his promise leads him in more unexpected directions than he expects.',
                'trailer_url' => 'Pu-n_4CLXLA',
                'total_episodes' => 20,
                'image_url' => 'anime_images/nisekoi.jpg',
                'studio_id' => 9,
                'season_id' => 29
            ],
            [
                'anime_name' => 'Sono Bisque Doll wa Koi wo Suru',
                'release_date' => '2022-01-09',
                'views' => 1081046,
                'mal_score' => 8.18,
                'synopsis' => 'High school student Wakana Gojou spends his days perfecting the art of making hina dolls, hoping to eventually reach his grandfather\'s level of expertise. While his fellow teenagers busy themselves with pop culture, Gojou finds bliss in sewing clothes for his dolls. Nonetheless, he goes to great lengths to keep his unique hobby a secret, as he believes that he would be ridiculed were it revealed.

Enter Marin Kitagawa, an extraordinarily pretty girl whose confidence and poise are in stark contrast to Gojou\'s meekness. It would defy common sense for the friendless Gojou to mix with the likes of Kitagawa, who is always surrounded by her peers. However, the unimaginable happens when Kitagawa discovers Gojou\'s prowess with a sewing machine and brightly confesses to him about her own hobby: cosplay. Because her sewing skills are pitiable, she decides to enlist his help.

As Gojou and Kitagawa work together on one cosplay outfit after another, they cannot help but grow close—even though their lives are worlds apart.',
                'trailer_url' => 'tFKDKd8z-NU',
                'total_episodes' => 12,
                'image_url' => 'anime_images/darling.jpg',
                'studio_id' => 10,
                'season_id' => 61
            ],
            // lanjut 23
        ];

        Anime::insert($anime);
    }
}

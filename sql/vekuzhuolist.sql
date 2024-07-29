-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2024 at 09:16 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vekuzhuolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `animes`
--

CREATE TABLE `animes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anime_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `views` int(11) NOT NULL,
  `mal_score` double NOT NULL,
  `synopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_episodes` int(11) NOT NULL,
  `studio_id` bigint(20) UNSIGNED NOT NULL,
  `season_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animes`
--

INSERT INTO `animes` (`id`, `anime_name`, `release_date`, `views`, `mal_score`, `synopsis`, `trailer_url`, `image_url`, `total_episodes`, `studio_id`, `season_id`, `created_at`, `updated_at`) VALUES
(1, 'Naruto', '2002-10-03', 1000000, 8.27, 'Naruto Uzumaki, a mischievous adolescent ninja, struggles as he searches for recognition and dreams of becoming the Hokage, the village\'s leader and strongest ninja.', 'QczGoCmX-pI', 'anime_images/naruto.png', 500, 15, 1, NULL, NULL),
(2, 'Jujutsu Kaisen', '2020-10-03', 185716, 8.59, 'Idly indulging in baseless paranormal activities with the Occult Club, high schooler Yuuji Itadori spends his days at either the clubroom or the hospital, where he visits his bedridden grandfather. However, this leisurely lifestyle soon takes a turn for the strange when he unknowingly encounters a cursed item. Triggering a chain of supernatural occurrences, Yuuji finds himself suddenly thrust into the world of Curses—dreadful beings formed from human malice and negativity—after swallowing the said item, revealed to be a finger belonging to the demon Sukuna Ryoumen, the King of Curses.\n\nYuuji experiences first-hand the threat these Curses pose to society as he discovers his own newfound powers. Introduced to the Tokyo Prefectural Jujutsu High School, he begins to walk down a path from which he cannot return—the path of a Jujutsu sorcerer.', '4A_X-Dvl0ws', 'anime_images/jujutsu.jpg', 24, 1, 56, NULL, NULL),
(3, 'Shingeki no Kyojin: The Final Season', '2020-12-07', 2027958, 8.78, 'Gabi Braun and Falco Grice have been training their entire lives to inherit one of the seven Titans under Marley\'s control and aid their nation in eradicating the Eldians on Paradis. However, just as all seems well for the two cadets, their peace is suddenly shaken by the arrival of Eren Yeager and the remaining members of the Survey Corps.\n\nHaving finally reached the Yeager family basement and learned about the dark history surrounding the Titans, the Survey Corps has at long last found the answer they so desperately fought to uncover. With the truth now in their hands, the group set out for the world beyond the walls.\n\nIn Shingeki no Kyojin: The Final Season, two utterly different worlds collide as each party pursues its own agenda in the long-awaited conclusion to Paradis\' fight for freedom.', 'SlNpRThS9t8', 'anime_images/aotfin.jpg', 16, 1, 57, NULL, NULL),
(4, 'Chainsaw Man', '2022-10-12', 1000000, 8.27, 'Denji is robbed of a normal teenage life, left with nothing but his deadbeat father\'s overwhelming debt. His only companion is his pet, the chainsaw devil Pochita, with whom he slays devils for money that inevitably ends up in the yakuza\'s pockets. All Denji can do is dream of a good, simple life: one with delicious food and a beautiful girlfriend by his side. But an act of greedy betrayal by the yakuza leads to Denji\'s brutal, untimely death, crushing all hope of him ever achieving happiness.\n\nRemarkably, an old contract allows Pochita to merge with the deceased Denji and bestow devil powers on him, changing him into a hybrid able to transform his body parts into chainsaws. Because Denji\'s new abilities pose a significant risk to society, the Public Safety Bureau\'s elite devil hunter Makima takes him in, letting him live as long as he obeys her command. Guided by the promise of a content life alongside an attractive woman, Denji devotes everything and fights with all his might to make his naive dreams a reality.', 'q15CRdE5Bv0', 'anime_images/chainsaw.jpg', 12, 1, 64, NULL, NULL),
(5, 'Violet Evergarden', '2018-01-11', 1803924, 8.68, 'The Great War finally came to an end after four long years of conflict; fractured in two, the continent of Telesis slowly began to flourish once again. Caught up in the bloodshed was Violet Evergarden, a young girl raised for the sole purpose of decimating enemy lines. Hospitalized and maimed in a bloody skirmish during the War\'s final leg, she was left with only words from the person she held dearest, but with no understanding of their meaning.\n\nRecovering from her wounds, Violet starts a new life working at CH Postal Services after a falling out with her new intended guardian family. There, she witnesses by pure chance the work of an \"Auto Memory Doll,\" amanuenses that transcribe people\'s thoughts and feelings into words on paper. Moved by the notion, Violet begins work as an Auto Memory Doll, a trade that will take her on an adventure, one that will reshape the lives of her clients and hopefully lead to self-discovery.', 'g5xWqjFglsk', 'anime_images/violet.jpg', 13, 2, 45, NULL, NULL),
(6, 'Kobayashi-san Chi no Maid Dragon', '2012-01-12', 1244426, 7.94, 'As Kobayashi sets off for another day at work, she opens her apartment door only to be met by an unusually frightening sight—the head of a dragon, staring at her from across the balcony. The dragon immediately transforms into a cute, busty, and energetic young girl dressed in a maid outfit, introducing herself as Tooru.\n\nIt turns out that the stoic programmer had come across the dragon the previous night on a drunken excursion to the mountains, and since the mythical beast had nowhere else to go, she had offered the creature a place to stay in her home. Thus, Tooru had arrived to cash in on the offer, ready to repay her savior\'s kindness by working as her personal maidservant. Though deeply regretful of her words and hesitant to follow through on her promise, a mix of guilt and Tooru\'s incredible dragon abilities convinces Kobayashi to take the girl in.\n\nDespite being extremely efficient at her job, the maid\'s unorthodox methods of housekeeping often end up horrifying Kobayashi and at times bring more trouble than help. Furthermore, the circumstances behind the dragon\'s arrival on Earth seem to be much more complicated than at first glance, as Tooru bears some heavy emotions and painful memories. To top it all off, Tooru\'s presence ends up attracting several other mythical beings to her new home, bringing in a host of eccentric personalities. Although Kobayashi makes her best effort to handle the crazy situation that she has found herself in, nothing has prepared her for this new life with a dragon maid.', 'okBHQWnYImg', 'anime_images/kobayashi.jpg', 13, 2, 41, NULL, NULL),
(7, 'Nichijou', '2011-04-03', 906350, 8.46, 'Nichijou primarily focuses on the daily antics of a trio of childhood friends—high school girls Mio Naganohara, Yuuko Aioi and Mai Minakami—whose stories soon intertwine with the young genius Hakase Shinonome, her robot caretaker Nano, and their talking cat Sakamoto. With every passing day, the lives of these six, as well as of the many people around them, experience both the calms of normal life and the insanity of the absurd. Walking to school, being bitten by a talking crow, spending time with friends, and watching the principal suplex a deer: they are all in a day\'s work in the extraordinary everyday lives of those in Nichijou.', 'CD6VdVDVDXI', 'anime_images/nichijou.jpg', 26, 2, 18, NULL, NULL),
(8, 'One Punch Man', '2015-10-05', 3250760, 8.49, 'The seemingly unimpressive Saitama has a rather unique hobby: being a hero. In order to pursue his childhood dream, Saitama relentlessly trained for three years, losing all of his hair in the process. Now, Saitama is so powerful, he can defeat any enemy with just one punch. However, having no one capable of matching his strength has led Saitama to an unexpected problem—he is no longer able to enjoy the thrill of battling and has become quite bored.\n\nOne day, Saitama catches the attention of 19-year-old cyborg Genos, who witnesses his power and wishes to become Saitama\'s disciple. Genos proposes that the two join the Hero Association in order to become certified heroes that will be recognized for their positive contributions to society. Saitama, who is shocked that no one knows who he is, quickly agrees. Meeting new allies and taking on new foes, Saitama embarks on a new journey as a member of the Hero Association to experience the excitement of battle he once felt.', 'Poo5lqoWSGw', 'anime_images/saitama.jpg', 12, 3, 36, NULL, NULL),
(9, 'Hunter x Hunter', '2011-10-02', 2868577, 9.03, 'Hunters devote themselves to accomplishing hazardous tasks, all from traversing the world\'s uncharted territories to locating rare items and monsters. Before becoming a Hunter, one must pass the Hunter Examination—a high-risk selection process in which most applicants end up handicapped or worse, deceased.\n\nAmbitious participants who challenge the notorious exam carry their own reason. What drives 12-year-old Gon Freecss is finding Ging, his father and a Hunter himself. Believing that he will meet his father by becoming a Hunter, Gon takes the first step to walk the same path.\n\nDuring the Hunter Examination, Gon befriends the medical student Leorio Paladiknight, the vindictive Kurapika, and ex-assassin Killua Zoldyck. While their motives vastly differ from each other, they band together for a common goal and begin to venture into a perilous world.', 'D9iTQRB4XRk', 'anime_images/hunter.jpg', 148, 3, 20, NULL, NULL),
(10, 'No Game No Life', '2014-04-19', 2413156, 8.06, 'Sixteen sentient races inhabit Disboard, a world overseen by Tet, the One True God. The lowest of the sixteen—Imanity—consists of humans, a race with no affinity for magic. In a place where everything is decided through simple games, humankind seems to have no way out of their predicament—but the arrival of two outsiders poses a change.\n\nOn Earth, stepsiblings Sora and Shiro are two inseparable shut-ins who dominate various online games under the username \"Blank.\" While notorious on the internet, the pair believe that life is merely another dull game. However, after responding to a message from an unknown user, they are suddenly transported to Disboard. The mysterious sender turns out to be Tet, who informs them about the world\'s absolute rules. After Tet leaves, Sora and Shiro begin their search for more information and a place to stay, taking them to Elkia—Imanity\'s only remaining kingdom.\n\nThere, the duo encounters Stephanie Dola, an emotional girl vying for the kingdom\'s sovereignty. In desperation, she attempts to regain her father\'s throne, but her foolhardiness makes her goal unachievable. Inspired by the girl\'s motivation and passion, Sora and Shiro decide to aid Stephanie in getting Elkia back on its feet, ultimately aiming to become the new rulers of the enigmatic realm.', 'fV7nGIUuyzA', 'anime_images/ngnl.jpg', 12, 3, 30, NULL, NULL),
(11, 'Kimetsu no Yaiba: Yuukaku-hen', '2021-12-05', 1465474, 8.74, 'The devastation of the Mugen Train incident still weighs heavily on the members of the Demon Slayer Corps. Despite being given time to recover, life must go on, as the wicked never sleep: a vicious demon is terrorizing the alluring women of the Yoshiwara Entertainment District. The Sound Hashira, Tengen Uzui, and his three wives are on the case. However, when he soon loses contact with his spouses, Tengen fears the worst and enlists the help of Tanjirou Kamado, Zenitsu Agatsuma, and Inosuke Hashibira to infiltrate the district\'s most prominent houses and locate the depraved Upper Rank Demon.', 'QwvWdnd2Ktg', 'anime_images/demon.jpg', 11, 4, 61, NULL, NULL),
(12, 'Fate/Zero', '2011-10-02', 1511778, 8.27, 'With the promise of granting any wish, the omnipotent Holy Grail triggered three wars in the past, each too cruel and fierce to leave a victor. In spite of that, the wealthy Einzbern family is confident that the Fourth Holy Grail War will be different; namely, with a vessel of the Holy Grail now in their grasp. Solely for this reason, the much hated \"Magus Killer\" Kiritsugu Emiya is hired by the Einzberns, with marriage to their only daughter Irisviel as binding contract.\n\nKiritsugu now stands at the center of a cutthroat game of survival, facing off against six other participants, each armed with an ancient familiar, and fueled by unique desires and ideals. Accompanied by his own familiar, Saber, the notorious mercenary soon finds his greatest opponent in Kirei Kotomine, a priest who seeks salvation from the emptiness within himself in pursuit of Kiritsugu.\n\nBased on the light novel written by Gen Urobuchi, Fate/Zero depicts the events of the Fourth Holy Grail War—10 years prior to Fate/stay night. Witness a battle royale in which no one is guaranteed to survive.', '21-1-ioCfXY', 'anime_images/fate.jpg', 13, 4, 20, NULL, NULL),
(13, 'Spy x Family', '2022-04-09', 1591735, 8.51, 'Corrupt politicians, frenzied nationalists, and other warmongering forces constantly jeopardize the thin veneer of peace between neighboring countries Ostania and Westalis. In spite of their plots, renowned spy and master of disguise \"Twilight\" fulfills dangerous missions one after another in the hope that no child will have to experience the horrors of war.\n\nIn the bustling Ostanian city of Berlint, Twilight dons the alias of \"Loid Forger,\" an esteemed psychiatrist. However, his true intention is to gather intelligence on prominent politician Donovan Desmond, who only appears rarely in public at his sons\' school: the prestigious Eden Academy. Enlisting the help of unmarried city hall clerk Yor Briar to act as his wife and adopting the curious six-year-old orphan Anya as his daughter, Loid enacts his master plan. He will enroll Anya in Eden Academy, where Loid hopes she will excel and give him the opportunity to meet Donovan without arousing suspicion.\n\nUnfortunately for Loid, even a man of his talents has trouble playing the figure of a loving father and husband. And just like Loid is hiding his true identity, Yor—who is an underground assassin known as \"Thorn Princess\"—and Anya—an esper who can read people\'s minds—have no plans to disclose their own secrets either. Although this picture-perfect family is founded on deception, the Forgers gradually come to understand that the love they share for one another trumps all else.', '_VRxEEBa1XU', 'anime_images/spy.jpg', 12, 5, 62, NULL, NULL),
(14, 'Shikanoko Nokonoko Koshitantan', '2024-07-07', 125508, 7.95, 'No one knows Torako used to be a delinquent. All of her classmates only know her as the perfect student. But everything changes when Nokotan, a transfer student with antlers, enters her life. Antlers aren\'t the only thing strange about Nokotan. Her deer nose can sniff out Torako\'s secret past! Whether it\'s at school or the zoo, chaos follows this doe-eyed girl\'s every step. Torako has so many questions! Is Nokotan a deer, a girl, or something in-between?', 'Bf4XTzeUBHo', 'anime_images/noko.jpg', 2, 5, 71, NULL, NULL),
(15, 'Vivy: Fluorite Eye\'s Song', '2021-04-03', 544635, 8.39, 'When highly evolved AIs set out to eradicate mankind, the carnage that ensues fills the air with the stench of fresh blood and burning bodies. In a desperate bid to prevent the calamity from ever occurring, a scientist bets everything on a remnant from the past.\n\nTurning the clock back a hundred years, AIs are already an integral part of human society, programmed with specific missions meant to be carried out for their entire course of operation. Vivy, the first ever autonomous AI, is a songstress tasked with spreading happiness through her voice. In a theme park where she hardly ever gets a proper audience, she strives to pour her heart out into her performances, bound to repeat it day after day—that is, until an advanced AI from the future appears before her and enlists her help in stopping a devastating war a hundred years in the making. With no time to process the revelation that flips her world upside down, Vivy is catapulted into a century-long journey to avert the violent history yet to come.', 't3IHpQZHPFY', 'anime_images/vivy.jpg', 13, 5, 58, NULL, NULL),
(16, 'Ousama Ranking', '2021-10-15', 655928, 8.51, 'The people of the kingdom look down on the young Prince Bojji, who can neither hear nor speak. They call him \"The Useless Prince\" while jeering at his supposed foolishness.\n\nHowever, while Bojji may not be physically strong, he is certainly not weak of heart. When a chance encounter with a shadow creature should have left him traumatized, it instead makes him believe that he has found a friend amidst those who only choose to notice his shortcomings. He starts meeting with Kage, the shadow, regularly, to the point where even the otherwise abrasive creature begins to warm up to him.\n\nKage and Bojji\'s unlikely friendship lays the budding foundations of the prince\'s journey, one where he intends to conquer his fears and insecurities. Despite the constant ridicule he faces, Bojji resolves to fulfill his desire of becoming the best king he can be.', 'c1HHoucIxRg', 'anime_images/ousama.jpg', 23, 5, 60, NULL, NULL),
(17, 'Fullmetal Alchemist: Brotherhood', '2009-04-05', 3378315, 9.09, 'After a horrific alchemy experiment goes wrong in the Elric household, brothers Edward and Alphonse are left in a catastrophic new reality. Ignoring the alchemical principle banning human transmutation, the boys attempted to bring their recently deceased mother back to life. Instead, they suffered brutal personal loss: Alphonse\'s body disintegrated while Edward lost a leg and then sacrificed an arm to keep Alphonse\'s soul in the physical realm by binding it to a hulking suit of armor.\n\nThe brothers are rescued by their neighbor Pinako Rockbell and her granddaughter Winry. Known as a bio-mechanical engineering prodigy, Winry creates prosthetic limbs for Edward by utilizing \"automail,\" a tough, versatile metal used in robots and combat armor. After years of training, the Elric brothers set off on a quest to restore their bodies by locating the Philosopher\'s Stone—a powerful gem that allows an alchemist to defy the traditional laws of Equivalent Exchange.\n\nAs Edward becomes an infamous alchemist and gains the nickname \"Fullmetal,\" the boys\' journey embroils them in a growing conspiracy that threatens the fate of the world.', '--IcmZkvL0Q', 'anime_images/fullmetal.jpg', 64, 6, 10, NULL, NULL),
(18, 'Boku no Hero Academia', '2016-04-03', 3052015, 7.86, 'The appearance of \"quirks,\" newly discovered super powers, has been steadily increasing over the years, with 80 percent of humanity possessing various abilities from manipulation of elements to shapeshifting. This leaves the remainder of the world completely powerless, and Izuku Midoriya is one such individual.\n\nSince he was a child, the ambitious middle schooler has wanted nothing more than to be a hero. Izuku\'s unfair fate leaves him admiring heroes and taking notes on them whenever he can. But it seems that his persistence has borne some fruit: Izuku meets the number one hero and his personal idol, All Might. All Might\'s quirk is a unique ability that can be inherited, and he has chosen Izuku to be his successor!\n\nEnduring many months of grueling training, Izuku enrolls in UA High, a prestigious high school famous for its excellent hero training program, and this year\'s freshmen look especially promising. With his bizarre but talented classmates and the looming threat of a villainous organization, Izuku will soon learn what it really means to be a hero.', 'D5fYOnwYkj4', 'anime_images/hero.jpg', 13, 6, 38, NULL, NULL),
(19, 'Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen', '2019-01-12', 1758869, 8.4, 'At the renowned Shuchiin Academy, Miyuki Shirogane and Kaguya Shinomiya are the student body\'s top representatives. Ranked the top student in the nation and respected by peers and mentors alike, Miyuki serves as the student council president. Alongside him, the vice president Kaguya—eldest daughter of the wealthy Shinomiya family—excels in every field imaginable. They are the envy of the entire student body, regarded as the perfect couple.\r\n\r\nHowever, despite both having already developed feelings for the other, neither are willing to admit them. The first to confess loses, will be looked down upon, and will be considered the lesser. With their honor and pride at stake, Miyuki and Kaguya are both equally determined to be the one to emerge victorious on the battlefield of love!', 'Ti2kJ-GYO68', 'anime_images/kaguya.jpg', 12, 8, 49, NULL, '2024-07-25 01:26:57'),
(20, 'Sword Art Online', '2012-07-08', 3096710, 7.21, 'Ever since the release of the innovative NerveGear, gamers from all around the globe have been given the opportunity to experience a completely immersive virtual reality. Sword Art Online (SAO), one of the most recent games on the console, offers a gateway into the wondrous world of Aincrad, a vivid, medieval landscape where users can do anything within the limits of imagination. With the release of this worldwide sensation, gaming has never felt more lifelike.\n\nHowever, the idyllic fantasy rapidly becomes a brutal nightmare when SAO\'s creator traps thousands of players inside the game. The \"log-out\" function has been removed, with the only method of escape involving beating all of Aincrad\'s one hundred increasingly difficult levels. Adding to the struggle, any in-game death becomes permanent, ending the player\'s life in the real world.\n\nWhile Kazuto \"Kirito\" Kirigaya was fortunate enough to be a beta-tester for the game, he quickly finds that despite his advantages, he cannot overcome SAO\'s challenges alone. Teaming up with Asuna Yuuki and other talented players, Kirito makes an effort to face the seemingly insurmountable trials head-on. But with difficult bosses and threatening dark cults impeding his progress, Kirito finds that such tasks are much easier said than done.', '6ohYYtxfDCg', 'anime_images/sao.jpg', 25, 8, 23, NULL, NULL),
(21, 'Nisekoi', '2014-01-11', 1177895, 7.56, 'Raku Ichijou, a first-year student at Bonyari High School, is the sole heir to an intimidating yakuza family. Ten years ago, Raku made a promise to his childhood friend. Now, all he has to go on is a pendant with a lock, which can only be unlocked with the key which the girl took with her when they parted.\n\nNow, years later, Raku has grown into a typical teenager, and all he wants is to remain as uninvolved in his yakuza background as possible while spending his school days alongside his middle school crush Kosaki Onodera. However, when the American Bee Hive Gang invades his family\'s turf, Raku\'s idyllic romantic dreams are sent for a toss as he is dragged into a frustrating conflict: Raku is to pretend that he is in a romantic relationship with Chitoge Kirisaki, the beautiful daughter of the Bee Hive\'s chief, so as to reduce the friction between the two groups. Unfortunately, reality could not be farther from this whopping lie—Raku and Chitoge fall in hate at first sight, as the girl is convinced he is a pathetic pushover, and in Raku\'s eyes, Chitoge is about as attractive as a savage gorilla.\n\nNisekoi follows the daily antics of this mismatched couple who have been forced to get along for the sake of maintaining the city\'s peace. With many more girls popping up his life, all involved with Raku\'s past somehow, his search for the girl who holds his heart and his promise leads him in more unexpected directions than he expects.', 'Pu-n_4CLXLA', 'anime_images/nisekoi.jpg', 20, 9, 29, NULL, NULL),
(22, 'Sono Bisque Doll wa Koi wo Suru', '2022-01-09', 1081046, 8.18, 'High school student Wakana Gojou spends his days perfecting the art of making hina dolls, hoping to eventually reach his grandfather\'s level of expertise. While his fellow teenagers busy themselves with pop culture, Gojou finds bliss in sewing clothes for his dolls. Nonetheless, he goes to great lengths to keep his unique hobby a secret, as he believes that he would be ridiculed were it revealed.\n\nEnter Marin Kitagawa, an extraordinarily pretty girl whose confidence and poise are in stark contrast to Gojou\'s meekness. It would defy common sense for the friendless Gojou to mix with the likes of Kitagawa, who is always surrounded by her peers. However, the unimaginable happens when Kitagawa discovers Gojou\'s prowess with a sewing machine and brightly confesses to him about her own hobby: cosplay. Because her sewing skills are pitiable, she decides to enlist his help.\n\nAs Gojou and Kitagawa work together on one cosplay outfit after another, they cannot help but grow close—even though their lives are worlds apart.', 'tFKDKd8z-NU', 'anime_images/darling.jpg', 12, 10, 61, NULL, NULL),
(23, '\"Oshi no Ko\" 2nd Season', '2024-07-03', 266549, 8.36, 'Aquas desire for revenge takes center stage as he navigates the dark underbelly of the entertainment world alongside his twin sister, Ruby. While Ruby follows in their slain mothers footsteps to become an idol, Aqua joins a famous theater troupe in hopes of uncovering clues to the identity of his father—the man who arranged their mothers untimely death, and the man who once starred in the same troupe Aqua hopes to infiltrate.', 'HRy5w-_zuIg', 'anime_images/oshi2.jpg', 13, 10, 71, NULL, NULL),
(24, 'Nige Jouzu no Wakagimi', '2024-07-06', 58484, 8.01, 'Eight-year-old Tokiyuki Houjou, the next successor of the Kamakura shogunate, is a young boy lacking talent in everything besides hide-and-seek. One day, his carefree life is abruptly turned upside down when Takauji Ashikaga brutally seizes power from the Kamakuras, ending their reign. Rescued by a self-proclaimed prophetic priest, Tokiyuki manages to escape with his life. Now he must evade those trying to kill him while recruiting comrades who can help him restore the Kamakura Shogunate to its former glory.\n\n                Set during the Nanboku-chou period of Japanese history, Nige Jouzu no Wakagimi is a tale of redemption, documenting the life of the forgotten hero that altered Japans destiny by running away.', 'JjOLjAB0bcI', 'anime_images/nige.jpg', 12, 10, 71, NULL, NULL),
(25, 'Horimiya: Piece', '2023-07-01', 331615, 8.18, 'As the graduation ceremony at Katagiri High School comes to an end, Kyouko Hori, her boyfriend Izumi Miyamura, and their friends begin to look back on their time as students. The moments they shared together may be fleeting, but each one is a colorful piece of their precious memories.', 'MU-Vk5R0vVY', 'anime_images/horimiyaPiece.jpg', 13, 10, 67, NULL, NULL),
(26, 'Cyberpunk: Edgerunners', '2022-09-13', 775801, 8.6, 'Dreams are doomed to die in Night City, a futuristic Californian metropolis. As a teenager living in the citys slums, David Martinez is trying to fulfill his mothers lifelong wish for him to reach the top of Arasaka, the worlds leading security corporation. To this end, he attends the prestigious Arasaka Academy while his mother works tirelessly to keep their family afloat.\n\n                When an incident with a street gang leaves Davids life in tatters, he stumbles upon Sandevistan cyberware—a prosthetic that grants its wearer superhuman speed. Fueled by rage, David implants the device in his back, using it to exact revenge on one of his tormentors. This gets him expelled from the academy, shattering his hopes of ever making his mother proud.\n\n                After witnessing Davids newfound abilities, the beautiful data thief Lucyna \"Lucy\" Kushinada offers to team up with him, handing him a ticket to salvation. However, associating with Lucy introduces David to the world of Edgerunners—cyborg criminals who will break any law for money. Edgerunners often lose their lives, if the cyberware does not break their minds first; but in his fight for survival inside a corrupt system, David is ready to risk it all.', 'JtqIas3bYhg', 'anime_images/cyber.jpg', 10, 11, 64, NULL, NULL),
(27, 'World Trigger', '2014-10-05', 426765, 7.58, 'When a gate to another world suddenly opens on Earth, Mikado City is invaded by strange creatures known as \"Neighbors,\" malicious beings impervious to traditional weaponry. In response to their arrival, an organization called the Border Defense Agency has been established to combat the Neighbor menace through special weapons called \"Triggers.\" Even though several years have passed after the gate first opened, Neighbors are still a threat and members of Border remain on guard to ensure the safety of the planet.\n\n                Despite this delicate situation, members-in-training, such as Osamu Mikumo, are not permitted to use their Triggers outside of headquarters. But when the mysterious new student in his class is dragged into a forbidden area by bullies, they are attacked by Neighbors, and Osamu has no choice but to do what he believes is right. Much to his surprise, however, the transfer student Yuuma Kuga makes short work of the aliens, revealing that he is a humanoid Neighbor in disguise.', '2oui7JLlBpk', 'anime_images/worldTrigger.jpg', 73, 12, 32, NULL, NULL),
(28, 'Code Geass: Hangyaku no Lelouch', '2006-10-06', 2272903, 8.7, 'In the year 2010, the Holy Empire of Britannia is establishing itself as a dominant military nation, starting with the conquest of Japan. Renamed to Area 11 after its swift defeat, Japan has seen significant resistance against these tyrants in an attempt to regain independence.\n\n          Lelouch Lamperouge, a Britannian student, unfortunately finds himself caught in a crossfire between the Britannian and the Area 11 rebel armed forces. He is able to escape, however, thanks to the timely appearance of a mysterious girl named C.C., who bestows upon him Geass, the \"Power of Kings.\" Realizing the vast potential of his newfound \"power of absolute obedience,\" Lelouch embarks upon a perilous journey as the masked vigilante known as Zero, leading a merciless onslaught against Britannia in order to get revenge once and for all.', 'AGjx0N24U', 'anime_images/codeGeass.jpg', 25, 13, 4, NULL, NULL),
(29, 'Tokidoki Bosotto Russia-go de Dereru Tonari no Alya-san', '2024-07-03', 188534, 8.17, 'Smart, refined, and strikingly gorgeous, half-Russian half-Japanese Alisa Mikhailovna Kujou is considered the idol of her school. With her long silver hair, mesmerizing blue eyes, and exceptionally fair skin, she has captured the hearts of countless male students while being highly admired by all others. Even so, due to her seemingly unapproachable persona, everyone remains wary around the near-flawless girl.\n\n        One of the few exceptions is Alisas benchmate Masachika Kuze, a relatively average boy who spends his days watching anime and playing gacha games. Despite his nonchalant demeanor, Masachika is the sole student to receive Alisas attention. Unable to be fully honest, Alisa is frequently harsh on Masachika and only expresses her affection in Russian. Unbeknownst to her, however, Masachika actually understands the language yet simply pretends otherwise for his own amusement.\n\n        As the odd pair continues to exchange witty and playful remarks, their relationship gradually grows more romantic and delightful—and Alisa might finally learn to freely convey her true feelings.', 'pBX6TtOlYow', 'anime_images/tokidoki.jpg', 12, 10, 71, NULL, NULL),
(30, 'JoJo no Kimyou na Bouken (TV)', '2012-10-06', 1682425, 7.88, 'The year is 1868; English nobleman George Joestar and his son Jonathan become indebted to Dario Brando after being rescued from a carriage incident. What the Joestars dont realize, however, is that Dario had no intention of helping them; he believed they were dead and was trying to ransack their belongings. After Darios death 12 years later, George—hoping to repay his debt—adopts his son, Dio.\n\n        While he publicly fawns over his new father, Dio secretly plans to steal the Joestar fortune. His first step is to create a divide between George and Jonathan. By constantly outdoing his foster brother, Dio firmly makes his place in the Joestar family. But when Dio pushes Jonathan too far, Jonathan defeats him in a brawl.\n\n        Years later, the two appear to be close friends to the outside world. But trouble brews again when George falls ill, as Jonathan suspects that Dio is somehow behind the incident—and it appears he has more tricks up his sleeve.', 'PGVSViecHWE', 'anime_images/jojo.jpg', 26, 14, 24, NULL, NULL),
(31, 'NieR:Automata Ver1.1a Part 2', '2024-07-05', 59557, 7.8, 'Second part of NieR:Automata Ver1.1a', '441v-JXm0CE', 'anime_images/nier.jpg', 12, 8, 71, NULL, NULL),
(32, 'Make Heroine ga Oosugiru!', '2024-07-14', 50660, 8.09, 'Kazuhiko Nukumizu, a self-proclaimed \"background character,\" accidentally witnessed his popular classmate Anna Yanami being rejected by her childhood friend. Since then, Kazuhiko has become involved with several loser heroines, including Anna.', 'uytJ6_KTCZI', 'anime_images/make.jpg', 12, 8, 71, NULL, NULL),
(33, 'Sen to Chihiro no Kamikakushi', '2001-07-01', 1874282, 8.77, 'Stubborn, spoiled, and naïve, 10-year-old Chihiro Ogino is less than pleased when she and her parents discover an abandoned amusement park on the way to their new house. Cautiously venturing inside, she realizes that there is more to this place than meets the eye, as strange things begin to happen once dusk falls. Ghostly apparitions and food that turns her parents into pigs are just the start—Chihiro has unwittingly crossed over into the spirit world. Now trapped, she must summon the courage to live and work amongst spirits, with the help of the enigmatic Haku and the cast of unique characters she meets along the way.\n\n        Vivid and intriguing, Sen to Chihiro no Kamikakushi tells the story of Chihiros journey through an unfamiliar world as she strives to save her parents and return home.', 'ByXuk9QqQkk', 'anime_images/spirit.jpg', 1, 7, 1, NULL, NULL),
(34, 'Sousou no Frieren', '2023-09-29', 811958, 9.35, 'During their decade-long quest to defeat the Demon King, the members of the hero\'s party—Himmel himself, the priest Heiter, the dwarf warrior Eisen, and the elven mage Frieren—forge bonds through adventures and battles, creating unforgettable precious memories for most of them.\n\n        However, the time that Frieren spends with her comrades is equivalent to merely a fraction of her life, which has lasted over a thousand years. When the party disbands after their victory, Frieren casually returns to her \"usual\" routine of collecting spells across the continent. Due to her different sense of time, she seemingly holds no strong feelings toward the experiences she went through.\n\n        As the years pass, Frieren gradually realizes how her days in the hero\'s party truly impacted her. Witnessing the deaths of two of her former companions, Frieren begins to regret having taken their presence for granted; she vows to better understand humans and create real personal connections. Although the story of that once memorable journey has long ended, a new tale is about to begin.', 'ZEkwCGJ3o7M', 'anime_images/frieren.jpg', 28, 3, 68, NULL, NULL),
(35, 'Fairy Tail: 100-nen Quest', '2024-07-07', 114683, 8.18, 'The 100 Years Quest: a mission so challenging and hazardous that it has remained unaccomplished for over a century. While countless mages have attempted to take on this grueling objective, their results ended in either overwhelming defeat or worse. Nonetheless, Natsu Dragneel and his friends—Lucy Heartfilia, Gray Fullbuster, Erza Scarlet, and Wendy Marvell, along with the exceeds Happy and Charlés—ambitiously embark on the quest.\n\nA year after the Fairy Tail guild has overcome the diabolical forces of Acnologia and Zeref, Natsu and his team trek into the northern continent of Guiltina, where they seek out the employer of the 100 Years Quest and receive their nearly impossible mission: to seal away the Five Dragon Gods—a group of individuals with such vast power that, if left alone, could cause global devastation. Meanwhile, a spirited new member named Touka is recruited to Fairy Tail. Although her vibrant energy and passionate nature makes her perfect for the guild, there seems to be more to her than meets the eye.\n\nDetermined to accomplish their seemingly insurmountable mission, Natsu and his friends begin their treacherous search for the Dragon Gods. However, once encountering a new dark guild named Diabolos, along with the newest recruit of Fairy Tail revealing her true colors, Natsu and his team will find that the 100 Years Quest isn\'t the only challenge they face.', 'FoNgKRyKJhk', 'anime_images/fairy_tail.jpg', 24, 8, 71, NULL, NULL),
(36, 'Giji Harem', '2024-07-05', 82246, 7.58, 'Eiji Kitahama, a second year high school student, just wants to be popular. To help him realize this dream, Rin Nanakura, his junior in the drama club, uses her acting skills to create a harem of loving girls for him. Though the various girls all show fondness toward Eiji, the affection of the actress behind them is very real. Rin\'s colorful acting continuously delights Eiji, but will the starlet herself ever make her way into his heart?', 'g_59WnHpSPY', 'anime_images/gijiharem.jpg', 12, 3, 71, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `anime_genres`
--

CREATE TABLE `anime_genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anime_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anime_genres`
--

INSERT INTO `anime_genres` (`id`, `anime_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 5, NULL, NULL),
(4, 2, 1, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 3, 1, NULL, NULL),
(7, 3, 4, NULL, NULL),
(8, 4, 1, NULL, NULL),
(9, 4, 5, NULL, NULL),
(10, 5, 4, NULL, NULL),
(11, 5, 5, NULL, NULL),
(12, 6, 5, NULL, NULL),
(13, 6, 11, NULL, NULL),
(14, 7, 3, NULL, NULL),
(15, 8, 1, NULL, NULL),
(16, 8, 3, NULL, NULL),
(17, 9, 1, NULL, NULL),
(18, 9, 2, NULL, NULL),
(19, 9, 5, NULL, NULL),
(20, 10, 3, NULL, NULL),
(21, 10, 5, NULL, NULL),
(22, 11, 1, NULL, NULL),
(23, 11, 5, NULL, NULL),
(24, 12, 1, NULL, NULL),
(25, 12, 5, NULL, NULL),
(26, 12, 13, NULL, NULL),
(27, 13, 1, NULL, NULL),
(28, 13, 3, NULL, NULL),
(29, 14, 3, NULL, NULL),
(30, 15, 1, NULL, NULL),
(31, 15, 10, NULL, NULL),
(32, 16, 2, NULL, NULL),
(33, 16, 5, NULL, NULL),
(34, 17, 1, NULL, NULL),
(35, 17, 2, NULL, NULL),
(36, 17, 4, NULL, NULL),
(37, 17, 5, NULL, NULL),
(38, 18, 1, NULL, NULL),
(39, 19, 3, NULL, NULL),
(40, 20, 1, NULL, NULL),
(41, 20, 2, NULL, NULL),
(42, 20, 5, NULL, NULL),
(43, 20, 9, NULL, NULL),
(44, 21, 3, NULL, NULL),
(45, 21, 9, NULL, NULL),
(46, 22, 9, NULL, NULL),
(47, 23, 4, NULL, NULL),
(48, 23, 13, NULL, NULL),
(49, 24, 2, NULL, NULL),
(50, 24, 3, NULL, NULL),
(51, 25, 9, NULL, NULL),
(52, 26, 1, NULL, NULL),
(53, 26, 10, NULL, NULL),
(54, 27, 1, NULL, NULL),
(55, 27, 10, NULL, NULL),
(56, 28, 1, NULL, NULL),
(57, 28, 4, NULL, NULL),
(58, 28, 10, NULL, NULL),
(59, 29, 9, NULL, NULL),
(60, 29, 3, NULL, NULL),
(61, 30, 1, NULL, NULL),
(62, 30, 2, NULL, NULL),
(63, 30, 13, NULL, NULL),
(64, 31, 1, NULL, NULL),
(65, 31, 5, NULL, NULL),
(66, 31, 10, NULL, NULL),
(67, 32, 9, NULL, NULL),
(68, 32, 3, NULL, NULL),
(69, 33, 2, NULL, NULL),
(70, 33, 13, NULL, NULL),
(71, 34, 2, NULL, NULL),
(72, 34, 4, NULL, NULL),
(73, 34, 5, NULL, NULL),
(74, 35, 1, NULL, NULL),
(75, 35, 5, NULL, NULL),
(76, 35, 2, NULL, NULL),
(77, 36, 9, NULL, NULL),
(78, 36, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `character_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `character_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anime_id` bigint(20) UNSIGNED NOT NULL,
  `voice_actor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `character_name`, `character_image`, `anime_id`, `voice_actor_id`, `created_at`, `updated_at`) VALUES
(1, 'Naruto Uzumaki', 'https://cdn.myanimelist.net/images/characters/2/284121.jpg', 1, 1, NULL, NULL),
(2, 'Kakashi Hatake', 'https://cdn.myanimelist.net/images/characters/7/284129.jpg', 1, 2, NULL, NULL),
(3, 'Sasuke Uchiha', 'https://cdn.myanimelist.net/images/characters/9/131317.jpg', 1, 3, NULL, NULL),
(4, 'Sakura Haruno', 'https://cdn.myanimelist.net/images/characters/9/69275.jpg', 1, 4, NULL, NULL),
(5, 'Yuuji Itadori', 'https://cdn.myanimelist.net/images/characters/6/467646.jpg', 2, 5, NULL, NULL),
(6, 'Megumi Fushiguro', 'https://cdn.myanimelist.net/images/characters/2/392689.jpg', 2, 6, NULL, NULL),
(7, 'Nobara Kugisaki', 'https://cdn.myanimelist.net/images/characters/12/422313.jpg', 2, 7, NULL, NULL),
(8, 'Gojo Satoru', 'https://cdn.myanimelist.net/images/characters/15/422168.jpg', 2, 8, NULL, NULL),
(9, 'Eren Yeager', 'https://cdn.myanimelist.net/images/characters/10/216895.jpg', 3, 9, NULL, NULL),
(10, 'Mikasa Ackerman', 'https://cdn.myanimelist.net/images/characters/9/215563.jpg', 3, 10, NULL, NULL),
(11, 'Armin Arlert', 'https://cdn.myanimelist.net/images/characters/8/220267.jpg', 3, 11, NULL, NULL),
(12, 'Power', 'https://cdn.myanimelist.net/images/characters/7/494969.jpg', 4, 12, NULL, NULL),
(13, 'Denji', 'https://cdn.myanimelist.net/images/characters/3/492407.jpg', 4, 13, NULL, NULL),
(14, 'Violet Evergarden', 'https://cdn.myanimelist.net/images/characters/9/345616.jpg', 5, 10, NULL, NULL),
(15, 'Kanna Kamui', 'https://cdn.myanimelist.net/images/characters/2/322173.jpg', 6, 14, NULL, NULL),
(16, 'Tohru', 'https://cdn.myanimelist.net/images/characters/11/322676.jpg', 6, 15, NULL, NULL),
(17, 'Kobayashi', 'https://cdn.myanimelist.net/images/characters/3/456442.jpg', 6, 16, NULL, NULL),
(18, 'Yuuko Aioi', 'https://cdn.myanimelist.net/images/characters/15/114020.jpg', 7, 17, NULL, NULL),
(19, 'Saitama', 'https://cdn.myanimelist.net/images/characters/11/294388.jpg', 8, 18, NULL, NULL),
(20, 'Genos', 'https://cdn.myanimelist.net/images/characters/9/297329.jpg', 8, 19, NULL, NULL),
(21, 'Killua Zoldyck', 'https://cdn.myanimelist.net/images/characters/2/327920.jpg', 9, 20, NULL, NULL),
(22, 'Gon Freecss', 'https://cdn.myanimelist.net/images/characters/11/174517.jpg', 9, 22, NULL, NULL),
(23, 'Leorio Paradinight', 'https://cdn.myanimelist.net/images/characters/11/549311.jpg', 9, 23, NULL, NULL),
(24, 'Kurapika', 'https://cdn.myanimelist.net/images/characters/3/549312.jpg', 9, 21, NULL, NULL),
(25, 'Sora', 'https://cdn.myanimelist.net/images/characters/12/274345.jpg', 10, 24, NULL, NULL),
(26, 'Shiro', 'https://cdn.myanimelist.net/images/characters/16/246723.jpg', 10, 25, NULL, NULL),
(27, 'Tanjiro Kamado', 'https://cdn.myanimelist.net/images/characters/6/386735.jpg', 11, 26, NULL, NULL),
(28, 'Nezuko Kamado', 'https://cdn.myanimelist.net/images/characters/2/378254.jpg?_gl=1*vgye17*_gcl_au*MTAzMjQxMTM0LjE3MTQ5MTUyNzg.*_ga*MTY4OTYxMDYxMS4xNzE0OTE1Mjc2*_ga_26FEP9527K*MTcyMTgzNjAxOS4xMS4xLjE3MjE4MzczMTQuNDAuMC4w', 11, 27, NULL, NULL),
(29, 'Zenitsu Agatsuma', 'https://cdn.myanimelist.net/images/characters/10/459689.jpg', 11, 28, NULL, NULL),
(30, 'Inosuke Hashibira', 'https://cdn.myanimelist.net/images/characters/3/329560.jpg', 11, 24, NULL, NULL),
(31, 'Saber', 'https://cdn.myanimelist.net/images/characters/6/275276.jpg', 12, 29, NULL, NULL),
(32, 'Loid Forger', 'https://cdn.myanimelist.net/images/characters/2/457747.jpg', 13, 30, NULL, NULL),
(33, 'Yor Forger', 'https://cdn.myanimelist.net/images/characters/11/457934.jpg', 13, 31, NULL, NULL),
(34, 'Anya Forger', 'https://cdn.myanimelist.net/images/characters/4/457933.jpg', 13, 32, NULL, NULL),
(35, 'Shikanoko Noko', 'https://cdn.myanimelist.net/images/characters/6/542119.jpg', 14, 22, NULL, NULL),
(36, 'Torako Koshi', 'https://cdn.myanimelist.net/images/characters/6/542120.jpg', 14, 33, NULL, NULL),
(37, 'Vivy (Diva)', 'https://cdn.myanimelist.net/images/characters/5/437608.jpg', 15, 32, NULL, NULL),
(38, 'Bojji', 'https://cdn.myanimelist.net/images/characters/12/451497.jpg', 16, 34, NULL, NULL),
(39, 'Kage', 'https://cdn.myanimelist.net/images/characters/8/451498.jpg', 16, 35, NULL, NULL),
(40, 'Edward Elric', 'https://cdn.myanimelist.net/images/characters/9/72533.jpg', 17, 36, NULL, NULL),
(41, 'Alphonse Elric', 'https://cdn.myanimelist.net/images/characters/5/54265.jpg', 17, 37, NULL, NULL),
(42, 'Shoto Todoroki', 'https://cdn.myanimelist.net/images/characters/12/332527.jpg', 18, 9, NULL, NULL),
(43, 'Katsuki Bakugo', 'https://cdn.myanimelist.net/images/characters/12/299406.jpg', 18, 38, NULL, NULL),
(44, 'Izuku Midoriya', 'https://cdn.myanimelist.net/images/characters/7/299404.jpg', 18, 39, NULL, NULL),
(45, 'Kaguya Shinomiya', 'https://cdn.myanimelist.net/images/characters/2/504723.jpg', 19, 40, NULL, NULL),
(46, 'Miyuki Shirogane', 'https://cdn.myanimelist.net/images/characters/16/371541.jpg', 19, 18, NULL, NULL),
(47, 'Kazuto Kirigaya', 'https://cdn.myanimelist.net/images/characters/7/204821.jpg', 20, 24, NULL, NULL),
(48, 'Asuna Yuuki', 'https://cdn.myanimelist.net/images/characters/15/262053.jpg', 20, 41, NULL, NULL),
(49, 'Chitoge Kirisaki', 'https://cdn.myanimelist.net/images/characters/7/241651.jpg', 21, 42, NULL, NULL),
(50, 'Raku Ichijo', 'https://cdn.myanimelist.net/images/characters/12/242215.jpg', 21, 43, NULL, NULL),
(51, 'Kosaki Onodera', 'https://cdn.myanimelist.net/images/characters/9/241653.jpg', 21, 44, NULL, NULL),
(52, 'Marin Kitagawa', 'https://cdn.myanimelist.net/images/characters/6/457309.jpg', 22, 45, NULL, NULL),
(53, 'Wakana Gojo', 'https://cdn.myanimelist.net/images/characters/5/472608.jpg', 22, 46, NULL, NULL),
(54, 'Arima Kana', 'https://cdn.myanimelist.net/images/characters/6/503733.jpg', 23, 22, NULL, NULL),
(55, 'Aquamarine Hoshino', 'https://cdn.myanimelist.net/images/characters/9/496455.jpg', 23, 47, NULL, NULL),
(56, 'Kurokawa Akane', 'https://cdn.myanimelist.net/images/characters/5/512681.jpg', 23, 48, NULL, NULL),
(57, 'Tokuyuki Houjou', 'https://cdn.myanimelist.net/images/characters/13/525049.jpg', 24, 49, NULL, NULL),
(58, 'Yorishige Suwa', 'https://cdn.myanimelist.net/images/characters/2/556141.jpg', 24, 8, NULL, NULL),
(59, 'Izumi Miyamura', 'https://cdn.myanimelist.net/images/characters/12/507110.jpg', 25, 43, NULL, NULL),
(60, 'Kyouko Hori', 'https://cdn.myanimelist.net/images/characters/16/318188.jpg', 25, 41, NULL, NULL),
(61, 'Lucy', 'https://cdn.myanimelist.net/images/characters/11/486620.jpg', 26, 50, NULL, NULL),
(62, 'David Martinez', 'https://cdn.myanimelist.net/images/characters/11/483437.jpg', 26, 51, NULL, NULL),
(63, 'Yuuma Kuga', 'https://cdn.myanimelist.net/images/characters/12/325835.jpg', 27, 61, NULL, NULL),
(64, 'Yuuichi Jin', 'https://cdn.myanimelist.net/images/characters/6/268547.jpg', 27, 8, NULL, NULL),
(65, 'Osamu Mikumo', 'https://cdn.myanimelist.net/images/characters/16/264753.jpg', 27, 9, NULL, NULL),
(66, 'Chika Amotari', 'https://cdn.myanimelist.net/images/characters/10/294718.jpg', 27, 62, NULL, NULL),
(67, 'Lelouch', 'https://cdn.myanimelist.net/images/characters/8/406163.jpg', 28, 63, NULL, NULL),
(68, 'C.C.', 'https://cdn.myanimelist.net/images/characters/13/33815.jpg', 28, 64, NULL, NULL),
(69, 'Kallen Stadfield', 'https://cdn.myanimelist.net/images/characters/8/31533.jpg', 28, 65, NULL, NULL),
(70, 'Suzaku Kururugi', 'https://cdn.myanimelist.net/images/characters/2/31564.jpg', 28, 66, NULL, NULL),
(71, 'Alisa Mikhaliovna Kujou', 'https://cdn.myanimelist.net/images/characters/5/536830.jpg', 29, 52, NULL, NULL),
(72, 'Masachika Kuze', 'https://cdn.myanimelist.net/images/characters/4/536831.jpg', 29, 53, NULL, NULL),
(73, 'Josepth Joestar', 'https://cdn.myanimelist.net/images/characters/6/252863.jpg', 30, 54, NULL, NULL),
(74, 'Dio Brando', 'https://cdn.myanimelist.net/images/characters/10/252875.jpg', 30, 55, NULL, NULL),
(75, 'YoRHa 2-gou B-gata', 'https://cdn.myanimelist.net/images/characters/6/489088.jpg', 31, 10, NULL, NULL),
(76, 'YoRHa 9-gou S-gata', 'https://cdn.myanimelist.net/images/characters/10/517865.jpg', 31, 26, NULL, NULL),
(77, 'Anna Yanami', 'https://cdn.myanimelist.net/images/characters/16/542560.jpg', 32, 67, NULL, NULL),
(78, 'Kazuhiko Nukumizu', 'https://cdn.myanimelist.net/images/characters/9/542556.jpg', 32, 68, NULL, NULL),
(79, 'Lemon Yakishio', 'https://cdn.myanimelist.net/images/characters/11/542562.jpg', 32, 69, NULL, NULL),
(80, 'Chika Komari', 'https://cdn.myanimelist.net/images/characters/15/542561.jpg', 32, 70, NULL, NULL),
(81, 'Haku', 'https://cdn.myanimelist.net/images/characters/16/480331.jpg', 33, 56, NULL, NULL),
(82, 'Chihiro Ogino', 'https://cdn.myanimelist.net/images/characters/7/434512.jpg', 33, 57, NULL, NULL),
(83, 'Frieren', 'https://cdn.myanimelist.net/images/characters/7/525105.jpg', 34, 32, NULL, NULL),
(84, 'Fern', 'https://cdn.myanimelist.net/images/characters/13/519083.jpg', 34, 58, NULL, NULL),
(85, 'Stark', 'https://cdn.myanimelist.net/images/characters/2/523292.jpg', 34, 59, NULL, NULL),
(86, 'Himmel', 'https://cdn.myanimelist.net/images/characters/9/523295.jpg', 34, 38, NULL, NULL),
(87, 'Ubel', 'https://cdn.myanimelist.net/images/characters/9/543072.jpg', 34, 60, NULL, NULL),
(88, 'Natsu Dragneel', 'https://cdn.myanimelist.net/images/characters/15/105542.jpg', 35, 71, NULL, NULL),
(89, 'Erza Scarlet', 'https://cdn.myanimelist.net/images/characters/12/492254.jpg', 35, 72, NULL, NULL),
(90, 'Lucy Heartfilia', 'https://cdn.myanimelist.net/images/characters/7/67774.jpg', 35, 73, NULL, NULL),
(91, 'Gray Fullbuster', 'https://cdn.myanimelist.net/images/characters/7/548119.jpg', 35, 8, NULL, NULL),
(92, 'Rin Nanakura', 'https://cdn.myanimelist.net/images/characters/2/426276.jpg', 36, 31, NULL, NULL),
(93, 'Eiji Kitahama', 'https://cdn.myanimelist.net/images/characters/14/393191.jpg', 36, 38, NULL, NULL),
(96, 'Yuu Ishigami', 'https://cdn.myanimelist.net/images/characters/7/372840.jpg', 19, 74, '2024-07-25 01:28:03', '2024-07-25 01:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre_name`, `created_at`, `updated_at`) VALUES
(1, 'Action', NULL, NULL),
(2, 'Adventure', NULL, NULL),
(3, 'Comedy', NULL, NULL),
(4, 'Drama', NULL, NULL),
(5, 'Fantasy', NULL, NULL),
(6, 'Magic', NULL, NULL),
(7, 'Mystery', NULL, NULL),
(8, 'Psychological', NULL, NULL),
(9, 'Romance', NULL, NULL),
(10, 'Sci-Fi', NULL, NULL),
(11, 'Slice of Life', NULL, NULL),
(12, 'Sports', NULL, NULL),
(13, 'Supernatural', NULL, NULL),
(14, 'Horror', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(254, '2014_10_12_000000_create_users_table', 1),
(255, '2014_10_12_100000_create_password_resets_table', 1),
(256, '2019_08_19_000000_create_failed_jobs_table', 1),
(257, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(258, '2024_07_15_061825_create_seasons_table', 1),
(259, '2024_07_15_062337_create_studios_table', 1),
(260, '2024_07_18_061920_create_genres_table', 1),
(261, '2024_07_18_170930_create_animes_table', 1),
(262, '2024_07_19_061958_create_voice_actors_table', 1),
(263, '2024_07_19_062038_create_characters_table', 1),
(264, '2024_07_19_062452_create_anime_genres_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `season_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `season_name`, `created_at`, `updated_at`) VALUES
(1, 'Winter 2007', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(2, 'Spring 2007', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(3, 'Summer 2007', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(4, 'Fall 2007', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(5, 'Winter 2008', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(6, 'Spring 2008', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(7, 'Summer 2008', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(8, 'Fall 2008', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(9, 'Winter 2009', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(10, 'Spring 2009', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(11, 'Summer 2009', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(12, 'Fall 2009', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(13, 'Winter 2010', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(14, 'Spring 2010', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(15, 'Summer 2010', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(16, 'Fall 2010', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(17, 'Winter 2011', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(18, 'Spring 2011', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(19, 'Summer 2011', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(20, 'Fall 2011', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(21, 'Winter 2012', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(22, 'Spring 2012', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(23, 'Summer 2012', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(24, 'Fall 2012', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(25, 'Winter 2013', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(26, 'Spring 2013', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(27, 'Summer 2013', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(28, 'Fall 2013', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(29, 'Winter 2014', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(30, 'Spring 2014', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(31, 'Summer 2014', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(32, 'Fall 2014', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(33, 'Winter 2015', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(34, 'Spring 2015', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(35, 'Summer 2015', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(36, 'Fall 2015', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(37, 'Winter 2016', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(38, 'Spring 2016', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(39, 'Summer 2016', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(40, 'Fall 2016', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(41, 'Winter 2017', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(42, 'Spring 2017', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(43, 'Summer 2017', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(44, 'Fall 2017', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(45, 'Winter 2018', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(46, 'Spring 2018', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(47, 'Summer 2018', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(48, 'Fall 2018', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(49, 'Winter 2019', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(50, 'Spring 2019', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(51, 'Summer 2019', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(52, 'Fall 2019', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(53, 'Winter 2020', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(54, 'Spring 2020', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(55, 'Summer 2020', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(56, 'Fall 2020', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(57, 'Winter 2021', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(58, 'Spring 2021', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(59, 'Summer 2021', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(60, 'Fall 2021', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(61, 'Winter 2022', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(62, 'Spring 2022', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(63, 'Summer 2022', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(64, 'Fall 2022', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(65, 'Winter 2023', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(66, 'Spring 2023', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(67, 'Summer 2023', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(68, 'Fall 2023', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(69, 'Winter 2024', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(70, 'Spring 2024', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(71, 'Summer 2024', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(72, 'Fall 2024', '2024-07-25 01:26:46', '2024-07-25 01:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE `studios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studio_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`id`, `studio_name`, `studio_logo`, `studio_description`, `created_at`, `updated_at`) VALUES
(1, 'MAPPA', 'https://cdn.myanimelist.net/s/common/company_logos/e3a5163d-3b09-4e98-922b-79180a75539f_600x600_i?s=3289c478fd611569ebccd7ff076151df', 'MAPPA (MAPPA Co., Ltd.) is a Japanese animation studio founded by Masao Maruyama in June 2011, following his departure from Madhouse. It employs 408 people as of April 2024 between its Tokyo, Osaka and Sendai studios. Maruyama\'s intent was for the film Kono Sekai no Katasumi ni (In This Corner of the World) to be the studio\'s first release, though the project would not be complete until 2016. By that time, the studio had already co-produced Sakamichi no Apollon (Kids on the Slope) and Hajime no Ippo: Rising, and released its first original anime—Zankyou no Terror (Terror in Resonance).\n\nThe name MAPPA is an acronym for Maruyama Animation Produce Project Association. Maruyama stepped down as president in 2016 to form Studio M2. He was replaced by former Studio 4°C employee Manabu Ootsuka.', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(2, 'Kyoto Animation', 'https://cdn.myanimelist.net/s/common/company_logos/b066ff17-81d3-40db-b1f2-2927de70c0e3_600x600_i?s=edb149cf051e2d7984975063a1b3b3a7', 'Kyoto Animation (Kyoto Animation Co., Ltd.) (often abbreviated KyoAni) is a Japanese animation studio based in Uji, Kyoto Prefecture. Youko Hatta (born Youko Sugiyama), who had previously studied under Osamu Tezuka as an artist at Mushi Production, founded the company with her husband, Hideaki Hatta, in 1981. Kyoto Animation spent its early years doing finishing work for other companies\' productions, but opened its own drawing department in 1986, the year following its establishment as a limited company.\n\nBy the mid-90s, the company had developed a strong reputation in the industry, as well as ties to studios such as Gonzo, Shin-Ei Animation, and Sunrise. Kyoto Animation released its first full in-house production—the first Munto OVA—in March 2003, and its first television anime, Full Metal Panic? Fumoffu, in the summer of the same year.\n\nThe company gained worldwide attention on July 18, 2019 when an arson attack destroyed its original studio (known as Studio 1) in Fushimi, claiming the lives of 36 people.', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(3, 'Madhouse', 'https://cdn.myanimelist.net/s/common/company_logos/e68488ab-f0a0-411f-850a-18fb3e21b96c_600x600_i?s=21618c9c3183ffded748d303a253b637', 'Madhouse (MADHOUSE Inc.) is a Japanese animation studio based in Nakano City, Tokyo. Ex-Mushi Production animators—including Masao Maruyama, Osamu Dezaki, Rintarou, and Yoshiaki Kawajiri—are often credited with founding the company in 1972, though Rintarou would not join the studio until 1982. Madhouse primarily did contract work for other studios until the 1990s, when it achieved success independently. Television adaptations of Trigun and Clamp\'s Cardcaptor Sakura in 1998 were hits domestically and later aired overseas, and the same year director Satoshi Kon\'s Perfect Blue was released as his first of four critically-acclaimed films with the company.\n\nMadhouse remained successful throughout the 2000s and 2010s, adding director Mamoru Hosoda to its roster and releasing numerous popular television anime, including adaptations of Hajime no Ippo, Death Note, and One Punch Man. Maruyama stepped down from his role as president and left the company in June 2011 to start studio MAPPA.', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(4, 'ufotable', 'https://cdn.myanimelist.net/s/common/company_logos/03171393-4a85-451d-a025-4a3f05d1aede_600x600_i?s=48ebfd25c277dd148d41f88568f60aa6', 'ufotable is a Japanese animation studio based in Suginami, Tokyo. Hikaru Kondou—a former production assistant at Tokyo Movie Shinsha (now TMS Entertainment) and Telecom Animation Film and producer at Step Eizou—founded the studio in October 2000. The company\'s name originates from a UFO-shaped table Kondou came across as he was devising the studio\'s vision. He subsequently acquired the table and named the studio after it.\n\nAt the time of establishment, the studio primarily produced adaptations of novel, manga, and original projects by ASCII Media Works (now Kadokawa), most of which featured wacky comedy and eccentric developments. Following the release of the Kara no Kyoukai (The Garden of Sinners) film series, ufotable came into the spotlight.\n\nContrary to popular belief, the quality of ufotable shows is due to their unusual degree of production independence, in-house talent, and exceptional organization, rather than having vastly higher budgets than other animation studios.\n\nAs of February 2023, the company employs about 240 full-time staff between its Suginami and Tokushima studios, the latter of which was established in April 2009.', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(5, 'Wit Studio', 'https://cdn.myanimelist.net/s/common/company_logos/03171393-4a85-451d-a025-4a3f05d1aede_600x600_i?s=48ebfd25c277dd148d41f88568f60aa6', 'Wit Studio, Inc., stylized as WIT Studio, is a Japanese animation studio founded on June 1, 2012, by producers at Production I.G as a subsidiary of IG Port. It is headquartered in Musashino, Tokyo, with Production I.G producer George Wada as president and Tetsuya Nakatake, also a producer at Production I.G., as a director of the studio.\n\nThe studio was founded by George Wada, a former employee of Production I.G, in 2012. After its founding, Tetsuya Nakatake was placed as the representative director of the studio. Several other former Production I.G staff members joined Wit after its founding, including animation directors Kyōji Asano and Satoshi Kadowaki, and director Tetsurō Araki, all of whom worked together on Attack on Titan.\n\nWit Studio was funded with an initial investment of ¥30,000,000 in capital from IG Port, Wada and Nakatake, who are reported to own 66.6%, 21.6% and 10.0% equity in the studio respectively.\n\nIn December 2020, Wit Studio established a stop motion studio in partnership with Pui Pui Molcar director Tomoki Misato.\n\nIn May 2022, Wit Studio in partnership with Aniplex, CloverWorks and Shueisha formed a new company called JOEN. The company\'s objective is to facilitate the planning and production of television anime series, anime films, and short clips.', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(6, 'Bones', 'https://cdn.myanimelist.net/s/common/company_logos/969047f0-a8ec-475e-ad0d-6e0d5cd8e17f_600x600_i?s=4145bdb95a29f3fe1447baa8045a7420', 'Bones (Bones Inc.) is a Japanese animation studio based in Suginami, Tokyo. The studio was founded by previous Sunrise producer Masahiko Minami and animators Hiroshi Ousaka and Toshihiro Kawamoto in 1998. Following Sunrise\'s production model, Bones\' founders divided the company into five smaller studios, Studio A-E.\n\nStudio Bones has put out a variety of television and film since its debut project of Hiwou War Chronicles in 2000, including popular anime such as Ouran Koukou Host Club (Ouran High School Host Club), Hagane no Renkinjutsushi: Fullmetal Alchemist (Fullmetal Alchemist: Brotherhood), Boku no Hero Academia (My Hero Academia), and Bungou Stray Dogs', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(7, 'Studio Ghibli', 'https://cdn.myanimelist.net/s/common/company_logos/e6d02dfe-71e9-49d2-bef1-68e585c2605e_600x600_i?s=f8bba4a0f7ae97f80c95e463c7529bd6', 'Studio Ghibli (Studio Ghibli, Inc.) is a Japanese animation studio based in Koganei, Tokyo. It is best known for its range of animated feature films, and has also produced several short subjects, television commercials, and two television films. Its mascot and most recognizable symbol is a character named Totoro, a giant spirit inspired by raccoon dogs (Tanuki) and cats from the 1988 anime film My Neighbor Totoro. Among the studio\'s highest-grossing films are Spirited Away (2001), Howl\'s Moving Castle (2004) and Ponyo (2008). The studio was founded on June 15, 1985, by the directors Hayao Miyazaki and Isao Takahata and producer Toshio Suzuki, after acquiring Topcraft\'s assets.', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(8, 'A-1 Pictures', 'https://cdn.myanimelist.net/s/common/company_logos/4713c58b-833f-4c92-bf4a-0e2f7af8a461_600x600_i?s=925a453653da58d385adb82b5d423a69', 'A-1 Pictures (A-1 Pictures Inc.) is a Japanese animation studio in Suginami, Tokyo. Founded by former Sunrise producer Mikihiro Iwata in 2005, it was established as a subsidary of Aniplex. The studio was meant to oversee Aniplex\'s family-oriented series before it evolved into producing various independent anime projects.\n\nA-1 Pictures has since released popular television anime such as Fairy Tail, Sword Art Online, Nanatsu no Taizai (The Seven Deadly Sins), and Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen (Kaguya-Sama: Love is War).', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(9, 'Shaft', 'https://cdn.myanimelist.net/s/common/company_logos/6abfb420-5815-4a62-b978-cbbf9b868fa0_600x600_i?s=5fe7fdaf8e4e09c14c58d7ac6fc29f80', 'Shaft (stylized as SHAFT) is a Japanese animation studio headquartered in Suginami, Tokyo, and founded in 1975. Since 2004, the studio\'s productions have been broadly influenced by director Akiyuki Shinbo, whose visual style and avant-garde cinematography are featured in works including Hidamari Sketch, Sayonara Zetsubou-Sensei, the Monogatari series, Puella Magi Madoka Magica, Nisekoi, and March Comes In Like a Lion.', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(10, 'CloverWorks', 'https://cdn.myanimelist.net/s/common/company_logos/75875b81-17bb-4f7e-a06f-bb149d54687e_600x600_i?s=b90a570d03511f70dbac7e04869f4835', 'CloverWorks (CloverWorks, Inc) is a Japanese subsidiary animation company from Suginami, Tokyo. It was original named Kouenji Studio under A-1 Pictures owned by parent company Aniplex. The studio was rebranded as CloverWorks in April 2018. In October 2018, CloverWorks separated from A-1 Pictures while remaining a subsidary of Aniplex.\n\nThe studio has released 25 projects since its rebranding with an additional four projects - Slow Start, Darling in the Franxx, Persona 5: The Animation, and Ace Attorney Season 2 - changing the credited studio from A-1 Pictures to CloverWorks either during or after their original runs.', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(11, 'Trigger', 'https://cdn.myanimelist.net/s/common/company_logos/bc3f892a-8581-45b1-8a95-81b6ac518f3d_600x600_i?s=d2a2e7f05478dbb999b17d35c44445db', NULL, '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(12, 'Toei Animation', 'https://cdn.myanimelist.net/s/common/company_logos/33d49515-685a-4133-8ad3-41b09197e88d_600x600_i?s=cd6405cb06051286ce2bfbd4ce645443', 'Toei Animation (Toei Animation Co., Ltd.) is a Japanese animation studio owned by the Toei Company. Since its founding in 1948, Toei has created a large number of TV series, and films, many of which are popular worldwide. One of them is One Piece. Hayao Miyazaki, Isao Takahata, and Yoichi Kotabe have all worked with the company in the past. Toei is a shareholder in the Japanese anime satellite television network, Animax, along with other well-known anime studios and production companies such as Sunrise, TMS Entertainment and Nihon Ad Systems Inc.\n\nUntil 1998, Toei Animation was known as Toei Doga (東映動画 Tōei Dōga) (although even then the company\'s official English name was indeed Toei Animation Co. Ltd.), with dōga being the original Japanese word. for Animation which was widely used until the 1970s. Their mascot is the cat Pero.\n\nToei Animation produced the anime versions of many of Go Nagai\'s works during the 1970s, including Devilman, Cutey Honey, Dororon Enma-kun, and Majokko Tickle (all in association with Nagai\'s Dynamic Productions).\n\nIn addition to producing anime for domestic consumption in Japan, Toei Animation also provides animation works for many American-made television series, such as Muppet Babies and Many Little Pony. Many of these productions, such as Transformers and G.I. Joe was contracted to them through Sunbow Productions.', '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(13, 'Sunrise', 'https://cdn.myanimelist.net/s/common/company_logos/6a9279a7-1aeb-4a2b-bceb-4e7f24fae7b1_600x600_i?s=3550689bfb655805cd6d4d3b3987cc91', NULL, '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(14, 'David Production', 'https://cdn.myanimelist.net/s/common/company_logos/35b70810-c616-495c-8bee-ad27fe52b273_600x600_i?s=0dccf633ec8318c9ff88f309d332a998', NULL, '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(15, 'Pierrot', 'https://ih1.redbubble.net/image.5221021303.6521/flat,750x1000,075,f.jpg', NULL, '2024-07-25 01:26:46', '2024-07-25 01:26:46'),
(16, 'C-Station', 'https://cdn.myanimelist.net/s/common/company_logos/97a95374-f91f-4fe5-8f3d-9ba18b39a0c4_600x600_i?s=9bb13f19db01535db0011a15f922de40', NULL, '2024-07-25 01:26:46', '2024-07-25 01:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voice_actors`
--

CREATE TABLE `voice_actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voice_actor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voice_actor_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voice_actors`
--

INSERT INTO `voice_actors` (`id`, `voice_actor_name`, `voice_actor_image`, `created_at`, `updated_at`) VALUES
(1, 'Junko Takeuchi', 'https://cdn.myanimelist.net/images/voiceactors/1/54677.jpg', NULL, NULL),
(2, 'Kazuhiko Inoue', 'https://cdn.myanimelist.net/images/voiceactors/3/68015.jpg', NULL, NULL),
(3, 'Noriaki Sugiyama', 'https://cdn.myanimelist.net/images/voiceactors/3/73289.jpg', NULL, NULL),
(4, 'Chie Nakamura', 'https://cdn.myanimelist.net/images/voiceactors/2/75895.jpg', NULL, NULL),
(5, 'Junya Enoki', 'https://cdn.myanimelist.net/images/voiceactors/2/62840.jpg', NULL, NULL),
(6, 'Yuma Uchida', 'https://cdn.myanimelist.net/images/voiceactors/2/73526.jpg', NULL, NULL),
(7, 'Asami Seto', 'https://cdn.myanimelist.net/images/voiceactors/3/65839.jpg', NULL, NULL),
(8, 'Yuuichi Nakamura', 'https://cdn.myanimelist.net/images/voiceactors/1/74056.jpg', NULL, NULL),
(9, 'Yuuki Kaji', 'https://cdn.myanimelist.net/images/voiceactors/2/66416.jpg', NULL, NULL),
(10, 'Yui Ishikawa', 'https://cdn.myanimelist.net/images/voiceactors/2/69967.jpg', NULL, NULL),
(11, 'Marina Inoue', 'https://cdn.myanimelist.net/images/voiceactors/1/68016.jpg', NULL, NULL),
(12, 'Faizou Ai', 'https://cdn.myanimelist.net/images/voiceactors/2/76160.jpg', NULL, NULL),
(13, 'Kikunosuke Toya', 'https://cdn.myanimelist.net/images/voiceactors/1/72408.jpg', NULL, NULL),
(14, 'Maria Naganawa', 'https://cdn.myanimelist.net/images/voiceactors/2/67452.jpg', NULL, NULL),
(15, 'Yuuki Kuwahara', 'https://cdn.myanimelist.net/images/voiceactors/3/61300.jpg', NULL, NULL),
(16, 'Mutsumi Tamura', 'https://cdn.myanimelist.net/images/voiceactors/3/68989.jpg', NULL, NULL),
(17, 'Mariko Honda', 'https://cdn.myanimelist.net/images/voiceactors/1/74053.jpg', NULL, NULL),
(18, 'Makoto Furukawa', 'https://cdn.myanimelist.net/images/voiceactors/3/74503.jpg', NULL, NULL),
(19, 'Kaito Ishikawa', 'https://cdn.myanimelist.net/images/voiceactors/3/73776.jpg', NULL, NULL),
(20, 'Mariya Ise', 'https://cdn.myanimelist.net/images/voiceactors/1/77122.jpg', NULL, NULL),
(21, 'Miyuki Sawashiro', 'https://cdn.myanimelist.net/images/voiceactors/2/65500.jpg', NULL, NULL),
(22, 'Megumi Han', 'https://cdn.myanimelist.net/images/voiceactors/2/72566.jpg', NULL, NULL),
(23, 'Keiji Fujiwara', 'https://cdn.myanimelist.net/images/voiceactors/3/57226.jpg', NULL, NULL),
(24, 'Yoshitsugu Matsuoka', 'https://cdn.myanimelist.net/images/voiceactors/2/40132.jpg', NULL, NULL),
(25, 'Ai Kayano', 'https://cdn.myanimelist.net/images/voiceactors/3/60503.jpg', NULL, NULL),
(26, 'Natsuki Hanue', 'https://cdn.myanimelist.net/images/voiceactors/3/63380.jpg', NULL, NULL),
(27, 'Akari Kitou', 'https://cdn.myanimelist.net/images/voiceactors/2/70148.jpg', NULL, NULL),
(28, 'Hiro Shimono', 'https://cdn.myanimelist.net/images/voiceactors/1/61089.jpg', NULL, NULL),
(29, 'Ayako Kawasumi', 'https://cdn.myanimelist.net/images/voiceactors/2/69419.jpg', NULL, NULL),
(30, 'Takuya Eguchi', 'https://cdn.myanimelist.net/images/voiceactors/3/67736.jpg', NULL, NULL),
(31, 'Saori Hayami', 'https://cdn.myanimelist.net/images/voiceactors/3/80849.jpg', NULL, NULL),
(32, 'Atsumi Tanezaki', 'https://cdn.myanimelist.net/images/voiceactors/3/77190.jpg', NULL, NULL),
(33, 'Saki Fujita', 'https://cdn.myanimelist.net/images/voiceactors/1/55387.jpg', NULL, NULL),
(34, 'Minami Hinata', 'https://cdn.myanimelist.net/images/voiceactors/1/63129.jpg', NULL, NULL),
(35, 'Ayumu Murase', 'https://cdn.myanimelist.net/images/voiceactors/2/76639.jpg', NULL, NULL),
(36, 'Romi Park', 'https://cdn.myanimelist.net/images/voiceactors/1/54602.jpg', NULL, NULL),
(37, 'Rie Kugimiya', 'https://cdn.myanimelist.net/images/voiceactors/3/63374.jpg', NULL, NULL),
(38, 'Nobuhiko Okamoto', 'https://cdn.myanimelist.net/images/voiceactors/2/48785.jpg', NULL, NULL),
(39, 'Daiki Yamashita', 'https://cdn.myanimelist.net/images/voiceactors/1/74376.jpg', NULL, NULL),
(40, 'Aoi Koga', 'https://cdn.myanimelist.net/images/voiceactors/3/64827.jpg', NULL, NULL),
(41, 'Haruka Tomatsu', 'https://cdn.myanimelist.net/images/voiceactors/3/76640.jpg', NULL, NULL),
(42, 'Nao Touyama', 'https://cdn.myanimelist.net/images/voiceactors/3/80857.jpg', NULL, NULL),
(43, 'Kouki Uchiyama', 'https://cdn.myanimelist.net/images/voiceactors/1/63405.jpg', NULL, NULL),
(44, 'Kana Hanazawa', 'https://cdn.myanimelist.net/images/voiceactors/3/69318.jpg', NULL, NULL),
(45, 'Hina Suguta', 'https://cdn.myanimelist.net/images/voiceactors/3/75665.jpg', NULL, NULL),
(46, 'Shouya Isige', 'https://cdn.myanimelist.net/images/voiceactors/1/64266.jpg', NULL, NULL),
(47, 'Takeo Ootsuka', 'https://cdn.myanimelist.net/images/voiceactors/1/74450.jpg', NULL, NULL),
(48, 'Manaka Iwami', 'https://cdn.myanimelist.net/images/voiceactors/1/67682.jpg', NULL, NULL),
(49, 'Asaki Yuikawa', 'https://cdn.myanimelist.net/images/voiceactors/3/74543.jpg', NULL, NULL),
(50, 'Aoi Yuuki', 'https://cdn.myanimelist.net/images/voiceactors/3/67808.jpg', NULL, NULL),
(51, 'KENN', 'https://cdn.myanimelist.net/images/voiceactors/2/60780.jpg', NULL, NULL),
(52, 'Sumire Uesaka', 'https://cdn.myanimelist.net/images/voiceactors/2/76647.jpg', NULL, NULL),
(53, 'Kohei Amasaki', 'https://cdn.myanimelist.net/images/voiceactors/2/79690.jpg', NULL, NULL),
(54, 'Tomokazu Sugita', 'https://cdn.myanimelist.net/images/voiceactors/1/81054.jpg', NULL, NULL),
(55, 'Takehito Koyasu', 'https://cdn.myanimelist.net/images/voiceactors/1/63375.jpg', NULL, NULL),
(56, 'Miyu Irino', 'https://cdn.myanimelist.net/images/voiceactors/2/80313.jpg', NULL, NULL),
(57, 'Rumi Hiragi', 'https://cdn.myanimelist.net/images/voiceactors/1/18391.jpg', NULL, NULL),
(58, 'Kana Ichinose', 'https://cdn.myanimelist.net/images/voiceactors/3/70398.jpg', NULL, NULL),
(59, 'Chiaki Kobayashi', 'https://cdn.myanimelist.net/images/voiceactors/2/66505.jpg', NULL, NULL),
(60, 'Ikumi Hasegawa', 'https://cdn.myanimelist.net/images/voiceactors/1/81473.jpg', NULL, NULL),
(61, 'Tomo Muranaka', 'https://cdn.myanimelist.net/images/voiceactors/1/75055.jpg', NULL, NULL),
(62, 'Nao Tamura', 'https://cdn.myanimelist.net/images/voiceactors/2/43723.jpg', NULL, NULL),
(63, 'Jun Fukuyawa', 'https://cdn.myanimelist.net/images/voiceactors/3/60810.jpg', NULL, NULL),
(64, 'Yukana', 'https://cdn.myanimelist.net/images/voiceactors/2/45746.jpg', NULL, NULL),
(65, 'Ami Koshimizu', 'https://cdn.myanimelist.net/images/voiceactors/3/68022.jpg', NULL, NULL),
(66, 'Takahiro Sakurai', 'https://cdn.myanimelist.net/images/voiceactors/3/62791.jpg', NULL, NULL),
(67, 'Hikaru Toono', 'https://cdn.myanimelist.net/images/voiceactors/1/79680.jpg', NULL, NULL),
(68, 'Shuuichirou Umeda', 'https://cdn.myanimelist.net/images/voiceactors/3/79692.jpg', NULL, NULL),
(69, 'Shion Wakayama', 'https://cdn.myanimelist.net/images/voiceactors/1/79679.jpg', NULL, NULL),
(70, 'Momoka Terasawa', 'https://cdn.myanimelist.net/images/voiceactors/1/79678.jpg', NULL, NULL),
(71, 'Tatsuya Kakihara', 'https://cdn.myanimelist.net/images/voiceactors/3/60808.jpg', NULL, NULL),
(72, 'Sayaka Ohara', 'https://cdn.myanimelist.net/images/voiceactors/1/54698.jpg', NULL, NULL),
(73, 'Sayaka Hirano', 'https://cdn.myanimelist.net/images/voiceactors/3/78608.jpg', NULL, NULL),
(74, 'Ryouta Suzuki', 'https://cdn.myanimelist.net/images/voiceactors/2/64211.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animes_studio_id_foreign` (`studio_id`),
  ADD KEY `animes_season_id_foreign` (`season_id`);

--
-- Indexes for table `anime_genres`
--
ALTER TABLE `anime_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anime_genres_genre_id_foreign` (`genre_id`),
  ADD KEY `anime_genres_anime_id_foreign` (`anime_id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `characters_voice_actor_id_foreign` (`voice_actor_id`),
  ADD KEY `characters_anime_id_foreign` (`anime_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studios`
--
ALTER TABLE `studios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voice_actors`
--
ALTER TABLE `voice_actors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voice_actors_voice_actor_name_unique` (`voice_actor_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animes`
--
ALTER TABLE `animes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `anime_genres`
--
ALTER TABLE `anime_genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `studios`
--
ALTER TABLE `studios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voice_actors`
--
ALTER TABLE `voice_actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animes`
--
ALTER TABLE `animes`
  ADD CONSTRAINT `animes_season_id_foreign` FOREIGN KEY (`season_id`) REFERENCES `seasons` (`id`),
  ADD CONSTRAINT `animes_studio_id_foreign` FOREIGN KEY (`studio_id`) REFERENCES `studios` (`id`);

--
-- Constraints for table `anime_genres`
--
ALTER TABLE `anime_genres`
  ADD CONSTRAINT `anime_genres_anime_id_foreign` FOREIGN KEY (`anime_id`) REFERENCES `animes` (`id`),
  ADD CONSTRAINT `anime_genres_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_anime_id_foreign` FOREIGN KEY (`anime_id`) REFERENCES `animes` (`id`),
  ADD CONSTRAINT `characters_voice_actor_id_foreign` FOREIGN KEY (`voice_actor_id`) REFERENCES `voice_actors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

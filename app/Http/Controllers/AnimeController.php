<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Character;
use App\Models\Genre;
use App\Models\Season;
use App\Models\Studio;
use App\Models\VoiceActor;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class AnimeController extends Controller
{
    public function index()
    {
        $currentSeasonAnimes = Anime::where('season_id', 71)->get();;
        $topAnimesMal = Anime::orderBy('mal_score', 'desc')->take(5)->get();
        $topAnimesView = Anime::orderBy('views', 'desc')->take(5)->get();
        $randomAnimes = Anime::inRandomOrder()->take(10)->get();

        return view('home', compact('currentSeasonAnimes', 'topAnimesMal', 'topAnimesView', 'randomAnimes'));
    }

    public function show($id)
    {
        $anime = Anime::find($id);

        if ($anime == null) {
            return view('errors.404');
        }

        return view('anime.show', compact('anime'));
    }

    public function top_anime_malscore()
    {
        $animes = Anime::orderBy('mal_score', 'desc')->paginate(10);
        return view('anime.top_anime_malscore', [
            'animes' => $animes,
            'currentPage' => $animes->currentPage(),
            'perPage' => $animes->perPage(),
        ]);
    }

    public function top_anime_views()
    {
        $animes = Anime::orderBy('views', 'desc')->paginate(10);

        return view('anime.top_anime_views', [
            'animes' => $animes,
            'currentPage' => $animes->currentPage(),
            'perPage' => $animes->perPage(),
        ]);
    }

    public function add_anime()
    {
        $genres = Genre::all();
        $studios = Studio::all();
        $seasons = Season::all();
        $voice_actors = VoiceActor::all();
        return view('anime.add_anime', compact('genres', 'studios', 'seasons', 'voice_actors'));
    }

    public function store(Request $request)
    {
        $rules = [
            'anime_name' => 'required|string|max:255',
            'release_date' => 'required|date',
            'views' => 'required|integer|min:1',
            'mal_score' => 'required|numeric|min:0|max:10',
            'synopsis' => 'required|string',
            'trailer_url' => [
                'required',
                'url',
                function ($attribute, $value, $fail) {
                    $videoId = $this->extractYouTubeVideoId($value);
                    if (empty($videoId) || !is_string($videoId)) {
                        $fail('Invalid YouTube URL.');
                    }
                },
            ],
            'anime_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'total_episodes' => 'required|integer|min:1',
            'studio_id' => 'required|exists:studios,id',
            'season_id' => 'required|exists:seasons,id',
            'genres' => 'required|array|max:4|min:1',
            'genres.*' => 'exists:genres,id',
            'characters' => 'required|array|min:1',
            'characters.*.image_url' => 'required|url',
            'characters.*.name' => 'required|string|max:255',
            'characters.*.voice_actor' => 'required|exists:voice_actors,id',
        ];

        $messages = [
            'characters.required' => 'At least one character is required.'
        ];

        $validatedData = $request->validate($rules, $messages);

        if ($request->has('trailer_url')) {
            $videoId = $this->extractYouTubeVideoId($request->input('trailer_url'));
            $validatedData['trailer_url'] = $videoId;
        }

        if ($request->hasFile('anime_image')) {
            $image = $request->file('anime_image');
            $path = $image->store('anime_images', 'public');
            $validatedData['image_url'] = $path;
        }

        $anime = Anime::create($validatedData);

        $anime->genres()->attach($request->genres);

        foreach ($request->characters as $characterData) {
            $character = new Character([
                'character_image' => $characterData['image_url'],
                'character_name' => $characterData['name'],
                'voice_actor_id' => $characterData['voice_actor'],
            ]);
            $anime->characters()->save($character);
        }

        return redirect()->route('home')->with('success', 'Anime added successfully.');
    }

    private function extractYouTubeVideoId($url)
    {
        parse_str(parse_url($url, PHP_URL_QUERY), $query);
        return $query['v'] ?? null;
    }

    public function update_anime($id)
    {
        $anime = Anime::find($id);
        $genres = Genre::all();
        $studios = Studio::all();
        $seasons = Season::all();
        $voice_actors = VoiceActor::all();
        return view('anime.update_anime', compact('anime', 'genres', 'studios', 'seasons', 'voice_actors'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'anime_name' => 'required|string|max:255',
            'release_date' => 'required|date',
            'views' => 'required|integer',
            'mal_score' => 'required|numeric|min:0|max:10',
            'synopsis' => 'required|string',
            'trailer_url' => [
                'required',
                'url',
                function ($attribute, $value, $fail) {
                    $videoId = $this->extractYouTubeVideoId($value);
                    if (empty($videoId) || !is_string($videoId)) {
                        $fail('Invalid YouTube URL.');
                    }
                },
            ],
            'anime_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'total_episodes' => 'required|integer|min:1',
            'studio_id' => 'required|exists:studios,id',
            'season_id' => 'required|exists:seasons,id',
            'genres' => 'required|array|max:4|min:1',
            'genres.*' => 'exists:genres,id',
            'characters' => 'required|array|min:1',
            'characters.*.id' => 'nullable|exists:characters,id',
            'characters.*.character_image' => 'required|url',
            'characters.*.character_name' => 'required|string|max:255',
            'characters.*.voice_actor' => 'required|exists:voice_actors,id',
        ];

        $validatedData = $request->validate($rules);

        if ($request->has('trailer_url')) {
            $videoId = $this->extractYouTubeVideoId($request->input('trailer_url'));
            $validatedData['trailer_url'] = $videoId;
        }

        $anime = Anime::findOrFail($id);

        $anime->fill($validatedData);
        if ($request->hasFile('anime_image')) {
            $imagePath = $request->file('anime_image')->store('anime_images', 'public');
            $anime->image_url = $imagePath;
        }

        $anime->save();

        $anime->genres()->sync($validatedData['genres']);

        $charactersData = $validatedData['characters'] ?? [];
        $characterIds = array_filter(array_column($charactersData, 'id'));
        $anime->characters()->whereNotIn('id', $characterIds)->delete();

        foreach ($charactersData as $index => $characterData) {
            $character = $anime->characters()->updateOrCreate(
                ['id' => $characterData['id'] ?? null],
                [
                    'character_image' => $characterData['character_image'] ?? null,
                    'character_name' => $characterData['character_name'],
                    'voice_actor_id' => $characterData['voice_actor'] ?? null,
                ]
            );
        }


        return redirect()->route('anime.show', $anime->id)->with('success', 'Anime updated successfully!');
    }
}

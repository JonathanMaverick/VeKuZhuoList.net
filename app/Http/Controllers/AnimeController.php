<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Genre;
use App\Models\Season;
use App\Models\Studio;
use Illuminate\Http\Request;

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
    return view('anime.show', compact('anime'));
  }

  public function top_anime_malscore()
  {
    $animes = Anime::orderBy('mal_score', 'desc')->paginate(10);
    return view('anime.top_anime_malscore', compact('animes'));
  }

  public function top_anime_views()
  {
    $animes = Anime::orderBy('views', 'desc')->paginate(10);
    return view('anime.top_anime_views', compact('animes'));
  }

  public function add_anime()
  {
    $genres = Genre::all();
    $studios = Studio::all();
    $seasons = Season::all();
    return view('anime.add_anime', compact('genres', 'studios', 'seasons'));
  }

  public function store(Request $request)
    {
        $validated = $request->validate([
            'anime_name' => 'required|string|max:255',
            'release_date' => 'required|date',
            'views' => 'required|integer',
            'mal_score' => 'required|numeric',
            'synopsis' => 'required|string',
            'trailer_url' => 'required|url',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'total_episodes' => 'required|integer',
            'studio_id' => 'required|exists:studios,id',
            'season_id' => 'required|exists:seasons,id',
        ]);

        $path = $request->file('image')->store('images', 'public');

        $validated['image_url'] = $path;

        Anime::create($validated);

        return redirect()->route('home')->with('success', 'Anime added successfully!');
    }

}

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
    return view('anime.add_anime', compact('genres', 'studios', 'seasons'));
  }

    public function store(Request $request)
    {
      $rules = [
          'anime_name' => 'required|string|max:255',
          'release_date' => 'required|date',
          'views' => 'required|integer',
          'mal_score' => 'required|numeric|min:0|max:10',
          'synopsis' => 'required|string',
          'trailer_url' => 'required|url',
          'anime_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'total_episodes' => 'required|integer',
          'studio_id' => 'required|exists:studios,id',
          'season_id' => 'required|exists:seasons,id',
          'genres' => 'required|array',
          'genres.*' => 'exists:genres,id',
      ];

      $validatedData = $request->validate($rules);

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
      return view('anime.update_anime', compact('anime', 'genres', 'studios', 'seasons'));
    }

    public function update(Request $request, $id)
    {
      $rules = [
        'anime_name' => 'required|string|max:255',
        'release_date' => 'required|date',
        'views' => 'required|integer',
        'mal_score' => 'required|numeric|min:0|max:10',
        'synopsis' => 'required|string',
        'trailer_url' => 'required|url',
        'anime_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'total_episodes' => 'required|integer',
        'studio_id' => 'required|exists:studios,id',
        'season_id' => 'required|exists:seasons,id',
        'genres' => 'required|array',
        'genres.*' => 'exists:genres,id',
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
        $anime->anime_image = $imagePath;
      }

      $anime->save();

      $anime->genres()->sync($validatedData['genres']);

      return redirect()->route('anime.show', $anime->id)->with('success', 'Anime updated successfully!');
    }
}


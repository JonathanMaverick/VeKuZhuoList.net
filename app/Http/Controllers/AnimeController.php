<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::all();
        return view('home', compact('animes'));
    }

    public function show($id)
    {
        $anime = Anime::find($id);
        return view('anime.show', compact('anime'));
    }

    public function top_anime_malscore(){
        $animes = Anime::orderBy('mal_score', 'desc')->paginate(10);
        return view('anime.top_anime_malscore', compact('animes'));
    }

    public function top_anime_views(){
        $animes = Anime::orderBy('views', 'desc')->paginate(10);
        return view('anime.top_anime_views', compact('animes'));
    }
}

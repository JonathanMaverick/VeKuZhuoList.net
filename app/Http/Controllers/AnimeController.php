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
}

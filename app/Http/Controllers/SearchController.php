<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Studio;
use App\Models\VoiceActor;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $query = $request->input('query');

        $anime_results = Anime::where('anime_name', 'LIKE', "%{$query}%")->get();
        $studio_results = Studio::where('studio_name', 'LIKE', "%{$query}%")->get();
        $voice_actor_results = VoiceActor::where('voice_actor_name', 'LIKE', "%{$query}%")->get();

        return view('search_results', compact('anime_results', 'studio_results', 'voice_actor_results', 'query'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    //
    public function show($id)
    {
        $season = Season::find($id);
        return view('season.show', compact('season'));
    }
}

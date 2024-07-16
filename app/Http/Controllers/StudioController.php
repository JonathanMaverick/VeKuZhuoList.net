<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    //
    public function show($id){
        $studio = Studio::find($id);
        return view('studio.show', compact('studio'));
    }
}

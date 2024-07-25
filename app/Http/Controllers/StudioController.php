<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    //
    public function show($id){
        $studio = Studio::find($id);

        if($studio == null){
            return view('errors.404');
        }

        return view('studio.show', compact('studio'));
    }
}

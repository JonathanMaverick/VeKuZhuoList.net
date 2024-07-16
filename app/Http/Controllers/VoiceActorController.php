<?php

namespace App\Http\Controllers;

use App\Models\VoiceActor;
use Illuminate\Http\Request;

class VoiceActorController extends Controller
{
    //
    public function show($id)
    {
        $voice_actor = VoiceActor::find($id);
        return view('voice_actor.show', compact('voice_actor'));
    }
}

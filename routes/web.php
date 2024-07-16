<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\VoiceActorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AnimeController::class, 'index'])->name('home');
Route::get('/anime/{id}', [AnimeController::class, 'show'])->name('anime.show');
Route::get('/studio/{id}', [StudioController::class, 'show'])->name('studio.show');
Route::get('/voice_actor/{id}', [VoiceActorController::class, 'show'])->name('voice_actor.show');

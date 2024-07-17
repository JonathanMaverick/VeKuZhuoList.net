<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SearchController;
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
Route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/top_anime_malscore', [AnimeController::class, 'top_anime_malscore'])->name('top_anime_malscore');
Route::get('/top_anime_views', [AnimeController::class, 'top_anime_views'])->name('top_anime_views');

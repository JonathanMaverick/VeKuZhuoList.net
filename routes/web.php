<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SeasonController;
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

Route::prefix('anime')->group(function () {
    Route::get('/{id}', [AnimeController::class, 'show'])->name('anime.show');
    Route::get('/add', [AnimeController::class, 'add_anime'])->name('anime.add');
    Route::post('/', [AnimeController::class, 'store'])->name('anime.store');
    Route::get('/update/{id}', [AnimeController::class, 'update_anime'])->name('anime.update');
    Route::get('/top/malscore', [AnimeController::class, 'top_anime_malscore'])->name('anime.top_malscore');
    Route::get('/top/views', [AnimeController::class, 'top_anime_views'])->name('anime.top_views');
    Route::post('/update/{id}', [AnimeController::class, 'update'])->name('anime.update');
});

Route::prefix('studio')->group(function () {
    Route::get('/{id}', [StudioController::class, 'show'])->name('studio.show');
});

Route::prefix('voice_actor')->group(function () {
    Route::get('/{id}', [VoiceActorController::class, 'show'])->name('voice_actor.show');
});

Route::prefix('genre')->group(function () {
    Route::get('/{id}', [GenreController::class, 'show'])->name('genre.show');
});

Route::prefix('season')->group(function(){
    Route::get('/{id}', [SeasonController::class, 'show'])->name('season.show');
});

Route::get('/search', [SearchController::class, 'search'])->name('search');


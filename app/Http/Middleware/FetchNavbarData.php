<?php

namespace App\Http\Middleware;

use App\Models\Genre;
use App\Models\Season;
use App\Models\Studio;
use Closure;
use Illuminate\Http\Request;

class FetchNavbarData
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
   * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
   */
  public function handle(Request $request, Closure $next)
  {
    $studios = Studio::all();
    $genres = Genre::all();
    $seasons = Season::whereHas('animes')->get();

    view()->share([
      'studios' => $studios,
      'genres' => $genres,
      'seasons' => $seasons
    ]);

    return $next($request);
  }
}

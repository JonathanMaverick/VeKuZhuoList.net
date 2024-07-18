@extends('template.navbar')

@section('title')
  {{ $query }} search results
@endsection


@section('content')
  <div class="search-results container mx-auto my-8">
    <h2 class="text-2xl font-bold text-white mb-4">Search Results for "{{ $query }}"</h2>
    <h3 class="text-white text-xl">Anime Results: </h3>
    @if ($anime_results->isEmpty())
      <p class="text-white text-xl">No results found.</p>
    @else
      <ul class="text-white">
        @foreach ($anime_results as $anime)
          <li class="mb-2">
            <a href="{{ route('anime.show', $anime->id) }}" class="text-blue-500">{{ $anime->anime_name }}</a>
            <p>{{ $anime->synopsis }}</p>
          </li>
        @endforeach
      </ul>
    @endif
    <h3 class="text-white text-xl">Studio Results</h3>
    @if ($studio_results->isEmpty())
      <p class="text-white">No studio found.</p>
    @else
      <ul class="text-white">
        @foreach ($studio_results as $studio)
          <li class="mb-2">
            <a href="{{ route('studio.show', $studio->id) }}" class="text-blue-500">{{ $studio->studio_name }}</a>
            <p>{{ $studio->studio_description }}</p>
          </li>
        @endforeach
      </ul>
    @endif
    <h3 class="text-white text-xl">Voice Actor Results</h3>
    @if ($voice_actor_results->isEmpty())
      <p class="text-white">No voice actor found.</p>
    @else
      <ul class="text-white">
        @foreach ($voice_actor_results as $va)
          <li class="mb-2">
            <a href="{{ route('voice_actor.show', $va->id) }}" class="text-blue-500">{{ $va->voice_actor_name }}</a>
          </li>
        @endforeach
      </ul>
    @endif
  </div>
@endsection

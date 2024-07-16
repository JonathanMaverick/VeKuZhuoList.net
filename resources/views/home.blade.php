@extends('template.navbar')

@section('title', 'VeKuZhuoList.net')

@section('content')

    <div class="flex flex-row">
        <div class="main-content w-4/6">
            <h1 class="text-2xl text-white font-bold">Spring 2024 Anime</h1>
            <div class="anime-list">
                @foreach($animes as $anime)
                <a href="{{ route('anime.show', $anime->id) }}">
                    <div class="anime-item bg-gray-800 m-2 p-2">
                        <img src="{{Storage::url($anime->image_url)}}" alt="{{ $anime->anime_name }}" class="w-32 h-32 mr-4">
                        <h2 class="text-xl text-white font-bold">{{ $anime->anime_name }}</h2>
                        <p class="text-gray-300">Release Date: {{ $anime->release_date }}</p>
                        <p class="text-gray-300">Views: {{ $anime->views }}</p>
                        <p class="text-gray-300">MAL Score: {{ $anime->mal_score }}</p>
                        <p class="text-gray-300">{{ $anime->synopsis }}</p>
                        <a href="{{ $anime->trailer_url }}" class="text-blue-500" target="_blank">Watch Trailer</a>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <div class="sub-content w-2/6">
            <div class="bg-gray-500 p-2">
                <h2 class="text-white font-bold">Top Airing Anime</h2>
            </div>
        </div>
    </div>

@endsection

@extends('template.navbar')

@section('title')
    {{ $anime->anime_name }} - Anime
@endsection

@section('content')

<div class="container mx-auto p-4">
    <div class="anime-detail bg-gray-800 p-4">
        <img src="{{ Storage::url($anime->image_url) }}" alt="{{ $anime->anime_name }}" class="w-48 h-48 mr-4">
        <h1 class="text-2xl font-bold">{{ $anime->anime_name }}</h1>
        <p class="text-gray-300">Release Date: {{ $anime->release_date }}</p>
        <p class="text-gray-300">Views: {{ $anime->views }}</p>
        <p class="text-gray-300">MAL Score: {{ $anime->mal_score }}</p>
        <p class="text-gray-300">{{ $anime->synopsis }}</p>
        <a href="{{route('studio.show', $anime->studio->id)}}">
            {{$anime->studio->studio_name}}
        </a>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $anime->trailer_url }}" frameborder="0" allowfullscreen></iframe>
        </div>
        @foreach($anime->characters as $character)
            <p>{{$character->character_name}}
                <a href="{{ route('voice_actor.show', $character->voiceActor->id)}}">
                    {{ $character->voiceActor->voice_actor_name }}
                </a>
            </p>
        @endforeach
        @foreach ($anime->genres as $genre)
            <a href="{{ route('genre.show', $genre->id) }}" class="text-blue-500">{{ $genre->genre_name }}</a>
        @endforeach
    </div>
</div>

@endsection

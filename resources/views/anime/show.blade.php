@extends('template.navbar')

@section('title')
{{ $anime->anime_name }} - Anime
@endsection

@section('content')

<div class="title-section text-white bg-grayMid px-[12px] py-[5px] text-[18px] border-b-[1px] border-borderLight">
  {{$anime->anime_name}}
</div>

<div class="container bg-customBlack max-w-full border-[1px] border-border px-[15px] py-[10px] flex w-full">
  <div class="left-section pr-[5px] h-full flex flex-col">
    <img src="{{ Storage::url($anime->image_url) }}" alt="{{ $anime->anime_name }}" class="w-[250px]">
  </div>
  <div class="right-section flex-1 flex flex-col gap-[20px] pl-[5px] border-l-[1px] border-border">
    <div class="top-section">
      <div class="synopsis-section">
        <div class="title text-white border-b-[1px] border-borderLight font-bold text-[15px] mb-[10px]">Synopsis</div>
        <div class="content text-gray-300">
          {{$anime->synopsis}}
        </div>
      </div>
      <div class="trailer-section">
        <div class="title text-white border-b-[1px] border-borderLight font-bold text-[15px] my-[10px]">Trailer</div>
        <div class="content w-full bg-black">
          <iframe class="w-4/5 mx-auto h-[340px]" src="https://www.youtube.com/embed/{{ $anime->trailer_url }}"
            frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    {{-- <h1 class="text-2xl font-bold">{{ $anime->anime_name }}</h1>
    <p class="text-gray-300">Release Date: {{ $anime->release_date }}</p>
    <p class="text-gray-300">Views: {{ $anime->views }}</p>
    <p class="text-gray-300">MAL Score: {{ $anime->mal_score }}</p>
    <p class="text-gray-300">{{ $anime->synopsis }}</p>
    <a href="{{route('studio.show', $anime->studio->id)}}">
      {{$anime->studio->studio_name}}
    </a>
    <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $anime->trailer_url }}" frameborder="0"
        allowfullscreen></iframe>
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
    @endforeach --}}
  </div>
</div>

@endsection
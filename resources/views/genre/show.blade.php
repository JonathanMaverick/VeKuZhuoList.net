@extends('template.navbar')

@section('title')
{{ $genre->genre_name }} - Genre
@endsection

@section('content')

<div class="container mx-auto p-4">

  <h1 class="text-xl text-white">{{$genre->genre_name}}</h1>

  @foreach ($genre->animes as $anime)
  <a href="{{ route('anime.show', $anime->id) }}">
    <div class="anime-item text-white">
      {{$anime->anime_name}}
      <img src="{{Storage::url($anime->image_url)}}" alt="">
    </div>
  </a>
  @endforeach
</div>

@endsection
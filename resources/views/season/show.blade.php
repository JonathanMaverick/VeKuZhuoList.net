@extends('template.navbar')

@section('title')
{{ $season->season_name }} Animes
@endsection

@section('content')

<div class="container mx-auto p-4">

    <h1 class="text-xl text-white">{{$season->season_name}}</h1>

    @foreach ($season->animes as $anime)
    <a href="{{ route('anime.show', $anime->id) }}">
      <div class="anime-item text-white">
        {{$anime->anime_name}}
        <img src="{{Storage::url($anime->image_url)}}" alt="">
      </div>
    </a>
    @endforeach
</div>

@endsection

@extends('template.navbar')

@section('title')
{{ $studio->studio_name }} - Studio
@endsection

@section('content')
<div class="container mx-auto p-4">
  <div class="bg-yellow-200">
    <img src="{{ $studio->studio_logo }}" alt="">
    <p>{{ $studio->studio_name }}</p>
  </div>

  @foreach ($studio->animes as $anime)
  <a href="{{ route('anime.show', $anime->id) }}">
    <div class="anime-item">
      {{ $anime->anime_name }}
      <img src="{{ Storage::url($anime->image_url) }}" alt="">
    </div>
  </a>
  @endforeach
</div>
@endsection
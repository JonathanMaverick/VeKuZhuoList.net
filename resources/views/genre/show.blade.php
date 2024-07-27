@extends('template.navbar')

@section('title')
{{ $genre->genre_name }} - Genre
@endsection

@section('content')
<div class="title-section text-white bg-grayMid px-[12px] py-[5px] text-[18px] border-b-[1px] border-borderLight">
  {{ $genre->genre_name }} Animes
</div>

<div
  class="container bg-customBlack max-w-full border-[1px] border-border px-[15px] py-[10px] w-full grid grid-cols-3 gap-[20px]">
  @foreach ($genre->animes as $anime)
  <div class="anime-item flex flex-col border-[1px] border-border">
    <div class="title-section flex justify-center h-[60px] items-center">
      <a class="text-customBlueLight hover:underline text-center"
        href="{{ route('anime.show', $anime->id) }}">{{$anime->anime_name}}</a>
    </div>
    <div class="sub-title-section flex text-lightFont text-[12px] bg-grayDark py-[5px]">
      <p class="release-date flex-1 flex justify-end pr-[5px] border-r-[1px] border-border">{{ $anime->release_date }}
      </p>
      <p class="episodes flex-1 flex justify-start pl-[5px]">{{ $anime->total_episodes }} eps</p>
    </div>
    <div class="genre-section flex justify-center text-[10px] bg-grayMid gap-[5px] py-[7px]">
      @foreach ($anime->genres as $genre)
      <p class="text-lightFont bg-grayLight px-[5px] rounded-md">{{$genre->genre_name}}</p>
      @endforeach
    </div>
    <div class="content-section grid grid-cols-2">
      <div class="left h-[228px]">
        <img src={{ Storage::url($anime->image_url) }} alt="">
      </div>
      <div
        class="right flex flex-col text-[11px] text-white p-[10px] box-border h-[228px] overflow-clip hover:overflow-auto gap-[5px]">
        <p class="sysnopsis">{{ $anime->synopsis }}</p>
        <div class="descriptoin">
          <p>Studio: <a class="text-customBlueLight hover:underline font-extrabold"
              href="{{ route('studio.show', $anime->studio->id) }}">{{$anime->studio->studio_name}}</a></p>
        </div>
      </div>
    </div>
    <div
      class="statistic-section flex justify-evenly bg-grayDark text-lightFont text-[12px] py-[5px] border-t-[1px] border-border">
      <p>Rating: {{ $anime->mal_score}} </p>
      <p>Views: {{ number_format($anime->views) }}</p>
    </div>
  </div>
  @endforeach
</div>

@endsection
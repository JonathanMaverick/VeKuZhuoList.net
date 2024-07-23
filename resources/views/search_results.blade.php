@extends('template.navbar')

@section('title')
{{ $query }} search results
@endsection


@section('content')
<div class="title-section text-white bg-grayMid px-[12px] py-[5px] text-[18px] border-b-[1px] border-borderLight">
  Search Results for "{{ $query }}"
</div>

<div
  class="container bg-customBlack max-w-full border-[1px] border-border px-[15px] py-[10px] flex w-full flex-col gap-[15px]">
  <div class="anime-section">
    <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px]">Anime</div>
    <div class="content">
      @if ($anime_results->isEmpty())
      <div class="h-[100px] flex justify-center items-center">
        <p class="text-lightFont">No results found.</p>
      </div>
      @else
      @foreach ($anime_results as $anime)
      <div class="content flex w-full gap-[10px] pt-[5px] pb-[5px] border-b-[1px] border-border">
        <div class="left"><img src="{{ Storage::url($anime->image_url) }}" alt="" class="h-[100px]">
        </div>
        <div class="right flex-1 flex flex-col gap-[5px]">
          <a class="title text-customBlueLight hover:underline leading-5" href="{{ route('anime.show', $anime->id) }}">
            {{ $anime->anime_name }}
          </a>
          <div class="description text-[13px]">
            <p class="text-lightFont">{{ $anime->total_episodes }} eps, scored {{ $anime->mal_score }}</p>
            <p class="text-lightFont">{{ number_format($anime->views) }} views</p>
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
  <div class="studio-section">
    <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px]">Studio</div>
    <div class="content">
      @if ($studio_results->isEmpty())
      <div class="h-[100px] flex justify-center items-center">
        <p class="text-lightFont">No results found.</p>
      </div>
      @else
      @foreach ($studio_results as $studio)
      <div class="content flex w-full gap-[10px] pt-[5px] pb-[5px] border-b-[1px] border-border">
        <div class="left"><img src="{{ $studio->studio_logo }}" alt="" class="w-[70px]">
        </div>
        <div class="right flex-1 flex flex-col gap-[5px]">
          <a class="title text-customBlueLight hover:underline leading-5"
            href="{{ route('studio.show', $studio->id) }}">
            {{ $studio->studio_name }}
          </a>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
  <div class="va-section">
    <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px]">Voice Actor</div>
    <div class="content">
      @if ($voice_actor_results->isEmpty())
      <div class="h-[100px] flex justify-center items-center">
        <p class="text-lightFont">No results found.</p>
      </div>
      @else
      @foreach ($voice_actor_results as $va)
      <div class="content flex w-full gap-[10px] pt-[5px] pb-[5px] border-b-[1px] border-border">
        <div class="left"><img src="{{ $va->voice_actor_image }}" alt="" class="w-[70px]">
        </div>
        <div class="right flex-1 flex flex-col gap-[5px]">
          <a class="title text-customBlueLight hover:underline leading-5"
            href="{{ route('voice_actor.show', $va->id) }}">
            {{ $va->voice_actor_name }}
          </a>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</div>

{{-- <div class="search-results container mx-auto my-8">
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
</div> --}}
@endsection
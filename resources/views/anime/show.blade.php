@extends('template.navbar')

@section('title')
  {{ $anime->anime_name }} - Anime
@endsection

@section('content')
  <div
    class="title-section text-white bg-grayMid px-[12px] py-[5px] text-[18px] border-b-[1px] border-borderLight flex justify-between">
    {{ $anime->anime_name }}
    <a class="text-customBlueLight hover:underline" href="{{ route('anime.update', $anime->id) }}">
      Edit
    </a>
  </div>

  <div class="container bg-customBlack max-w-full border-[1px] border-border px-[15px] py-[10px] flex w-full">

    <div class="left-section pr-[5px] h-full flex flex-col max-w-[250px]">
      <img src="{{ Storage::url($anime->image_url) }}" alt="{{ $anime->anime_name }}" class="w-[250px] mb-[10px]">
      <div class="container flex p-[15px] gap-[10px] justify-between bg-grayDark border-[1px] border-border ">
        <div class="rating text-white flex flex-col items-center">
          <div class="text-white bg-customBlue w-full text-center px-[15px] rounded-sm">Score</div>
          <p class="text-[25px]">{{ $anime->mal_score }}</p>
        </div>
        <div class="view text-white">
          <div class="bg-customBlue w-full text-center px-[15px] rounded-sm">View</div>
          <p class="text-[25px]">{{ number_format($anime->views) }}</p>
        </div>
      </div>
      <div class="information-section mb-[10px]">
        <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px] my-[10px]">Information</div>
        <div class="content w-full flex flex-col text-white">
          <p><b class="text-gray-300">Name: </b>{{ $anime->anime_name }}</p>
          <p><b class="text-gray-300">Release date: </b>{{ $anime->release_date }}</p>
          <p><b class="text-gray-300">Episodes: </b>{{ $anime->total_episodes }}</p>
          <p><b class="text-gray-300">Studios: </b><a class="text-customBlueLight hover:underline"
              href="{{ route('studio.show', $anime->studio->id) }}">
              {{ $anime->studio->studio_name }}
            </a></p>
          <p><b class="text-gray-300">Genres: </b>
            @foreach ($anime->genres as $genre)
              <a class="text-customBlueLight hover:underline" href="{{ route('genre.show', $genre->id) }}"
                class="text-blue-500">{{ $genre->genre_name }}</a>
              @if (!$loop->last)
                ,
              @endif
            @endforeach
          </p>
          <p><b class="text-gray-300:">Season: </b>
            <a class="text-customBlueLight hover:underline" href="{{ route('season.show', $anime->season->id) }}">
              {{ $anime->season->season_name }}
            </a>
          </p>
        </div>
      </div>
      <div class="statistic-section mb-[10px]">
        <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px] my-[10px]">Statistic</div>
        <div class="content w-full flex flex-col text-white">
          <p><b class="text-gray-300">Scores: {{ $anime->mal_score }}</b></p>
          <p><b class="text-gray-300">Views: {{ number_format($anime->views) }}</b></p>
        </div>
      </div>
    </div>
    <div class="right-section flex-1 flex flex-col gap-[15px] pl-[5px] border-l-[1px] border-border">
      <div class="synopsis-section">
        <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px] mb-[10px] w-full">Synopsis</div>
        <div class="content text-gray-300">
          {{ $anime->synopsis }}
        </div>
      </div>
      <div class="trailer-section">
        <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px] my-[10px]">Trailer</div>
        <div class="content w-full bg-black">
          <iframe class="w-4/5 mx-auto h-[340px]" src="https://www.youtube.com/embed/{{ $anime->trailer_url }}"
            frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="character-section">
        <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px]">Characters &
          Voice Actors</div>
        <div class="content w-ful grid grid-cols-2">
          @foreach ($anime->characters as $character)
            <div class="container text-[13px] flex justify-between pt-[5px] pb-[5px] border-[1px] border-border">
              <div class="left flex gap-[10px]">
                <img class="w-[44px]" src={{ $character->character_image }} alt="">
                <p class="text-white">{{ $character->character_name }}</p>
              </div>
              <div class="right flex gap-[10px]">
                <a class="text-customBlueLight hover:underline"
                  href="{{ route('voice_actor.show', $character->voiceActor->id) }}">{{ $character->voiceActor->voice_actor_name }}</a>
                <img class="w-[44px]" src={{ $character->voiceActor->voice_actor_image }} alt="">
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection

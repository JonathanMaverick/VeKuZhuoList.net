@extends('template.navbar')

@section('title')
{{ $studio->studio_name }} - Studio
@endsection

@section('content')
<div class="title-section text-white bg-grayMid px-[12px] py-[5px] text-[18px] border-b-[1px] border-borderLight">
  {{ $studio->studio_name }}
</div>

<div class="container bg-customBlack max-w-full border-[1px] border-border px-[15px] py-[10px] flex w-full">
  <div class="left-section pr-[5px] h-full flex flex-col max-w-[300px]">
    <img class="w-[300px]" src="{{ $studio->studio_logo }}" alt="">
    <div class="information-section mb-[10px]">
      <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px] my-[10px]">Information</div>
      <div class="content w-full flex flex-col text-white">
        <p class="mb-[5px]"><b class="text-gray-300">Name: </b>{{$studio->studio_name}}</p>
        <p>{{$studio->studio_description}}</p>
      </div>
    </div>
  </div>
  <div class="right-section flex-1 flex flex-col gap-[15px] pl-[5px] border-l-[1px] border-border">
    <div class="character-section">
      <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px]">Products in
        {{$studio->studio_name}}</div>
      <div class="content">
        @foreach ($studio->animes as $anime)
        <div class="content flex w-full gap-[10px] pt-[5px] pb-[5px] border-b-[1px] border-border">
          <div class="left"><img src="{{ Storage::url($anime->image_url) }}" alt="" class="h-[100px]">
          </div>
          <div class="right flex-1 flex flex-col gap-[5px]">
            <a class="title text-customBlueLight hover:underline leading-5"
              href="{{ route('anime.show', $anime->id) }}">
              {{ $anime->anime_name }}
            </a>
            <div class="description text-[13px]">
              <p class="text-lightFont">{{ $anime->total_episodes }} eps, scored {{ $anime->mal_score }}</p>
              <p class="text-lightFont">{{ number_format($anime->views) }} views</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

{{-- <div class="container mx-auto p-4">
  <div class="bg-yellow-200">
    <img src="{{ $studio->studio_logo }}" alt="">
    <p>{{ $studio->studio_name }}</p>
  </div>

  @foreach ($studio->animes as $anime)s
  <a href="{{ route('anime.show', $anime->id) }}">
    <div class="anime-item">
      {{ $anime->anime_name }}
      <img src="{{ Storage::url($anime->image_url) }}" alt="">
    </div>
  </a>
  @endforeach
</div> --}}
@endsection
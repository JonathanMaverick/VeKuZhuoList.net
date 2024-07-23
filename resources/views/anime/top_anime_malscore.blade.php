@extends('template.navbar')

@section('title', 'Top Anime Mal Score')

@section('content')
<div class="title-section text-white bg-grayMid px-[12px] py-[5px] text-[18px] border-b-[1px] border-borderLight">
  Top Anime
</div>

<div class="container bg-customBlack max-w-full border-[1px] border-border px-[15px] py-[10px] flex w-full flex-col">
  <div class="title text-white text-[18px] font-bold">Top Rated Anime</div>
  <table class="text-white border-collapse">
    <thead class="bg-grayLight text-center h-[32px]">
      <tr>
        <th class="border-[1px] border-border w-[80px]">Rank</th>
        <th class="border-[1px] border-border">Title</th>
        <th class="border-[1px] border-border">Score</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($animes as $anime)
      <tr class="{{ ($loop->index + 1) % 2 == 0 ? 'bg-grayDark' : '' }}">
        @php
        $rank = ($currentPage - 1) * $perPage + $loop->iteration;
        @endphp
        <td class="text-center border-[1px] border-border text-[18px] font-bold">{{ $rank }}</td>
        <td class="border-[1px] border-border">
          <div class="flex gap-[10px] p-[10px] ">
            <div class="left"><img src="{{ Storage::url($anime->image_url) }}" alt="" class="h-[100px]">
            </div>
            <div class="right flex flex-col gap-[2px]">
              <a class="title text-customBlueLight hover:underline leading-5 font-bold text-[15px]"
                href="{{ route('anime.show', $anime->id) }}">
                {{ $anime->anime_name }}
              </a>
              <div class="description">
                <p class="text-lightFont">{{ $anime->release_date }}</p>
                <p class="text-lightFont">{{ number_format($anime->views) }} views</p>
              </div>
            </div>
          </div>
        </td>
        <td class="text-center border-[1px] border-border">{{ $anime->mal_score }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="pagination w-full">
    {{ $animes->links('pagination::tailwind') }}
  </div>
</div>
@endsection
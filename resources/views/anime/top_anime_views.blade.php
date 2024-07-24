@extends('template.navbar')

@section('title', 'Top Anime Views')

@section('content')

<div class="title-section text-white bg-grayMid px-[12px] py-[12px] text-[18px] border-b-[1px] border-borderLight">
  Top Viewed Anime
</div>

<div class="container bg-customBlack max-w-full border-[1px] border-border px-[15px] py-[10px] flex w-full flex-col">
  <table class="text-white border-collapse">
    <thead class="bg-grayLight text-center h-[32px]">
      <tr>
        <th class="border-[1px] border-border w-[80px]">Rank</th>
        <th class="border-[1px] border-border">Title</th>
        <th class="border-[1px] border-border">Views</th>
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
        <td class="text-center border-[1px] border-border">{{ $anime->views }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="pagination w-full">
    {{ $animes->links('pagination::tailwind') }}
  </div>
</div>

{{-- <div class="anime-list container mx-auto my-8">
  <h2 class="text-2xl font-bold text-white mb-4">Top Anime by Views</h2>

  @if ($animes->isEmpty())
  <p class="text-white">No anime found.</p>
  @else
  <ul class="text-white">
    @foreach ($animes as $anime)
    <li class="mb-2">
      <a href="{{ route('anime.show', $anime->id) }}" class="text-blue-500">{{ $anime->anime_name }}</a>
      <p>Views: {{ $anime->views }}</p>
    </li>
    @endforeach
  </ul>
  <div class="pagination mt-4">
    {{ $animes->links('pagination::tailwind') }}
  </div>
  @endif
</div> --}}
@endsection

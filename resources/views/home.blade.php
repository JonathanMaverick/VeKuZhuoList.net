@extends('template.navbar')

@section('title', 'VeKuZhuoList.net')

@section('content')

<div class="flex flex-col">
  <div class="banner-container h-[450px] relative">
    <img src="{{ asset('/image/banner.png') }}" alt="" class="object-cover h-full w-full">
    <div class="absolute inset-0 flex justify-center flex-col items-start pl-[40px] mb-[30px] text-white">
      <p class="text-[30px] font-bold">Unleash Your Inner Otaku: Top Anime Picks</p>
      <p>Explore captivating stories, unforgettable characters, and epic adventures</p>
    </div>
  </div>
  <div class="sub-banner text-white bg-grayMid px-[12px] py-[5px] text-[18px]">
    Welcome to VeKuZhuoList.net!
  </div>
  <div class="flex flex-row border-[1px] border-border">
    <div class="main-content w-4/6 p-[10px] flex flex-col gap-[15px]">
      <div class="current-season-section">
        <div class="flex justify-between border-b-[1px] border-borderLight mb-[8px] pb-[2px]">
          <h1 class="text-[18px] text-white">Summer 2024 Anime</h1>
        </div>
        <div class="anime-carousel overflow-hidden relative flex items-center">
          <div
            class="carousel-button-left absolute w-12 h-24 bg-black rounded-r-full z-1 items-center justify-start hidden">
            <img src="{{ asset('/image/chevron-left.svg') }}" alt="">
          </div>
          <div
            class="carousel-button-right absolute w-12 h-24 bg-black rounded-l-full z-1 right-0 items-center justify-end hidden">
            <img src="{{ asset('/image/chevron-right.svg') }}" alt="">
          </div>
          <div class="carousel-track flex gap-[10px]">
            @foreach ($currentSeasonAnimes as $anime)
            <a href="{{ route('anime.show', $anime->id) }}">
              <div class="anime-item w-[200px] hover:brightness-50 transition duration-300 relative">
                <img src="{{ Storage::url($anime->image_url) }}" alt="{{ $anime->anime_name }}"
                  class="w-full h-[282.66px]">
                <div class="absolute inset-x-0 bottom-0 h-[180px] bg-gradient-to-t from-black via-transparent"></div>
                <p class="absolute text-white inset-0 p-1 flex items-end text-[14px]">{{ $anime->anime_name }}</p>
              </div>
            </a>
            @endforeach
          </div>
        </div>
      </div>
      <div class="random-anime-section">
        <div class="flex justify-between border-b-[1px] border-borderLight pb-[2px]">
          <h1 class="text-[18px] text-white">Picked for you</h1>
        </div>
        <div class="random-anime-container flex flex-col">
          @foreach ($randomAnimes as $anime)
          <div class="random-anime-item flex border-b-[1px] border-border py-[10px] w-full gap-[20px]">
            <div class="left"><img src="{{ Storage::url($anime->image_url) }}" alt="{{ $anime->anime_name }}"
                class="h-[150px] w-[107px]"></div>
            <div class="right flex-1">
              <a class="title text-customBlueLight hover:underline leading-5"
                href="{{ route('anime.show', $anime->id) }}">
                {{ $anime->anime_name }}
              </a>
              <div class="description text-[13px] text-lightFont">
                <p class="">{{ $anime->total_episodes }} eps, scored {{ $anime->mal_score }}</p>
                <p class="mb-1">{{ number_format($anime->views) }} views</p>
                <p class="">{{ Str::words($anime->synopsis, '40', '...') }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="sub-content w-2/6 border-l-[1px] border-border px-[10px] py-[6px] my-[8px] flex flex-col gap-[20px]">
      <div class="top-viewed-anime-section">
        <div class="title bg-grayLight p-2 flex justify-between items-center">
          <h2 class="text-white">Top Viewed Anime</h2>
          <a class="text-customBlueLight hover:underline" href="{{ route('anime.top_views') }}">More</a>
        </div>
        <div class="top-viewed-anime-container bg-grayDark">
          @foreach ($topAnimesView as $anime)
          <div class="top-anime-item flex px-[10px] py-[15px] gap-2">
            <div class="number text-white">{{ $loop->iteration }}</div>
            <div class="content flex w-full gap-[10px]">
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
          </div>
          @endforeach
        </div>
      </div>
      <div class="top-rated-anime-section">
        <div class="title bg-grayLight p-2 flex justify-between items-center">
          <h2 class="text-white items-center">Top Rated Anime</h2>
          <a class="text-customBlueLight hover:underline" href="{{ route('anime.top_malscore') }}">More</a>
        </div>
        <div class="top-rated-anime-container bg-grayDark">
          @foreach ($topAnimesMal as $anime)
          <div class="top-anime-item flex px-[10px] py-[15px] gap-2">
            <div class="number text-white">{{ $loop->iteration }}</div>
            <div class="content flex w-full gap-[10px]">
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
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const leftArrow = document.querySelector('.carousel-button-left')
    const rightArrow = document.querySelector('.carousel-button-right')
    const carousel = document.querySelector('.anime-carousel')
    const track = document.querySelector('.carousel-track');
    const items = document.querySelectorAll('.anime-item');
    const totalItems = Math.ceil(items.length / 3);
    let index = 0;

    leftArrow.style.opacity = '0';
    rightArrow.style.opacity = '0';
    leftArrow.style.transition = 'all 0.2s ease-in-out';
    rightArrow.style.transition = 'all 0.2s ease-in-out';
    leftArrow.style.display = 'flex';
    rightArrow.style.display = 'flex';

    function moveCarouselLeft() {
      index--;
      track.style.transition = 'transform 0.5s ease-in-out';
      track.style.transform = `translateX(-${index * 630}px)`;
      checkArrow()
    }

    function moveCarouselRight() {
      index++;
      track.style.transition = 'transform 0.5s ease-in-out';
      if (index + 1 >= totalItems) {
        remaining = items.length % 3
        let x = 153;
        if (remaining > 1) {
          console.log("tes");
          x = x + (remaining - 1) * 210
        }
        track.style.transform =
          `translateX(-${(index-1) * 630 + (x)}px)`;
      } else {
        track.style.transform = `translateX(-${index * 630}px)`;
      }
      checkArrow()
    }

    function checkArrow() {
      if (index != 0) {
        leftArrow.style.display = 'flex';
        leftArrow.style.opacity = '0.85';
      } else {
        leftArrow.style.opacity = '0';
        leftArrow.style.display = 'none';
      }

      if (index + 1 < totalItems) {
        rightArrow.style.display = 'flex';
        rightArrow.style.opacity = '0.85';
      } else {
        rightArrow.style.opacity = '0';
        rightArrow.style.display = 'none';
      }
    }

    carousel.addEventListener('mouseenter', () => {
      checkArrow()
    });

    carousel.addEventListener('mouseleave', () => {
      leftArrow.style.transition = 'all 0.2s ease-in-out';
      rightArrow.style.transition = 'all 0.2s ease-in-out';
      leftArrow.style.opacity = '0';
      rightArrow.style.opacity = '0';
    });

    leftArrow.addEventListener('click', moveCarouselLeft);
    rightArrow.addEventListener('click', moveCarouselRight);
</script>

@endsection
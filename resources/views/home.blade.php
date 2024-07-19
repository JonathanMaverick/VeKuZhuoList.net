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
      <div class="main-content w-4/6 p-[10px]">
        <div class="current-season-section">
          <div class="flex justify-between border-b-[1px] border-borderLight mb-[8px] pb-[2px]">
            <h1 class="text-[18px] text-white">Summer 2024 Anime</h1>
          </div>
          <div class="anime-carousel flex overflow-hidden relative">
            <div class="carousel-track flex gap-[10px]">
              @foreach ($currentSeasonAnime as $anime)
                <a href="{{ route('anime.show', $anime->id) }}">
                  <div class="anime-item w-[200px] hover:brightness-50 transition duration-300">
                    <img src="{{ Storage::url($anime->image_url) }}" alt="{{ $anime->anime_name }}" class="w-full">
                  </div>
                </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="sub-content w-2/6 border-l-[1px] border-border px-[10px] py-[6px] my-[8px]">
        <div class="bg-grayLight p-2">
          <h2 class="text-white">Top Airing Anime</h2>
        </div>
      </div>
    </div>
  </div>

  <script>
    const track = document.querySelector('.carousel-track');
    const items = document.querySelectorAll('.anime-item');
    const totalItems = Math.ceil(items.length / 3);
    let index = 0;

    function moveCarousel() {
      index++;
      if (index >= totalItems) {
        index = 0;
        track.style.transition = 'none';
        track.style.transform = 'translateX(0)';
        requestAnimationFrame(() => {
          requestAnimationFrame(() => {
            track.style.transition = 'transform 0.5s ease-in-out';
            track.style.transform = `translateX(-${index * 100}%)`;
          });
        });
      } else {
        track.style.transition = 'transform 0.5s ease-in-out';
        track.style.transform = `translateX(-${index * 630}px)`;
      }
    }

    function moveCarouselLeft() {
      if (index === 0) {
        index = totalItems;
        track.style.transition = 'none';
        track.style.transform = `translateX(-${index * 100}%)`;
        requestAnimationFrame(() => {
          requestAnimationFrame(() => {
            track.style.transition = 'transform 0.5s ease-in-out';
            index--;
            track.style.transform = `translateX(-${index * 100}%)`;
          });
        });
      } else {
        index--;
        track.style.transform = `translateX(-${index * 100}%)`;
      }
    }

    function moveCarouselRight() {
      if (index >= totalItems - 1) {
        index = -1;
        track.style.transition = 'none';
        track.style.transform = 'translateX(0)';
        requestAnimationFrame(() => {
          requestAnimationFrame(() => {
            track.style.transition = 'transform 0.5s ease-in-out';
            index++;
            track.style.transform = `translateX(-${index * 100}%)`;
          });
        });
      } else {
        index++;
        track.style.transform = `translateX(-${index * 100}%)`;
      }
    }

    setInterval(moveCarousel, 3000);

    document.querySelector('.carousel-button-left').addEventListener('click', moveCarouselLeft);
    document.querySelector('.carousel-button-right').addEventListener('click', moveCarouselRight);
  </script>

@endsection

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="icon" href="{{ asset('/image/logo.png') }}" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @vite('resources/sass/app.scss')
  <style>
    .dropdown:hover .dropdown-content {
      display: flex
    }
  </style>
</head>

<body class="bg-customBlack flex justify-center">
  <div class="main flex flex-col">

    {{-- Navigation Bar --}}
    <div class="navbar bg-customBlack p-0">
      <div class="navbar-upper flex justify-between py-3">
        <a href="{{ route('home') }}" class="w-2/12 h-auto">
          <img src="{{ asset('/image/VeKuZhuoList.png') }}" alt="">
        </a>
        {{-- <div class="login-register-button flex justify-between center w-3/12 gap-2">
          <a class="w-1/2 flex justify-center bg-grayLight font-bold text-white">Login</a>
          <a class="w-1/2 flex justify-center bg-customBlue font-bold text-white">Sign Up</a>
        </div> --}}
      </div>
      <div class="navbar-bottom bg-customBlue w-full flex flex-row justify-between h-[40px]">
        <div class="dropdown-section flex flex-row text-white font-bold">
          <div class="dropdown hover:bg-grayLight flex items-center cursor-pointer px-4 relative">
            Anime
            <div
              class="dropdown-content absolute bg-grayLight whitespace-nowrap hidden flex-col left-0 top-full z-10 w-[150px] text-[12px]">
              <a class="py-[10px] px-[15px] hover:bg-white hover:text-grayLight" href="{{route('anime.top_views')}}">Top
                Viewed Anime</a>
              <a class="py-[10px] px-[15px] hover:bg-white hover:text-grayLight"
                href="{{route('anime.top_malscore')}}">Top Rated Anime</a>
              <a class="py-[10px] px-[15px] hover:bg-white hover:text-grayLight" href="{{route('anime.add')}}">Add
                Anime</a>
            </div>
          </div>
          <div class="dropdown hover:bg-grayLight flex items-center cursor-pointer px-4 relative">
            Studio
            <div
              class="dropdown-content absolute bg-grayLight whitespace-nowrap hidden flex-col left-0 top-full z-10 w-[150px] text-[12px] max-h-[300px] overflow-auto">
              @foreach($studios as $studio)
              <a class="py-[10px] px-[15px] hover:bg-white hover:text-grayLight"
                href="{{ route('studio.show', $studio->id) }}">{{$studio->studio_name}}</a>
              @endforeach
            </div>
          </div>
          <div class="dropdown hover:bg-grayLight flex items-center cursor-pointer px-4 relative">
            Genre
            <div
              class="dropdown-content absolute bg-grayLight whitespace-nowrap hidden flex-col left-0 top-full z-10 w-[150px] text-[12px] max-h-[300px] overflow-auto">
              @foreach($genres as $genre)
              <a class="py-[10px] px-[15px] hover:bg-white hover:text-grayLight"
                href="{{ route('genre.show', $genre->id) }}">{{$genre->genre_name}}</a>
              @endforeach
            </div>
          </div>
          <div class="dropdown hover:bg-grayLight flex items-center cursor-pointer px-4 relative">
            Season
            <div
              class="dropdown-content absolute bg-grayLight whitespace-nowrap hidden flex-col left-0 top-full z-10 w-[150px] text-[12px] max-h-[300px] overflow-auto">
              @foreach($seasons as $season)
              <a class="py-[10px] px-[15px] hover:bg-white hover:text-grayLight"
                href="{{ route('season.show', $season->id) }}">{{$season->season_name}}</a>
              @endforeach
            </div>
          </div>
        </div>
        <div class="search-section flex items-center w-4/12 bg-black m-[6px] rounded-md">
          <form action="{{ route('search') }}" method="GET" class="w-full flex">
            <input type="text" name="query"
              class="bg-transparent border-1 outline-none focus:ring-0 text-white w-full px-4" placeholder="Search...">
            <button type="submit" class="bg-gray-600 p-2">
              <img src="{{ asset('/image/search.svg') }}" class="w-4 h-4" alt="Search">
            </button>
          </form>
        </div>
      </div>
    </div>

    {{-- Content --}}
    <div class="content">
      @yield('content')
    </div>

  </div>
</body>

</html>
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
</head>
<body class="bg-black flex justify-center">
    <div class="main flex flex-col">

        {{-- Navigation Bar --}}
        <div class="nav-bar bg-black">
            <div class="nav-bar-upper flex justify-between py-3">
                <a href="{{route('home')}}" class="w-2/12 h-auto">
                    <img src="{{ asset('/image/VeKuZhuoList.png') }}" alt="">
                </a>
                <div class="login-register-button flex justify-between center w-3/12 gap-2">
                    <a class="w-1/2 flex justify-center bg-gray-500 font-bold text-white">Login</a>
                    <a class="w-1/2 flex justify-center bg-blue-600 font-bold text-white">Sign Up</a>
                </div>
            </div>
            <div class="nav-bar-bottom bg-blue-700 w-full flex flex-row justify-between">
                <div class="dropdown-section flex flex-row text-white font-bold">
                    <div class="p-2 hover:bg-neutral-800 flex items-center">
                        Anime
                    </div>
                </div>
                <div class="search-section flex items-center w-4/12 bg-black mr-2 my-2">
                    <input type="text" class="bg-transparent border-1 outline-none focus:ring-0 text-white w-full px-4" placeholder="Search...">
                    <button class="bg-gray-600 p-2">
                        <img src="{{ asset('/image/search.svg') }}" class="w-4 h-4" alt="Search">
                    </button>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="content my-4">
            @yield('content')
        </div>

    </div>
</body>
</html>

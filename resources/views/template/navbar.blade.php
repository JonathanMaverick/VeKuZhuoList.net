<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('/image/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black flex justify-center">
    <div class="main w-4/6 bg-yellow-200 flex flex-col">
        <div class="nav-bar">
            <div class="nav-bar-upper flex justify-between">
                <img class="w-1/5" src="{{ asset('/image/VekunimeList.png') }}" alt="">
                <div class="login-register-button flex justify-between center w-1/6">
                    <button class="w-2/6 bg-yellow-300">Login</button>
                    <button class="w-2/6 bg-red-300">Register</button>
                </div>
            </div>
        </div>
        <div class="main w-4/6 bg-yellow-200">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>

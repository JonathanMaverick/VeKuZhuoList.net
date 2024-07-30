<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  @vite('resources/sass/app.scss')
  <title>404 Page Not Found</title>
</head>

<body class="bg-customBlack h-screen flex justify-center items-center">
  <div class="flex flex-col items-center gap-[15px]">
    <p class="text-white text-[40px]">404 Page not found</p>
    <a class="text-white bg-customBlue w-fit p-[10px] rounded-sm" href={{ route('home') }}>Back to home</a>
  </div>
  <img class="h-[70vh] absolute right-0 bottom-0" src="{{ asset('image/mattaNoBg.gif') }}" alt="">
  <img class="h-[70vh] absolute left-0 bottom-0" src="{{ asset('image/mattaNoBg.gif') }}" alt="">
</body>

</html>

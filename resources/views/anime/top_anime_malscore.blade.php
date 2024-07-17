@extends('template.navbar')

@section('title', 'Top Anime Mal Score')

@section('content')
<div class="anime-list container mx-auto my-8">
    <h2 class="text-2xl font-bold text-white mb-4">Top Anime by Mal Score</h2>

    @if($animes->isEmpty())
        <p class="text-white">No anime found.</p>
    @else
        <ul class="text-white">
            @foreach($animes as $anime)
                <li class="mb-2">
                    <a href="{{ route('anime.show', $anime->id) }}" class="text-blue-500">{{ $anime->anime_name }}</a>
                    <p>Mal Score: {{ $anime->mal_score }}</p>
                </li>
            @endforeach
        </ul>
        <div class="pagination mt-4">
            {{ $animes->links('pagination::tailwind') }}
        </div>
    @endif
</div>
@endsection

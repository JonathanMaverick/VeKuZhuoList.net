@extends("template.navbar")

@section('title')
Add Anime
@endsection

@section('content')

<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('anime.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 text-white">
            <label for="anime_name" class="form-label">Anime Name</label>
            <input type="text" class="form-control" id="anime_name" name="anime_name" value="{{ old('anime_name') }}">
        </div>
        <div class="mb-3 text-white">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" value="{{ old('release_date') }}">
        </div>
        <div class="mb-3 text-white">
            <label for="views">Views</label>
            <input type="number" class="form-control" id="views" name="views" value="{{ old('views') }}">
        </div>
        <div class="mb-3 text-white">
            <label for="mal_score">MAL Score</label>
            <input type="number" step="0.01" class="form-control" id="mal_score" name="mal_score" value="{{ old('mal_score') }}">
        </div>
        <div class="mb-3 text-white">
            <label for="synopsis">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis">{{ old('synopsis') }}</textarea>
        </div>
        <div class="mb-3 text-white">
            <label for="trailer_url">Trailer URL</label>
            <input type="url" class="form-control" id="trailer_url" name="trailer_url" value="{{ old('trailer_url') }}">
        </div>
        <div class="mb-3 text-white">
            <label for="anime_image">Image</label>
            <input type="file" class="form-control" id="anime_image" name="anime_image">
        </div>
        <div class="mb-3 text-white">
            <label for="total_episodes">Total Episodes</label>
            <input type="number" class="form-control" id="total_episodes" name="total_episodes" value="{{ old('total_episodes') }}">
        </div>
        <div class="mb-3 text-white">
            <label for="studio_id" class="form-label">Studio</label>
            <select id="studio_id" name="studio_id" class="form-select bg-white">
                <option value="" disabled {{ old('studio_id') ? '' : 'selected' }}>Select a Studio</option>
                @foreach($studios as $studio)
                    <option value="{{ $studio->id }}" {{ old('studio_id') == $studio->id ? 'selected' : '' }}>{{ $studio->studio_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 text-white">
            <label for="season_id" class="form-label">Season</label>
            <select id="season_id" name="season_id" class="form-select bg-white">
                <option value="" disabled {{ old('season_id') ? '' : 'selected' }}>Select a Season</option>
                @foreach($seasons as $season)
                    <option value="{{ $season->id }}" {{ old('season_id') == $season->id ? 'selected' : '' }}>{{ $season->season_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 text-white">
            <label class="form-label">Genres</label>
            <div class="flex flex-col h-60 overflow-scroll overflow-x-hidden">
                @foreach($genres as $genre)
                    <div class="mr-[6px] mb-[12px] gap-1 flex items-center">
                        <input type="checkbox" id="genre_{{ $genre->id }}" name="genres[]" value="{{ $genre->id }}" class="form-checkbox h-5 w-5 text-yellow-200" {{ collect(old('genres'))->contains($genre->id) ? 'checked' : '' }}>
                        <label for="genre_{{ $genre->id }}" class"">{{ $genre->genre_name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection


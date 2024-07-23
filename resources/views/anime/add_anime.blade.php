@extends("template.navbar")

@section('title')
Add Anime
@endsection

@section('content')

<div>
    <form action="{{ route('anime.store') }}" method="POST">
        @csrf
        <div class="mb-3 text-white">
            <label for="anime_name" class="form-label">Anime Name</label>
            <input type="text" class="form-control" id="anime_name" name="anime_name" required>
        </div>
        <div class="mb-3 text-white">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" required>
        </div>
        <div class="mb-3 text-white">
            <label for="views">Views</label>
            <input type="number" class="form-control" id="views" name="views" required>
        </div>
        <div class="mb-3 text-white">
            <label for="mal_score">MAL Score</label>
            <input type="number" step="0.1" class="form-control" id="mal_score" name="mal_score" required>
        </div>
        <div class="mb-3 text-white">
            <label for="synopsis">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" required></textarea>
        </div>
        <div class="mb-3 text-white">
            <label for="trailer_url">Trailer URL</label>
            <input type="url" class="form-control" id="trailer_url" name="trailer_url" required>
        </div>
        <div class="mb-3 text-white">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3 text-white">
            <label for="total_episodes">Total Episodes</label>
            <input type="number" class="form-control" id="total_episodes" name="total_episodes" required>
        </div>
        <div class="mb-3 text-white">
            <label for="studio_id" class="form-label">Studio</label>
            <select id="studio_id" name="studio_id" class="form-select bg-white" required>
                <option value="" disabled selected>Select a Studio</option>
                @foreach($studios as $studio)
                    <option value="{{ $studio->id }}">{{ $studio->studio_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 text-white">
            <label for="season_id" class="form-label">Season</label>
            <select id="season_id" name="season_id" class="form-select bg-white" required>
                <option value="" disabled selected>Select a Season</option>
                @foreach($seasons as $season)
                    <option value="{{ $season->id }}">{{ $season->season_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 text-white">
            <label for="genres" class="form-label">Genres</label>
            <select multiple id="genres" name="genres[]" class="form-select" required>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->genre_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection


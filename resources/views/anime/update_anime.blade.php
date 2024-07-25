@extends('template.navbar')

@section('title')
  Update Anime - {{ $anime->anime_name }}
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
    <form action="{{ route('anime.update', $anime->id) }}" method="POST" enctype="multipart/form-data">
      @csrf

      {{-- Anime Name --}}
      <div class="mb-3 text-white">
        <label for="anime_name" class="form-label">Anime Name</label>
        <input type="text" class="form-control" id="anime_name" name="anime_name" value="{{ $anime->anime_name }}">
      </div>

      {{-- Release Date --}}
      <div class="mb-3 text-white">
        <label for="release_date" class="form-label">Release Date</label>
        <input type="date" class="form-control" id="release_date" name="release_date"
          value="{{ $anime->release_date }}">
      </div>

      {{-- Views --}}
      <div class="mb-3 text-white">
        <label for="views">Views</label>
        <input type="number" class="form-control" id="views" name="views" value="{{ $anime->views }}">
      </div>

        {{-- Mal Score --}}
      <div class="mb-3 text-white">
        <label for="mal_score">MAL Score</label>
        <input type="number" step="0.01" class="form-control" id="mal_score" name="mal_score"
          value="{{ $anime->mal_score }}">
      </div>

        {{-- Synopsis --}}
      <div class="mb-3 text-white">
        <label for="synopsis">Synopsis</label>
        <textarea class="form-control" id="synopsis" name="synopsis">{{ $anime->synopsis }}</textarea>
      </div>

        {{-- Trailer URL --}}
      <div class="mb-3 text-white">
        <label for="trailer_url">Trailer Url</label>
        <input type="url" class="form-control" id="trailer_url" name="trailer_url"
          value="{{ 'https://www.youtube.com/watch?v=' . $anime->trailer_url }}">
      </div>

            {{-- Image --}}
      <div class="mb-3 text-white">
        <label for="anime_image">Image</label>
        <input type="file" class="form-control" id="anime_image" name="anime_image">
      </div>


      <div class="mb-3 text-white">
        <label for="total_episodes">Total Episodes</label>
        <input type="number" class="form-control" id="total_episodes" name="total_episodes"
          value="{{ $anime->total_episodes }}">
      </div>

      {{-- Studio --}}
      <div class="mb-3 text-white">
        <label for="studio_id" class="form-label">Studio</label>
        <select id="studio_id" name="studio_id" class="form-select bg-white">
          <option value="" disabled>Select a Studio</option>
          @foreach ($studios as $studio)
            <option value="{{ $studio->id }}" {{ $anime->studio_id == $studio->id ? 'selected' : '' }}>
              {{ $studio->studio_name }}
            </option>
          @endforeach
        </select>
      </div>

      {{-- Season --}}
      <div class="mb-3 text-white">
        <label for="season_id" class="form-label">Season</label>
        <select id="season_id" name="season_id" class="form-select bg-white">
          <option value="" disabled>Select a Season</option>
          @foreach ($seasons as $season)
            <option value="{{ $season->id }}" {{ $anime->season_id == $season->id ? 'selected' : '' }}>
              {{ $season->season_name }}
            </option>
          @endforeach
        </select>
      </div>

        {{-- Genres --}}
      <div class="mb-3 text-white">
        <label for="genre_id" class="form-label">Genre</label>
        <div class="flex flex-col h-60 overflow-scroll overflow-x-hidden">
          @foreach ($genres as $genre)
            <div class="mr-[6px] mb-[12px] gap-1 flex items-center">
              <input type="checkbox" id="genre_{{ $genre->id }}" name="genres[]" value="{{ $genre->id }}"
                class="form-checkbox h-5 w-5 text-white" {{ $anime->genres->contains($genre->id) ? 'checked' : '' }}>
              <label for="genre_{{ $genre->id }}" class="text-white">{{ $genre->genre_name }}</label>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Character Section --}}
      <div class="mb-3 text-white">
        <label for="character">Characters</label>
        <div id="characters-container">
          @foreach ($anime->characters as $index => $character)
            <div class="character-entry" id="character-entry-{{ $index }}">
              <div class="flex flex-row justify-evenly">
                <input type="hidden" class="text-black" name="characters[{{ $index }}][id]" value="{{ $character['id'] ?? '' }}">
                <div class="mb-3">
                  <label for="character_image_{{ $index }}" class="form-label">Character Image URL</label>
                  <input type="text" id="character_image_{{ $index }}"
                    name="characters[{{ $index }}][character_image]" class="form-control"
                    value="{{ $character['character_image'] ?? '' }}">
                </div>
                <div class="mb-3">
                  <label for="character_name_{{ $index }}" class="form-label">Character Name</label>
                  <input type="text" id="character_name_{{ $index }}"
                    name="characters[{{ $index }}][character_name]" class="form-control"
                    value="{{ $character['character_name'] ?? '' }}">
                </div>
                <div class="mb-3">
                  <label class="form-label">Voice Actors</label>
                  <div class="flex flex-col h-2">
                    <select id="voice_actor_id_{{ $index }}"
                      name="characters[{{ $index }}][voice_actor]" class="form-select bg-white">
                      <option value="" disabled {{ isset($character['voice_actor']) ? '' : 'selected' }}>Select a
                        Voice Actor</option>
                      @foreach ($voice_actors as $voiceActor)
                        <option value="{{ $voiceActor->id }}"
                          {{ isset($character['voice_actor_id']) && $character['voice_actor_id'] == $voiceActor->id ? 'selected' : '' }}>
                          {{ $voiceActor->voice_actor_name }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="mb-3">
                  <button type="button" class="btn btn-danger remove-character"
                    data-index="{{ $index }}">Remove</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <button type="button" id="add-character" class="btn btn-secondary">Add Character</button>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>

  <script>
    let characterIndex = {{ count($anime->characters) }};

    document.getElementById('add-character').addEventListener('click', function() {
      characterIndex++;

      const container = document.createElement('div');
      container.classList.add('character-entry');
      container.id = `character-entry-${characterIndex}`;

      container.innerHTML = `
    <div class="flex flex-row justify-evenly">
      <div class="mb-3">
        <label for="character_image_${characterIndex}" class="form-label">Character Image URL</label>
        <input type="text" id="character_image_${characterIndex}" name="characters[${characterIndex - 1}][character_image]" class="form-control">
      </div>
      <div class="mb-3">
        <label for="character_name_${characterIndex}" class="form-label">Character Name</label>
        <input type="text" id="character_name_${characterIndex}" name="characters[${characterIndex - 1}][character_name]" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Voice Actors</label>
        <div class="flex flex-col h-2">
          <select id="voice_actor_id_${characterIndex}" name="characters[${characterIndex - 1}][voice_actor]" class="form-select bg-white">
            <option value="" disabled selected>Select a Voice Actor</option>
            @foreach ($voice_actors as $voiceActor)
              <option value="{{ $voiceActor->id }}">{{ $voiceActor->voice_actor_name }}</option>
            @endforeach
          </select>
        </div>
      </div>
        <div class="mb-3">
            <button type="button" class="btn btn-danger remove-character" data-index="${characterIndex}">Remove</button>
        </div>
    </div>
    `;

      document.getElementById('characters-container').appendChild(container);
    });

    document.addEventListener('click', function(event) {
      if (event.target.classList.contains('remove-character')) {
        const index = event.target.getAttribute('data-index');
        document.getElementById(`character-entry-${index}`).remove();
      }
    });
  </script>

@endsection

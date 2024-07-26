@extends('template.navbar')

@section('title')
Update Anime - {{ $anime->anime_name }}
@endsection

@section('content')
<div class="title-section text-white bg-grayMid px-[12px] py-[5px] text-[18px] border-b-[1px] border-borderLight">
  Update {{$anime->anime_name}}
</div>

@if ($errors->any())
<div class="alert alert-danger">
  <ul class="list-disc list-inside">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div
  class="container bg-customBlack max-w-full border-[1px] border-border px-[15px] py-[10px] flex w-full flex-col gap-[10px]">

  <div class="container flex gap-[20px] p-0">
    <div class="left flex-1 flex flex-col gap-[10px]">
      <div class="text-lightFont flex flex-col">
        <label for="anime_name" class="form-label m-0">Anime Name</label>
        <input class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm" type="text" class="form-control"
          id="anime_name" name="anime_name" value="{{ $anime->anime_name }}">
      </div>
      <div class="text-lightFont flex flex-col">
        <label for="views" class="form-label m-0">Views</label>
        <input class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm" type="number" class="form-control"
          id="views" name="views" value="{{ $anime->views }}">
      </div>
      <div class="text-lightFont flex flex-col">
        <label for="synopsis">Synopsis</label>
        <textarea class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm h-[100px]" id="synopsis"
          name="synopsis">{{ $anime->synopsis }}</textarea>
      </div>
      <div class="text-lightFont flex flex-col">
        <label for="total_episodes" class="form-label m-0">Total Episodes</label>
        <input class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm" type="number" class="form-control"
          id="total_episodes" name="total_episodes" value="{{ $anime->total_episodes }}">
      </div>
      <div class="text-lightFont flex flex-col">
        <label for="studio_id" class="form-label m-0">Studio</label>
        <select id="studio_id" name="studio_id" class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm">
          <option value="" disabled>Select a Studio</option>
          @foreach ($studios as $studio)
          <option value="{{ $studio->id }}" {{ $anime->studio_id == $studio->id ? 'selected' : '' }}>
            {{ $studio->studio_name }}
          </option>
          @endforeach
        </select>
      </div>
      <div class="text-lightFont flex flex-col">
        <label for="season_id" class="form-label m-0">Season</label>
        <select id="season_id" name="season_id" class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm">
          <option value="" disabled>Select a Season</option>
          @foreach ($seasons as $season)
          <option value="{{ $season->id }}" {{ $anime->season_id == $season->id ? 'selected' : '' }}>
            {{ $season->season_name }}
          </option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="right flex-1 flex flex-col gap-[10px]">
      <div class="text-lightFont flex flex-col">
        <label for="release_date" class="form-label m-0">Release Date</label>
        <input class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm" type="text" class="form-control"
          id="release_date" name="release_date" value="{{ $anime->release_date }}">
      </div>
      <div class="text-lightFont flex flex-col">
        <label for="mal_score" class="form-label m-0">MAL Score</label>
        <input class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm" type="number" class="form-control"
          id="mal_score" name="mal_score" value="{{ $anime->mal_score }}">
      </div>
      <div class="text-lightFont flex flex-col">
        <label for="trailer_url" class="form-label m-0">Trailer URL</label>
        <input class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm" type="text" class="form-control"
          id="trailer_url" name="trailer_url" value="{{ $anime->trailer_url }}">
      </div>
      <div class="text-lightFont flex flex-col">
        <label for="anime_image">Image</label>
        <input class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm" type="file" class="form-control"
          id="anime_image" name="anime_image" onchange="previewImage(event)">
        <img class="w-[130px] border-[1px] border-border mt-[8px]" src={{ Storage::url($anime->image_url)}}
        id="image-preview">
      </div>
    </div>
  </div>

  <div class="text-lightFont flex flex-col">
    <label for="genre_id" class="form-label m-0">Genre</label>
    <div class="flex flex-col">
      <div class="item-container grid grid-cols-3 gap-[10px] p-[15px] bg-grayDark rounded-sm">
        @foreach ($genres as $genre)
        <div class="mr-[6px] gap-1 flex items-center">
          <input type="checkbox" id="genre_{{ $genre->id }}" name="genres[]" value="{{ $genre->id }}"
            class="form-checkbox h-5 w-5 text-white" {{ $anime->genres->contains($genre->id) ? 'checked' : '' }}>
          <label for="genre_{{ $genre->id }}" class="text-white">{{ $genre->genre_name }}</label>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="text-lightFont flex flex-col">
    <label class="m-0" for="character">Characters</label>
    <div class="outer-container bg-grayDark p-[15px] rounded-sm flex flex-col gap-[10px]">
      <div id="characters-container" class="flex flex-col gap-[10px]">
        @foreach ($anime->characters as $index => $character)
        <div class="character-entry" id="character-entry-{{ $index }}">
          <div class="flex flex-row gap-[20px]">
            <input type="hidden" class="text-black" name="characters[{{ $index }}][id]"
              value="{{ $character['id'] ?? '' }}">
            <div class="flex-1">
              <label for="character_image_{{ $index }}" class="form-label m-0">Character Image URL</label>
              <input type="text" id="character_image_{{ $index }}" name="characters[{{ $index }}][character_image]"
                class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm w-full"
                value="{{ $character['character_image'] ?? '' }}">
            </div>
            <div class="flex-1">
              <label for="character_name_{{ $index }}" class="form-label m-0">Character Name</label>
              <input type="text" id="character_name_{{ $index }}" name="characters[{{ $index }}][character_name]"
                class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm w-full"
                value="{{ $character['character_name'] ?? '' }}">
            </div>
            <div class="flex-1">
              <label class="form-label m-0">Voice Actors</label>
              <div class="flex flex-col h-2">
                <select id="voice_actor_id_{{ $index }}" name="characters[{{ $index }}][voice_actor]"
                  class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm w-full">
                  <option value="" disabled {{ isset($character['voice_actor']) ? '' : 'selected' }}>Select a
                    Voice Actor</option>
                  @foreach ($voice_actors as $voiceActor)
                  <option value="{{ $voiceActor->id }}" {{ isset($character['voice_actor_id']) &&
                    $character['voice_actor_id']==$voiceActor->id ? 'selected' : '' }}>
                    {{ $voiceActor->voice_actor_name }}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="flex items-end">
              <button type="button" class="btn btn-danger remove-character h-[31.5px] flex items-center rounded-sm"
                data-index="{{ $index }}">Remove</button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <button type="button" id="add-character"
        class="btn btn-secondary h-[31.5px] flex items-center rounded-sm justify-center mt-[5px]">Add
        Character</button>
    </div>
    <button class="text-white bg-customBlue h-[40px] rounded-sm mt-[20px]" type="submit">Update</button>
  </div>
</div>

<script>
  function previewImage(e){
    const file = e.target.files[0]
    const reader = new FileReader()

    reader.onload = function() {
      const preview = document.getElementById("image-preview")
      preview.src = reader.result
    }

    if(file){
      reader.readAsDataURL(file)
    }
  }

  let characterIndex = {{ count($anime->characters) }};

    document.getElementById('add-character').addEventListener('click', function() {
      characterIndex++;

      const container = document.createElement('div');
      container.classList.add('character-entry');
      container.id = `character-entry-${characterIndex}`;

      container.innerHTML = `
      <div class="flex flex-row gap-[20px]">
        <div class="flex-1">
          <label for="character_image_${characterIndex}" class="form-label m-0">Character Image URL</label>
          <input type="text" id="character_image_${characterIndex}" name="characters[${characterIndex - 1}][character_image]"
            class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm w-full">
        </div>
        <div class="flex-1">
          <label for="character_name_${characterIndex}" class="form-label m-0">Character Name</label>
          <input type="text" id="character_name_${characterIndex}" name="characters[${characterIndex - 1}][character_name]"
            class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm w-full">
        </div>
        <div class="flex-1">
          <label class="form-label m-0">Voice Actors</label>
          <div class="flex flex-col h-2">
            <select id="voice_actor_id_${characterIndex}" name="characters[${characterIndex - 1}][voice_actor]" class="bg-grayLight text-white py-[5px] px-[10px] rounded-sm w-full">
            <option value="" disabled selected>Select a Voice Actor</option>
            @foreach ($voice_actors as $voiceActor)
              <option value="{{ $voiceActor->id }}">{{ $voiceActor->voice_actor_name }}</option>
            @endforeach
          </select>
          </div>
        </div>
        <div class="flex items-end">
          <button type="button" class="btn btn-danger remove-character h-[31.5px] flex items-center rounded-sm"
            data-index="${characterIndex}">Remove</button>
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
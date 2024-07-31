@extends('template.navbar')

@section('title')
  {{ $voice_actor->voice_actor_name }} - Voice Actor
@endsection

@section('content')
  <div class="title-section text-white bg-grayMid px-[12px] py-[5px] text-[18px] border-b-[1px] border-borderLight">
    {{ $voice_actor->voice_actor_name }}
  </div>

  <div class="container bg-customBlack max-w-full border-[1px] border-border px-[15px] py-[10px] flex w-full">
    <div class="left-section pr-[5px] h-full flex flex-col max-w-[250px]">
      <img src="{{ $voice_actor->voice_actor_image }}" class="w-[250px] mb-[10px]">
    </div>
    <div class="right-section flex-1 flex flex-col gap-[15px] pl-[5px] border-l-[1px] border-border">
      <div class="character-section">
        <div class="title text-white border-b-[1px] border-borderLight font-bold text-[16px]">Voice Acting Roles</div>
        <div class="content">
          @foreach ($voice_actor->characters as $character)
            <div class="content flex w-full gap-[10px] pt-[5px] pb-[5px] border-b-[1px] border-border justify-between">
              <div class="flex gap-[10px] pt-[5px] pb-[5px]">
                <div class="left">
                  <img src="{{ $character->character_image }}" alt="" class="h-[100px]">
                </div>
                <div class="right flex-1 flex flex-col gap-[5px]">
                  <p class="text-white">
                    {{ $character->character_name }}
                  </p>
                </div>
              </div>
              <div class="flex gap-[10px] pt-[5px] pb-[5px]">
                <div class="right flex-1 flex flex-col gap-[5px]">
                  <p class="text-customBlueLight hover:underline leading-5">
                    <a href="{{ route('anime.show', $character->anime->id) }}">
                      {{ $character->anime->anime_name }}
                    </a>
                  </p>
                </div>
                <div class="left">
                  <img src="{{ Storage::url($character->anime->image_url) }}" alt="" class="h-[100px]">
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="bg-white">
  <img src={{$voice_actor->voice_actor_image}} alt="">
  <p>{{$voice_actor->voice_actor_name}}</p>
  @foreach ($voice_actor->characters as $chara)
  {{$chara->character_name}}
  <img src="{{$chara->character_image}}" alt="">
  @endforeach
</div> --}}
@endsection

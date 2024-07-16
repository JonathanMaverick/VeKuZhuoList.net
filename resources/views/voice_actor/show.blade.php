@extends('template.navbar')

@section('title')
    {{ $voice_actor->voice_actor_name }} - Voice Actor
@endsection

@section('content')

    <div class="bg-white">
        <img src={{$voice_actor->voice_actor_image}} alt="">
        <p>{{$voice_actor->voice_actor_name}}</p>
        @foreach ($voice_actor->characters as $chara)
            {{$chara->character_name}}
            <img src="{{$chara->character_image}}" alt="">
        @endforeach
    </div>

@endsection

@extends('layouts.app')

@section('content')
<main>
<div id="comics">

    <div class="container">

        <h2 class="text-white fw-bold">
            Current Series
        </h2>
    
        <div id="comics-list">

            @foreach ($comics as $currentComic)
            <div class="comic">
                
                <a href="{{ route('comics.show', $currentComic->id) }}">
                    <img src="{{ $currentComic['thumb'] }}" alt="{{ $currentComic->title }}" class="comic-cover">
                </a>
            
                <span class="comic-title">
                    {{ $currentComic['title'] }}
                </span>
            
            </div>
            @endforeach
        </div>

        <div class="btn-container">
            <a href="{{route('comics.create')}}" class="btn btn-primary rounded-0">Aggiungi fumetto</a>
        </div>
    </div>

</div>

</main>

@endsection
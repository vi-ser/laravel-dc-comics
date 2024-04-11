@extends('layouts.app')

@section('content')
<div id="comics">

    <div class="container">

        <h2 class="text-white fw-bold">
            Current Series
        </h2>
    
        <div id="comics-list">

            @foreach ($comics as $currentComic)
            <div class="comic">

                <img src="{{ $currentComic['thumb'] }}" alt="Action Comics" class="comic-cover">
            
                <span class="comic-title">
                    {{ $currentComic['series'] }}
                </span>
            
            </div>
            @endforeach
        </div>

        <div class="btn-container">
            <button class="btn btn-primary rounded-0">Load more</button>
        </div>
    </div>

</div>


</main>

@endsection
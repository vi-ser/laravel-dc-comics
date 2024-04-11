@extends('layouts.app')

@section('content')
<div id="comics">

    <div class="container">

        <h2 class="text-white fw-bold">
            Comic
        </h2>
    
        <div id="comics" class="d-flex gap-5 text-white pb-5">

            <img src="{{ $comic->thumb }}" alt="Action Comics" class="comic-cover" style="height: 300px">
            <div class="data-sheet">
                <h3 class="comic-title">
                    {{ $comic->title }}
                </h3>
                
                <span>
                    {{ $comic->series }}
                </span>
                <br>
                <span>
                    {{ $comic->price }}
                </span>
                <p class="mt-3">
                    {{ $comic->description }}
                </p>
                <br>
              
                <div class="team d-flex gap-5">
                    <div class="team">
                        <strong>Artists</strong>
                        <br>
                        <ul class="list-unstyled">
                            @php
                                $artists = json_decode($comic->artists);
                            @endphp
                            @foreach ($artists as $artist)
                                <li>{{ $artist }}</li>
                            @endforeach
                        </ul>
                    </div>
                   
                    <div class="team">
                        <strong>Writers</strong>
                        <br>
                        <ul class="list-unstyled">
                            @php
                                $writers = json_decode($comic->writers);
                            @endphp
                            @foreach ($writers as $writer)
                                <li>{{ $writer }}</li>
                           @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


</main>

@endsection
@extends('layouts.app')

@section('content')

<div id="comics">

    <div class="container">

        <h2 class="text-white fw-bold">
            Modifica fumetto
        </h2>

        <form action="{{route('comics.update', $comic->id)}}" method="POST" class="text-white p-5">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" value="{{ $comic->title }}" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label">Percorso immagine</label>
              <input type="text" class="form-control" id="thumb" value="{{ $comic->thumb }}" name="thumb">
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Prezzo</label>
              <input type="text" class="form-control" id="price" value="{{ $comic->price }}" name="price">
            </div>
            <div class="mb-3">
              <label for="series" class="form-label">Serie</label>
              <input type="text" class="form-control" id="series"  value="{{ $comic->series }}" name="series">
            </div>
            <div class="mb-3">
              <label for="sale_date" class="form-label">Data di vendita</label>
              <input type="date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" value="{{ $comic->type }}" name="type">
              </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" class="form-control" id="artists" value="{{ $comic->artists }}" name="artists">
              </div>
              <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" class="form-control" id="writers" value="{{ $comic->writers }}" name="writers">
              </div>
            <button type="submit" class="btn btn-primary mt-3">Salva</button>
          </form>
    
       
    </div>

</div>
@endsection
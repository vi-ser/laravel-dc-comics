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
                <div class="pb-5 d-flex align-items-center gap-3">
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a><br><br>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Elimina
                    </button>
                </div>
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
                <strong>Artists</strong>
                <br>
                <p>
                    {{ $comic->artists }}
                </p>
                <br>
                <strong>Writers</strong>
                <br>
                <p>
                    {{ $comic->writers }}
                </p>

            </div>

        </div>

    </div>

</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina fumetto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          Sei sicuro che vuoi eliminare il fumetto "{{$comic->title}}"?
        </div>

        <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method("DELETE")
                
                <button class="btn btn-danger">Elimina</button>
            </form>

        </div>

      </div>
    </div>
</div>

</main>

@endsection
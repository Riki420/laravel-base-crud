@extends('layouts.main')
@section('title', 'Home')
@section('content')
<section>
    <h1 class="text-center dc-text">Modifica Fumetto</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @method('PATCH')
        @csrf
        <div class="col-form">
            <label for="title" class="form-label">Inserisci titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>

        <div class="col-form">
            <label for="thumb" class="form-label">Inserisci url immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div class="col-form">
            <label for="description" class="form-label">Inserisci una descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
        </div>

        <div class=" col-form">
            <label for="series" class="form-label">Inserisci il nome della serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>

        <div class="col-form">
            <label for="type" class="form-label">Inserisci il tipo di fumetto</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>

        <div class="col-form">
            <label for="sale_date" class="form-label">Inserisci il giorno di uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div class="col-form">
            <label for="price" class="form-label">Inserisci il prezzo</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>
        <div>
            <button type="submit" class="btn-add">Modifica</button>
            <button type="reset" class="btn-remove">Reset</button>
        </div>

    </form>
</section>
@endsection
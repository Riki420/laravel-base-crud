@extends('layouts.form')
@section('title', 'Edit')
@section('content')
<section id="formSection mt-2">
    <h1 class="text-center dc-text">Modifica Fumetto</h1>
    <hr class="mt-2">
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @method('PATCH')
        @csrf
        <div class="col-form">

            <label for="title" class="form-label dc-text">Inserisci titolo</label>
            <input type="text" class="form-control mt-2" id="title" name="title" value="{{ $comic->title }}">

        </div>
        <div class="col-form">

            <label for="series" class="form-label dc-text mt-2">Inserisci il nome della serie</label>
            <input type="text" class="form-control mt-2" id="series" name="series" value="{{ $comic->series }}">
        </div>

        <div class="col-form">
            <label for="thumb" class="form-label dc-text mt-2">Inserisci url immagine</label>
            <input type="text" class="form-control mt-2" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div class="col-form">
            <label for="description" class="form-label dc-text mt-2">Inserisci una descrizione</label>
            <textarea type="text" class="form-control mt-2" id="description" name="description">{{ $comic->description }}</textarea>
        </div>


        <div class="col-form">
            <label for="type" class="form-label dc-text mt-2">Inserisci il tipo di fumetto</label>
            <input type="text" class="form-control mt-2" id="type" name="type" value="{{ $comic->type }}">
        </div>

        <div class="col-form">
            <label for="sale_date" class="form-label dc-text mt-2">Inserisci il giorno di uscita</label>
            <input type="date" class="form-control mt-2" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div class="col-form">
            <label for="price" class="form-label dc-text mt-2">Inserisci il prezzo</label>
            <input type="number" class="form-control mt-2" id="price" name="price" value="{{ $comic->price }}">
        </div>
        <div class="p-2">
            <button type="submit" class="btn-add"><i class="fas fa-pencil-alt"></i></button>
            <button type="reset" class="btn-reset"><i class="fas fa-redo"></i></button>
        </div>

    </form>
</section>
@endsection
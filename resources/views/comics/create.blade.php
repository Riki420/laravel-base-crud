@extends('layouts.main')
@section('title', 'Home')
@section('content')
<section>
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title" class="form-label">Inserisci titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div>
            <label for="thumb" class="form-label">Inserisci url immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div>
            <label for="description" class="form-label">Inserisci una descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
        </div>

        <div>
            <label for="series" class="form-label">Inserisci il nome della serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div>
            <label for="type" class="form-label">Inserisci il tipo di fumetto</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>

        <div>
            <label for="sale_date" class="form-label">Inserisci il giorno di uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div>
            <label for="price" class="form-label">Inserisci il prezzo</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>

        <button type="submit" class="btn-add">Aggiungi</button>
        <button type="reset" class="btn-remove">Reset</button>

    </form>
</section>
@endsection
@extends('layouts.main')
@section('title', 'Comics')

@section('content')
<div id="products" class="z-1">
    <div class="jumbotron"></div>
    <div class="container">
        <span class="current pb-2">CURRENT SERIES</span>
        <a href="{{ route('comics.create') }}" class="btn-add"><i class="fas fa-plus"></i></a>

        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-3 py-2 d-flex-j-center">
                <div class="prd-card mt-2">
                    <div class="d-flex">
                        <a class="edit-comics w-100 text-center" href="{{route('comics.edit', $comic->id)}}"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <div>
                            <figure>
                                <img src="{{ $comic->thumb }}" alt="Poster Fumetto">

                            </figure>
                        </div>
                    </a>
                    <h6>{{ $comic->title }}</h6>
                    <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete dc-text w-100"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </div>
            @endforeach
            <div class="col-full py-2">
                <div class="d-flex-j-center">
                    <button type="button" id="loadMore" name="loadMore" class="loadMoreBtn">Load More...</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.dcicon')
@endsection
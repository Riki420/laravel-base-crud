@extends('layouts.main')
@section('title', 'Comics')

@section('content')
<div id="products" class="z-1">
    <div class="jumbotron"></div>
    <div class="container">
        <span class="current">CURRENT SERIES</span>
        <a href="{{ route('comics.create') }}" class="btn-add">Add Comics</a>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-3 py-2 d-flex-j-center">
                <div class="prd-card mt-2">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <div class="position-relative">
                            <figure>
                                <img src="{{ $comic->thumb }}" alt="Poster Fumetto">

                            </figure>
                            <a class="edit-comics" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                        </div>

                    </a>
                    <h6>{{ $comic->title }}</h6>
                </div>
            </div>
            @endforeach
            <div class="col-full py-2">
                <div class="me-auto">
                    <button type="button" id="loadMore" name="loadMore" class="loadMoreBtn">Load More...</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.dcicon')
@endsection
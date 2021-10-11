@extends('layouts.main')
@section('title', 'Comics')

@section('content')
      <div id="products" class="z-1">
          <div class="jumbotron"></div>
        <div class="container w-75">
            <div class="row">
                <span class="current">CURRENT SERIES</span>

                <div class="col-card py-2 d-flex-j-center">
                             <div class="prd-card mt-2">
                                <a href="">                  
                                    <img src="" alt="Poster Fumetto">
                                </a>
                                <h6>Titolo Fumetto</h6>
                             </div>
                </div>
                <div class="col me-auto py-2">
                    <button type="button" id="loadMore" name="loadMore" class="loadMoreBtn">Load More...</button>
                </div>
            </div>
        </div>
    </div>
@endsection
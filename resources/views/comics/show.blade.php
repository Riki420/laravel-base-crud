@extends('layouts.main')
@section('title','Comic Detail')


@section('content')
<div class="jumbotron"></div>
<div class="bg-dc"></div>
<div class="container">
    <!--COMIC IMG-->
    <div class="comic-card-img">
        <div class="comic-book">
            Comic Book
        </div>
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="border-white">
        <div class="view-gallery">
            View Gallery
        </div>
    </div>
    <div id="detail-section">

        <div class="row">
            <!--COMIC INFO-->
            <div class="col-8 p-2">
                <h1 class="dc-text mb-2 uppercase">{{ $comic->title }}</h1>
                <div class="wrapper mb-2">
                    <div class="col-8 bg-g br-r wrapper-between p-2">
                        <strong>U.S. Price: <span class="text-white">{{ $comic->price }}</span></strong>
                        <div class="text-right">
                            Available
                        </div>
                    </div>
                    <div class="col-2 bg-g p-2 text-white">
                        Check Availability
                    </div>
                </div>
                <p>
                    {{$comic->description}}
                </p>

            </div>
            <!--COMIC ADV-->
            <div class="col-2 p-2">
                <div class="adv d-flex-wrap-col">
                    <div class="text-right">
                        ADVERTISEMENT
                    </div>
                    <div>
                        <figure>
                            <img src="../../images/adv.jpg" alt="">
                        </figure>
                    </div>
                </div>

            </div>
        </div>
        <!--COMIC DETAIL-->
        <div class="wrapper mt-2">
            <div class="col-6 br-r">
                <h3 class="dc-text p-2">Talent</h3>
                <hr>
                <div class="list-detail">
                    <h5>Art by:</h5>
                </div>
                <div class="list-detail">
                    <h5>Written By:
                    </h5>
                </div>
                <div class="list-detail">
                    <h5 class="capitalize">Type: {{ $comic->type }}</h5>
                </div>
            </div>
            <div class="col-6">
                <h3 class="dc-text p-2">Specs</h3>
                <hr>
                <div class="list-detail">
                    <h5>Series: <a href="#">{{$comic->series}}</a></h5>
                </div>
                <div class="list-detail">
                    <h5>U.S. Price: {{$comic->price}}</h5>
                </div>
                <div class="list-detail">
                    <h5>Sale date: {{$comic->sale_date}}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex-i-center py-2">
        <div class="col-6">
            <a class="edit-comics" href="{{route('comics.edit', $comic->id)}}"><i class="fas fa-pencil-alt"></i></a>
        </div>
        <div class="col-6">
            <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete dc-text"><i class="fas fa-trash"></i></button>
            </form>
        </div>
    </div>

</div>
</div>
@endsection
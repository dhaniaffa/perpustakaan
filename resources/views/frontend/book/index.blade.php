@extends('frontend.templates.default')

@section('content')
    <h3>Koleksi Buku</h3>
    <blockquote>
        <p class="flow-text">Berikut Merupakan Koleksi Buku Perpustakaan<Strong>KITA</Strong></p>
    </blockquote>

    <div class="row">
        @foreach($books as $book)
            <div class="col s12 m6">
                <div class="card horizontal">
                    <a href="{{route('book.show', $book)}}">
                        <img src="{{$book->getCover()}}" style="width: 100px" height="155px">
                    </a>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h6><a href="{{route('book.show', $book)}}">{{Str::limit($book->title, 25)}}</a></h6>
                        </div>
                        <div class="card-action">
                            <a href="{{route('book.show', $book)}}" class="btn left red accent-1 waves-effect waves-light">Selengkapnya..</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container" style="margin-bottom: 50px">
        {{$books->links('vendor.pagination.materialize')}}
    </div>


@endsection

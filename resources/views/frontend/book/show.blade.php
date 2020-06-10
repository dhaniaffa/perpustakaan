@extends('frontend.templates.default')

@section('content')
    <div class="col s12 m12" style="margin-top: 50px">
        <div class="card horizontal hoverable">
            <div class="card-stacked">
                <div class="card-content">
                    <h4 class="pink-text accent-2" style="text-align: center; margin-bottom: 30px">{{$book->title}}</h4>
                    <img src="{{$book->getCover()}}" style="display: block; margin-left: auto; margin-right: auto; margin-bottom: 50px; margin-top: 50px">
                    <h4>Mengenai Buku:</h4>
                    <p><b>Judul:</b> {{$book->title}}</p>
                    <p style="margin-top: 20px"><b>Deskripsi: </b></p>
                    <p>{{$book->description}}</p>
                    <p style="margin-top: 20px"><b>Penulis: </b>{{$book->author->name}}</p>
                    <p style="margin-top: 20px"><b>Jumlah Buku Yang Tersedia: </b>{{$book->qty}}</p>
                </div>
                <div class="card-action">
                    <form action="{{route('book.pinjam', $book)}}" method="post">
                        @csrf
                        <input type="submit" class="vawes-effect waves-light btn red accent-1" value="Pinjam Buku">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h4 style="margin-top: 50px">Buku Lainnya Oleh {{$book->author->name}}</h4>
    <div class="row">
        @foreach($book->author->books->shuffle()->take(2) as $book)
            <div class="col s12 m6">
                <div class="card horizontal hoverable">
                    <div class="card-image">
                        <a href="{{route('book.show', $book)}}">
                            <img src="{{$book->getCover()}}" style="height: 350px; width: 300px">
                        </a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h4><a href="{{route('book.show', $book)}}">{{Str::limit($book->title, 25)}}</a></h4>
                            <p>{{Str::limit($book->description, 50)}}</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn right accent-1 waves-effect waves-light" style="background-color: #ff80ab">Pinjam Buku</a>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

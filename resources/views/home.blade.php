@extends('frontend.templates.default')
@section('content')
    <!-- BUKU YANG SEDANG DIPINJAM -->
    <div class="row" style="margin-top: 50px;">
        <h4>Buku Yang Sedang Anda Pinjam</h4>
        <div class="card">
            <div class="card-content">
                <table class="striped">
                    @if(count($books)<1)
                        <h6>Anda Belum Meminjam Buku, Silahkan Kunjungi <a href="{{route('homepage')}}">Beranda</a></h6>
                    @else

                    <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($data as $book)
                        @if($book->returned_at == null)
                            <tr>
                                <td>{{$book->title}}</td>
                                <td>{{$book->name}}</td>
                                <td>Belum Dikembalikan</td>
                            </tr>
                        @endif
                    @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- LOG BUKU YANG TELAH DIKEMBALIKAN -->
    <div class="row" style="margin-top: 50px; margin-bottom: 100px">
        <h4>Riwayat Pengembalian Buku</h4>
        <div class="card">
            <div class="card-content">
                <table class="striped responsive-table">
                    @if(count($books)<1)
                        <h6>Anda Belum Meminjam Buku, Silahkan Kunjungi <a href="{{route('homepage')}}">Beranda</a></h6>
                    @else
                        <thead>
                        <tr>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Status</th>
                            <th>Tanggal Pengembalian</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $book)
                            @if($book->returned_at != null)
                                <tr>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->name}}</td>
                                    <td>Sudah Dikembalikan</td>
                                    <td>{{$book->returned_at}}</td>
                                </tr>
                            @endif
                        @endforeach
                        @endif
                        </tbody>
                </table>

            </div>


        </div>
    </div>

@endsection

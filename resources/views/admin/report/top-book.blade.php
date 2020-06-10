
@extends('admin.template.default')

@push('datatable')
    <!-- Datatables -->
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Laporan Buku Terlaris</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>Judul</th>
                                <th>Sampul</th>
                                <th>Jumlah</th>
                                <th>Total Peminjaman</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $page = 1;
                                if (request()->has('page')){
                                    $page = request('page');
                                }
                                $no = (10 * $page) - (10-1);
                            ?>
                            @foreach($books as $book)
                            <tr>

                                    <td>{{$no++}}</td>
                                    <td>{{$book->title}}</td>
                                    <td><img src="{{$book->getCover()}}" height="150px" alt=""></td>
                                    <td>{{$book->qty}}</td>
                                    <td>{{$book->borrowed_count}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$books->links()}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection


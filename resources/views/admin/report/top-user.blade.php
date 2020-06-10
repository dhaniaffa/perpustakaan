
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
                        <h3 class="card-title">Laporan Member Terajin</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>E-MAIL</th>
                                <th>BERGABUNG</th>
                                <th>TOTAL MEMNINJAM</th>
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
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                    <td>{{$user->borrow_count}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$users->links()}}
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


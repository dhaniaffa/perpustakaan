
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
                            <h3 class="card-title">Data Peminjaman Buku</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="dataTable" class="table table-bordered table-striped nowrap dt-responsive">
                                <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA PEMINJAM</th>
                                    <th>JUDUL BUKU</th>
                                    <th>TANGGAL PINJAM</th>
                                    <th>AKSI</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
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
<!-- SCRIPT -->
@push('scripts')
    <!-- DataTables -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>


    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <script src="{{asset('assets/plugins/bs-notify.min.js')}}"></script>
    @include('admin.template.partials.alerts')
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                "responsive": true,
                "autoWidht": false,
                ajax: '{{route('admin.borrow.data')}}',
                columns:[
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'user'},
                    {data: 'title'},
                    {data: 'date'},
                    {data: 'action'}
                ]
            });
        });

    </script>
@endpush

@push('hail')

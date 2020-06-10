@extends('frontend.templates.default')

@push('table')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.material.min.css">
@endpush

@section('content')
    <h4>SEARCH</h4>
    <div class="container center">
        <table id="example" class="mdl-data-table right" style="">
            <thead>
            <tr>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td><a href="/book/{{$book->id}}">Cari</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection

@push('search')
    <!-- DataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.material.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                autoWidth: false,
                columnDefs: [
                    {
                        targets: ['_all'],
                        className: 'mdc-data-table__cell'
                    }
                ]
            } );
        } );
    </script>
@endpush

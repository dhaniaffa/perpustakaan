@extends('admin.template.default')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Penulis</h3>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.author.store')}}" method="post">
                        @csrf


                        <div class="form-group">
                            <label for="">Nama Penulis</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Nama Penulis" value="{{old('name')}}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Tambah Data" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

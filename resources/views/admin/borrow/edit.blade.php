@extends('admin.template.default')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Penulis</h3>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.author.update', $author)}}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="">Nama Penulis</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Nama Penulis" value="{{$author->name}}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Perbarui Data" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

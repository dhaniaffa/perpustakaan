@extends('admin.template.default')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Buku</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin.book.update', $book)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label for="">Judul Buku</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan Judul Buku" value="{{$book->title ?? old('name')}}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Deskripsi Buku</label>
                                <textarea name="description" id="" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Masukan Deskripsi Buku">{{$book->description ?? old('description')}}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('author_id') is-invalid @enderror">
                                <label for="">Penulis</label>
                                <select name="author_id" id="" class="form-control select2">
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}"
                                        @if($author->id == $book->author_id)
                                            selected
                                            @endif
                                        >
                                            {{$author->name}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('author_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Sampul Buku</label>
                                <input type="file" name="cover" class="form-control-file">
                                @error('cover')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Jumlah Buku</label>
                                <input type="text" name="qty" class="form-control @error('qty') is-invalid @enderror" placeholder="Masukan Jumlah Buku" value="{{$book->qty ?? old('qty')}}">
                                @error('qty')
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

@push('select2css')
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('assets/plugins/select2/js/select2.full.js')}}"></script>
    <script>
        $('.select2').select2();
    </script>
@endpush

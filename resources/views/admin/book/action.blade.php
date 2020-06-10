<a href="{{route('admin.book.edit', $model)}}" class="btn btn-success" style="margin-bottom: 10px; padding-right: 20px; padding-left: 20px">Edit</a>

<form action="{{route('admin.book.destroy', $model)}}" method="post" style="margin-left: -10px">

    @csrf
    @method("DELETE")
    <input type="submit" value="Hapus" class="btn btn-danger" style="margin-left:10px" onclick="return confirm('Apakah anda ingin menghapus data ini?')">
</form>



<form action="{{route('admin.author.destroy', $model)}}" method="post">
    <a href="{{route('admin.author.edit', $model)}}" class="btn btn-success">Edit</a>
    @csrf
    @method("DELETE")
    <input type="submit" value="Hapus" class="btn btn-danger" style="margin-left:10px" onclick="return confirm('Apakah anda ingin menghapus data ini?')">
</form>



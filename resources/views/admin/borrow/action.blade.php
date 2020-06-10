<form action="{{route('admin.borrow.return', $model)}}" method="post">
    @csrf
    @method("PUT")
    <input type="submit" value="Pengembalian" class="btn btn-danger" onclick="return confirm('Apakah Buku Ini Akan Dikembalikan?')">
</form>



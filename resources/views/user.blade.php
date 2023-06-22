<form action="{{ url('cariuser') }}" method="get">
    <input type="search" name="cari" id="cari" value="{{ $cari }}">
    <input type="submit" value="cari">
</form>
<a href="{{ url('/user/add') }}">Tambah Data</a>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Aksi</th>
    </tr>
    @foreach ($user as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->password }}</td>
            <td>                
                <a href="user/hapus/{{ $item->id }}" onclick="return window.confirm('hapus data ini')">HAPUS</a>
                <a href="user/edit/{{ $item->id }}">EDIT</a>
            </td>
        </tr>
    @endforeach
</table>
<a href="/" class="text-white btn btn-outline-light btn-primary">LOGIN</a>
@extends('home')
@section('content')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>
    a{
        color: white;
    }
</style>
    @csrf
    <a href="{{ url('project/add') }}"><button>Tambah Data</button></a>
    <table class="table table-hover table-bordered mt-4">
    <tr class="text-white">
        <th>No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>My Portopolio</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>
    @foreach ($project as $key => $item)
    <tr class="text-white text-center">
        <td>{{ $key+1 }}</td>
        <td>{{ $item->nama_project }}</td>
        <td>{{ $item->kategori }}</td>
        <td>
            <a href="\project\portopolio\{{ $item->id }}">
                <img src="\storage\{{ $item->foto_project }}" alt="" width="100">
            </a>
        </td>
        <td>{{ $item->deskripsi }}</td>
        <td >                
            <a href="project/edit/{{ $item->id }}" class="btn btn-primary btn-sm">Change</a>
            <a href="project/hapus/{{ $item->id }}" class="btn btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
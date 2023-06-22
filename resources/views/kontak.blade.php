@extends('project')
@section('content')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>
</style>
@csrf
<a href="{{ url('kontak/add') }}"></a>
    <table class="table table-hover table-bordered mt-4">
    <tr class="text-white">
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
    </tr>
    @foreach ($kontak as $key => $item)
    <tr class="text-white text-center">
        <td>{{ $key+1 }}</td>
        <td>{{ $item->nama_kontak }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->pesan }}</td>
        {{-- <td >                
            <a href="project/edit/{{ $item->id }}" class="btn btn-primary btn-sm">Change</a>
            <a href="project/hapus/{{ $item->id }}" class="btn btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini')">Delete</a>
        </td> --}}
    </tr>   
    @endforeach
</table>
@endsection
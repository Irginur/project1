@extends('home')
@section('content')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>
   textarea, input{
        background: rgba(29, 28, 28, 0.5);
              border:0px; width: 100%;
              padding: 10px;
              color: white;
              margin: 5px;
    }
</style>
<form action="{{ $action }} " method="post" enctype="multipart/form-data">
    @csrf
    <table class="text-white">
        <tr>
            <td>nama</td>
            <td><input type="text" name="nama_project" id="nama_project" value="{{ $project->nama_project }}"></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><input type="text" name="kategori" id="kategori" value="{{ $project->kategori }}"></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>
                <input type="file" name="foto_project" id="foto_project" value="{{$project->foto_project}}">
            </td>
        </tr>
        <tr>
            <td valign="top">Deskripsi</td>
            <td><textarea name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $project->deskripsi }}</textarea></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="{{ $tombol }}">
            </td>
        </tr>
    </table>
</form>
            @endsection
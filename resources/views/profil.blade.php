@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROFIL</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <style>
      textarea ,select ,input{
              background: rgba(29, 28, 28, 0.5);
              border:0px; width: 100%;
              padding: 10px;
              color: white;
              margin: 5px;
            }
            ::placeholder{
                color: white;
            }
            p{
                color: black;
                background: rgb(141, 141, 141);
                margin-left: 25px;
                width: 15%;
                text-align: center;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
    </style>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{$action}}" method="post" enctype="multipart/form-data">
            @csrf
            <form action="{{$action}}">
                <p>Nama</p>
                <input type="text" name="nama_profil" id="nama_profil" value="{{ $nama_profil }}" placeholder="Masukan Nama">
        <p>Alamat</p>
        <input type="text" name="alamat" id="alamat" value="{{ $alamat }}" placeholder="Masukan Alamat">
        <p>TTL</p> 
        <input type="text" name="ttl" id="ttl" value="{{ $ttl }}" placeholder="Masukan Tempat Tanggal Lahir">
        <p>JK</p>
        <select name="jk" id="jk">
            <option value="L" {{ $jk=="L"?"checked":"" }}>Laki-Laki</option>
            <option value="P" {{ $jk=="P"?"checked":"" }}>perempuan</option>
        </select>
        <p>Sekolah</p>
        <input type="text" name="sekolah" id="sekolah" placeholder="Masukan Nama Sekolah" value="{{ $sekolah }}">
        <p>Foto</p>
        <input type="file" name="foto" id="foto">
        <img src="/storage/{{$foto}}" alt="" width="150">
        <p class="mt-3">About</p>
        <input type="text" name="about" id="about" placeholder="About" value="{{ $about }}">
        <input type="submit" value="simpan">
        </form>
    </form>
</body>
</html>
@endsection
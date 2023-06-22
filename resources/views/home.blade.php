<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body{
            background: url('{{ asset('img/OIP (1).jpeg') }}');
        }
    </style>
<body>
<div class="navbar navbar-expand-lg navbar-dark bg-primary text-white">
    <div class="container-fluid">
        Ginurdiansyah
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/home" class="nav-link {{ Request::segment(1)=='home'?'active':'' }}">
                        HOME</a>
                    </li>
                <li class="nav-item">
                    <a href="/profil" class="nav-link {{ Request::segment(1)=='profil'?'active':'' }}">
                        PROFIL</a>
                    </li>
                    <li class="nav-item">
                        <a href="/project" class="nav-link {{ Request::segment(2)=='project'?'active':'' }}">
                            PROJECT</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link {{ Request::segment(3)=='/'?'active':'' }}">
                            LOGOUT</a>
                    </li>
            </ul>

        </div>
    </div>
    
</div>
<div class="container mt-4">
    @yield('content')
</div>
<div>
</div>
</body>
</html>
<script src="{{ asset('js/bootstrap.min.css') }}"></script>

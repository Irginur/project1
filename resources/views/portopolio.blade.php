@extends('home')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        {{-- <script src="{{ asset('js/bootstrap.bundle.js') }}"></script> --}}
        <style>
          h3{
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          }
          p{
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
          }
        </style>
    </head>
    <body>
        @csrf
        <nav class="navbar navbar-expand-lg bg-body-tertiaryb navbar-dark bg-dark fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Navigation</a>
            <button class="navbar-toggler"type="button"data-bs-toggle="collapse"data-bs-target="#navbarNav"aria-controls="navbarNav"aria-expanded="false"aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#project">Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="/home" class="nav-link {{ Request::segment(1)=='home'?'active':'' }}">
                      Kembali</a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
        {{-- akhir navbar --}}
        <section id="home">
          <div class="container">
            <div class="p-4 text-white">
              <div class="row justify-content">
                <div class="col-md-4">
                  <img src="/storage/{{$project->foto_project}}" alt="Navigation"width="200" class="img-thumbnail rounded-circle mt-5"/>
                </div>
                <div class="col-md-4 mt-5">
                  <h3>Nama :</h3>
                  <h3>{{ $project->nama_project }}</h3>
                  <h3>Status :</h3>
                  <h3>{{ $project->kategori }}</h3>
                  <h3>Keterangan :</h3>
                  <h3>{{ $project->deskripsi }}</h3>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- myproject -->
        <section id="project" >
          <div class="container">
            <div class="p-5 text-center">
              <h3 class="fw-bold text-white mb-3">My Project</h3>
              <div class="row judtify-content-center mt-4">
                <div class="col-md-3 mb-2">
                  <div class="card-img-top">
                    <img src="/storage/{{$project->foto_project}}" class="card-img-top" alt="project1" />
                    <div class="card-body">
                      <p></p>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est sed illum perferendis ea aliquam. Minus molestiae doloribus voluptatibus quo dicta itaque sit unde debitis eos aliquid cupiditate, aspernatur consectetur quam!</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-2">
                  <div class="card-img-top">
                    <img src="/storage/{{$project->foto_project}}" class="card-img-top" alt="project2" />
                    <div class="card-body">
                      <p></p>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, culpa explicabo voluptate assumenda nostrum amet voluptas, quam rerum, hic mollitia possimus deleniti dolorem modi nihil suscipit quo beatae veritatis consequatur.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-2">
                  <div class="card-img-top">
                    <img src="/storage/{{$project->foto_project}}" class="card-img-top" alt="project3" />
                    <div class="card-body">
                      <p></p>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse provident deserunt maxime dolores doloremque voluptates praesentium debitis ut tempora totam assumenda, cupiditate repellat! Dicta animi tenetur exercitationem harum quae!</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-2">
                  <div class="card-img-top">
                    <img src="/storage/{{$project->foto_project}}" class="card-img-top" alt="project4" />
                    <div class="card-body">
                      <p></p>
                      <p class="card-text">Lorem Mollitia esse provident deserunt maxime dolores doloremque voluptates praesentium debitis ut tempora totam assumenda, cupiditate repellat! Dicta animi tenetur exercitationem harum quae!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- akhir project -->
        <!-- contact -->
        <section id="contact">
          <div class="container p-5">
            <h3 class="fw-bold text-center text-white mb-3">Contact</h3>
            <div class="row justife-content-center text-white">
              <form action="{{ url('/kontak/create') }}" method="post">
                @csrf
                <div class="md-3 p-3 mt-4">
                  <label for="nama_kontak">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama_kontak">
                </div>
                <div class="md-3 p-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email">
                </div>
                  <div class="col-md-3 p-3">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" cols="30" rows="10"></textarea>
                    {{-- <input type="text" class="form-control" name="pesan"> --}}
                  </div>
                  <button type="submit" class="btn btn-dark fw-bold mx-3">Kirim</button>
              </form>
            </div>
          </div>
        </section>
    </body>
    </html>
@endsection
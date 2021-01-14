<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/detail.css">

    <title>Fema Company</title>
  </head>
  <body>
  <!-- navbar -->
    <ul class="nav nav-tabs">
    <a class="navbar-brand logo" href="#">
    <img src="/css/img/input_data.png" width="30" height="30" alt="" loading="lazy">
    </a>

    <li class="nav-item">
      <a class="nav-link" href="{{'/'}}">HOME</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link active" href="{{'/data'}}">DATA</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{'/info'}}">INFO</a>
    </li>
    </ul>
  <!-- navbar -->

  <div class="container">
    <div class="row">
    <div class="col-6">
        <h1 class="mt-3">Data Tamu {{ $guest->nama_lengkap }}</h1>

        <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ $guest->nama_lengkap }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $guest->telp }}</h6>
            <p class="card-text">{{ $guest->keperluan }}, {{ $guest->nama_bersangkutan }} ( {{ $guest->tanggal }} )</p>
    
            <a href="{{$guest->no}}/edit" class="btn btn-warning">Edit</a>
            <form action="/data/{{ $guest->no }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            <br>
            <br>
            <a href="/data/data" class="card-link">Kembali</a>
        </div>
        </div>
    </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
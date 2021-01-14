<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/data.css">

    <title>Fema Company</title>
  </head>
  <body>
  <!-- navbar -->
    <ul class="nav nav-tabs">
    <a class="navbar-brand logo" href="#">
    <img src="/css/img/data.png" width="30" height="30" alt="" loading="lazy">
    </a>

    <li class="nav-item">
      <a class="nav-link" href="{{'/'}}">HOME</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{'/data'}}">DATA</a>
    </li>

    <li class="nav-item">
      <a class="nav-link active" href="{{'/info'}}">INFO</a>
    </li>
    </ul>
  <!-- navbar -->

  <div class="container">
      
    <h1 class="mt-3">KESELURUHAN DATA TAMU</h1>

    <!-- <form action="/info" method="get" class="mt-3">
    <nav class="navbar navbar-light bg-light">
    <div class="form-inline">
      <input class="form-control mr-sm-2 cari" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </div>
    </nav>
    </form> -->

    <table class="table table-hover table-bordered">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Keterangan Keperluan</th>
      <th scope="col">Nama Bersangkutan</th>
      <th scope="col">Nomor Telp</th>
      <th scope="col">Input Tanggal</th>
      <th scope="col">Dihapus Tanggal</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $data as $dr )
        <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $dr->nama_lengkap }}</td>
        <td>{{ $dr->tanggal }}</td>
        <td>{{ $dr->keperluan }}</td>
        <td>{{ $dr->nama_bersangkutan }}</td>
        <td>{{ $dr->telp }}</td>
        <td>{{ $dr->created_at }}</td>
        <td>{{ $dr->deleted_at }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
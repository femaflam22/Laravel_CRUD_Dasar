<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/indexData.css">

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
      <a class="nav-link" href="{{'/login'}}">INFO</a>
    </li>
    </ul>
  <!-- navbar -->

  <div class="container">
    <div class="row">
        <div class="col md-8">
        <div class="data">
        <h1>INPUT DATA DAN UBAH DATA</h1>

        @if (session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Berhasil!</strong> data tersimpan.
          <a href="/loginCek">lihat</a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if (session('terhapus'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Terhapus!</strong> data berhasil terhapus.
          <a href="/loginCek">lihat</a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if (session('baru'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          <strong>Di Update!</strong> data berhasil di perbarui.
          <a href="/loginCek">lihat</a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Ubah Data Tamu Terinput
            <a href="/loginCek" class="badge badge-info">pilih</a>
        </li>
        </ul>

        <a href="/data/input" class="btn btn-success my-4">Tambah Data Tamu</a>
        </div>
        </div>

        <div class="col md-8">
          <div class="gambar">
          <img src="/css/img/input.png" alt="">
          </div>
        </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
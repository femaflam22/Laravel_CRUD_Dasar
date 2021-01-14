<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/inputData.css">

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
  <!-- navbar  -->

  <h1>FORM DATA TAMU</h1>
  <div class="container">

        <form method="post" action="/data">
        @csrf
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" autocomplete="off" value="{{ old('nama_lengkap') }}">
        </div>
        @error('nama_lengkap')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="form-group">
            <label for="keperluan">Keperluan</label>
            <input type="text" class="form-control @error('keperluan') is-invalid @enderror" id="keperluan" name="keperluan" placeholder="Keterangan" autocomplete="off" value="{{ old('keperluan') }}">
        </div>
        @error('keperluan')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="nama_bersangkutan">Nama Bersangkutan</label>
            <input type="text" class="form-control @error('nama_bersangkutan') is-invalid @enderror" id="nama_bersangkutan" name="nama_bersangkutan" placeholder="Masukkan Nama yang Bersangkutan" autocomplete="off" value="{{ old('nama_bersangkutan') }}"> 
        </div>
        @error('nama_bersangkutan')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="nama" name="tanggal" value="{{ old('tanggal') }}">
            </div>

            <div class="form-group col-md-6">
            <label for="telp">No. Telp</label>
            <input type="text" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" placeholder="Masukkan No. Telp" autocomplete="off" value="{{ old('telp') }}">
            </div>
        </div>
        @error('tanggal')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('telp')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label class="form-check-label mt-3 " for="gridCheck" style="color: #FD5749">
                Jangan lupa untuk mengecek ulang
            </label>
        </div>
        <button type="submit" class="btn btn-lg btn-success">Simpan</button>
        <a class="btn btn-lg btn-dark" href="/data" role="button">Kembali</a>
        </form>  
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="/css/js/scriptValidation.js"></script>
    
  </body>
</html>
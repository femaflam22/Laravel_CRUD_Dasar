<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/auth.css">
    <link rel="stylesheet" href="/css/fontawesome/css/all.min.css">
</head>
<body>
    <!-- navbar -->
    <ul class="nav nav-tabs">
    <a class="navbar-brand logo" href="#">
    <img src="/css/img/logo.png" width="30" height="30" alt="" loading="lazy">
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
    <form action="/login" method="post">
    @csrf
        <h2 class="text-center">LOGIN</h2>
        @if (session('gagal'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
          <strong>GAGAL!</strong> Cek ulang data login.
          <a href="/login">login kembali</a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <hr>
        <div id="error"></div>
        <div class="form-group mt-6">
            <label for="user" class="mt-4">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                <input type="text" class="form-control" aria-describedby="basic-addon1" id="user" name="username">
        </div>

        <div class="form-group">
            <label for="pw" class="mt-4">Password</label>
                 <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-lock"></i>
                      </span>
                    </div>
                <input type="password" class="form-control" aria-describedby="basic-addon1" id="pw" name="pw">
                </div>
        </div>

        <button type="submit" class="btn btn-lg btn-success">L O G I N</button>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
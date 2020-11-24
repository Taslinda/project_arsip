<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
  <img src="{{ asset('frontend') }}/dist/img/logoBapenda.png" alt="Bapenda Logo" style= "max-width:68%">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body register-card-body">
    <p align="center"><b>REGISTRASI ARSIP BERKAS PENDATAAN PAJAK</b></p>
    
      <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="input-group mb-3">
          <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Full name" value="{{old('name') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user">
              </span>
            </div>
          </div>
          </input>  
          @if ($errors->has('name'))
              <div class="invalid-feedback">
              {{ $errors->first('name') }}
              </div>
          @endif
        </div>
        
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" value="{{old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope">
              </span>
            </div>
          </div>
          </input>  
            @if ($errors->has('email'))
                <div class="invalid-feedback">
                {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock">  
              </span>
            </div>
          </div>
          </input>
            @if ($errors->has('password'))
              <div class="invalid-feedback">
              {{ $errors->first('password') }}
              </div>
            @endif
        </div>
        

        <div class="input-group mb-3">
          <input name="password-confirmation" type="password" class="form-control {{ $errors->has('password-confirmation') ? 'is-invalid' : '' }}" placeholder="Ulangi password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock">
              </span>
            </div>
          </div>
          </input>  
          @if ($errors->has('password-confirmation'))
              <div class="invalid-feedback">
              {{ $errors->first('password-confirmation') }}
              </div>
          @endif
        </div>
        
        <div class="row">
            <a href="/login" class="text-center">Sudah Mempunyai Akun?</a>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('frontend') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('frontend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('frontend') }}/dist/js/adminlte.min.js"></script>
</body>
</html>
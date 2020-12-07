<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>WELCOME - LOGIN</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <style type="text/css">
    ::placeholder {
      color: #bdc3c7 !important;
    }
    
    .bg-transparant {
      background: rgba(106, 116, 119, 0.315);
      padding: 40px 25px 50px 25px !important;
      border-radius: 10px;
      margin-left: 15px;
      margin-right: 15px;
    }
    
    @media (max-width: 800px){
      img, svg {
      vertical-align: middle;
      margin-left: 8rem;
      width: 30%;
      }
      button.btn.btn-primary.btn-block{
          width: 5rem;
      }
    }

    a.navbar-brand.logo{
      margin-left: -8rem;
    }
    </style>

</head>

<body>
    <nav style= "background-color:#8B0000" class="navbar navbar-expand-lg fixed-top  clean-navbar">
        <div class="container" >
            <a class="navbar-brand logo" href="#">
             <img src="assets/img/logo bapenda.png" alt="" width="21%" >
            </a>
        </div>
    </nav>
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/bapendaa.jpg&quot;); color:rgba(128, 153, 168, 0.692);">
            <div class="text">
                <h2 style="font-size: 50px; color:black"><b>SELAMAT DATANG</b></h2>
                  <div class="card bg-transparant" >
                    <!-- <div class="card-body login-card-body bg-transparant" > -->
                    <h3><b>SIRIKNA</b></h3>
                    <p>Sistem Informasi Arsip Berkas Pendataan <br> Badan Pendapatan Daerah Kota Makassar</p>
                    
                      <form action="{{ route('dashboard') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="input-group mb-3">
                            <input name="username" type="username" class="form-control" placeholder="Username / Id">
                            <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-user"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input name="password" type="password" class="form-control" placeholder="Password">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <!-- /.col -->
                          <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" style= "background-color: #fff; color:black; border: 1px solid rgba(0,0,0,.125)">LOGIN</button>
                          </div>
                          <!-- /.col -->
                        </div>
                      </form>
                  </div>
                <!-- </div> -->
            </div>
            
        </section>
    </main>
    <div class="footer-copyright text-center py-3 bg-dark" style="color:white">© 2020 : Pendataan Bapenda Kota Makassar
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
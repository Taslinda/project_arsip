
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Project Add</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- SIDEBAR -->
    @include('layouts.sidebar')

    <!-- HEADER -->
    @include('layouts.header')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Berkas Arsip Hotel</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputLok">Lokasi</label>
                <input type="text" id="inputLok" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputTglReg">Tanggal Registrasi</label>
                <input type="date" id="inputTglReg" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputTglPend">Tanggal Pendataan</label>
                <input type="date" id="inputTglPend" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Nama Pemilik/Pengelola</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputKtp">No. KTP</label>
                <input type="text" id="inputKtp" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputNPWP">No. NPWP</label>
                <input type="text" id="inputNPWP" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputAlamatLeng">Alamat Lengkap</label>
                <textarea id="inputAlamatLeng" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputBid">Bidang Pajak</label>
                <select id="inputBid" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>Pajak Air Tanah</option>
                  <option>Pajak Hiburan</option>
                  <option>Pajak Hotel</option>
                  <option>Pajak Mineral</option>
                  <option>Pajak Parkir</option>
                  <option>Pajak Penerangan Jalan</option>
                  <option>Pajak Reklame</option>
                  <option>Pajak Restoran</option>
                  <option>Pajak Sarang Burung Walet</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputUsaha">Nama Badan/Merk Usaha</label>
                <input type="text" id="inputUsaha" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputAlamat">Alamat Usaha</label>
                <input type="text" id="inputAlamat" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputNpwpd">NPWPD</label>
                <input type="text" id="inputNpwpd" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputGol">Golongan Hotel</label>
                <input type="text" id="inputGol" class="form-control">
              </div>
              <form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>Upload Berkas Pendataan Hotel</b><br/>
						<input type="file" name="file">
					</div>
 
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
					
				</form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save" class="btn btn-primary">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- FOOTER -->
  @include('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('frontend') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('frontend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('frontend') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('frontend') }}/dist/js/demo.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel</title>
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
  <!-- Alert -->
  @if(session('succes'))
    <div class="alert alert-succes" role="alert">
      {{session('sukses')}}
    </div>
  @endif

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Arsip</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" ><!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-primary m-b-10" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-plus-circle"></i> &nbsp;Add Dokumen
                </button> 
            </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">Arsip Pendataan Hotel</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        <div class="modal-add-document">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berkas Arsip Hotel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  
                  <div class="modal-body">
                      <form action="/hotel/create" method="POST">
                         {{csrf_field()}}
                        <div class="form-group">
                          <label for="inputLok">Lokasi</label>
                          <input name="lokasi" type="text" id="inputLok" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="inputTglReg">Tanggal Registrasi</label>
                          <input name="tgl_registrasi" type="date" id="inputTglReg" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="inputTglPend">Tanggal Pendataan</label>
                          <input name="tgl_pendataan" type="date" id="inputTglPend" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="inputName">Nama Pemilik/Pengelola</label>
                          <input name="nama_pemilik" type="text" id="inputName" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="inputKtp">No. KTP</label>
                          <input name="no_ktp" type="text" id="inputKtp" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="inputNPWP">No. NPWP</label>
                          <input name="no_npwp" type="text" id="inputNPWP" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="inputAlamatLeng">Alamat Lengkap</label>
                          <textarea name="alamat_pemilik" id="inputAlamatLeng" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="inputBid">Bidang Pajak</label>
                          <select name="bidang_pajak" id="inputBid" class="form-control custom-select">
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
                          <input name="nama_usaha" type="text" id="inputUsaha" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="inputAlamat">Alamat Usaha</label>
                          <input name="alamat_usaha" type="text" id="inputAlamat" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="inputNpwpd">NPWPD</label>
                          <input name="no_npwpd" type="text" id="inputNpwpd" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="inputGol">Golongan Hotel</label>
                          <input name="golongan_hotel" type="text" id="inputGol" class="form-control">
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
                        
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                    </div>
                </div>
              </div>
            </div>
            
          <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Lokasi</th>
                      <th>Tanggal Registrasi</th>
                      <th>Tanggal Pendataan</th>
                      <th>No. NPWPD</th>
                      <th>Nama Wajib Pajak</th>
                      <th>Alamat Objek Pajak</th>
                      <th>Aksi</th>
                  </tr>
                  <?php $no =0;?>
                  @foreach($data_hotel as $hotel)
              </thead>
              
              <tbody>
              <?php $no++ ;?>
                  <tr>
                      <td>{{$no}}</td>
                      <td>{{$hotel->lokasi}}</td>
                      <td>{{$hotel->tgl_registrasi}}</td>
                      <td>{{$hotel->tgl_pendataan}}0</td>
                      <td>{{$hotel->no_npwpd}}</td>
                      <td>{{$hotel->nama_usaha}}</td>
                      <td>{{$hotel->alamat_usaha}}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                          </a>
                          <a class="btn btn-info btn-sm" href="/hotel/{{$hotel->id}}/edit">
                              <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a class="btn btn-danger btn-sm" href="/hotel/{{$hotel->id}}/delete" onclick="return confirm('Yakin Ingin Di Hapus')">
                              <i class="fas fa-trash"></i>
                          </a>
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fa fa-download"></i>
                          </a>
                      </td>
                  </tr>
              </tbody>
          
          
          
          @endforeach
          </table>
    
      </div>

    </div>
 </section>




  </div>
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
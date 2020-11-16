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
<div class="wrapper">
    <!-- SIDEBAR -->
    @include('layouts.sidebar')
    <!-- HEADER -->
    @include('layouts.header')
    <div class="content-wrapper">
    <!-- Alert -->
    @if(session('succes'))
      <div class="alert alert-succes" role="alert">
        {{session('sukses')}}
      </div>
    @endif

    <!-- Main content -->
    <section class="content">
        <div class="card-header">
          <h3 class="card-title">Edit Arsip Hotel</h3>
        </div>

        <div class="row">
          <div class="col-lg-10">
            <form action="/hotel/{{$hotel->id}}/update" method="POST">
               {{csrf_field()}}
                        <div class="form-group">
                          <label for="inputLok">Lokasi</label>
                          <input name="lokasi" type="text" id="inputLok" class="form-control" value="{{$hotel->lokasi}}">
                        </div>

                        <div class="form-group">
                          <label for="inputTglReg">Tanggal Registrasi</label>
                          <input name="tgl_registrasi" type="date" id="inputTglReg" class="form-control" value="{{$hotel->tgl_registrasi}}" >
                        </div>

                        <div class="form-group">
                          <label for="inputTglPend">Tanggal Pendataan</label>
                          <input name="tgl_pendataan" type="date" id="inputTglPend" class="form-control" value="{{$hotel->tgl_pendataan}}">
                        </div>

                        <div class="form-group">
                          <label for="inputName">Nama Pemilik/Pengelola</label>
                          <input name="nama_pemilik" type="text" id="inputName" class="form-control" value="{{$hotel->nama_pemilik}}" >
                        </div>

                        <div class="form-group">
                          <label for="inputKtp">No. KTP</label>
                          <input name="no_ktp" type="text" id="inputKtp" class="form-control" value="{{$hotel->no_ktp}}">
                        </div>

                        <div class="form-group">
                          <label for="inputNPWP">No. NPWP</label>
                          <input name="no_npwp" type="text" id="inputNPWP" class="form-control" value="{{$hotel->no_npwp}}" >
                        </div>

                        <div class="form-group">
                          <label for="inputAlamatLeng">Alamat Lengkap</label>
                          <textarea name="alamat_pemilik" id="inputAlamatLeng" class="form-control" rows="4" value="{{$hotel->alamat_pemilik}}"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="inputBid">Bidang Pajak</label>
                          <select name="bidang_pajak" id="inputBid" class="form-control custom-select">
                            <option selected disabled>Select one</option>
                            <option value="Pajak Air Tanah" @if($hotel->bidang_pajak == 'Pajak Air Tanah') selected @endif>Pajak Air Tanah</option>
                            <option value="Pajak Hiburan" @if($hotel->bidang_pajak == 'Pajak Hiburan') selected @endif>Pajak Hiburan</option>
                            <option value="Pajak Hotel" @if($hotel->bidang_pajak == 'Pajak Hotel') selected @endif>Pajak Hotel</option>
                            <option value="Pajak Mineral" @if($hotel->bidang_pajak == 'Pajak Mineral') selected @endif>Pajak Mineral</option>
                            <option value="Pajak Parkir" @if($hotel->bidang_pajak == 'Pajak Parkir') selected @endif>Pajak Parkir</option>
                            <option value="Pajak Penerangan Jalan" @if($hotel->bidang_pajak == 'Pajak Penerangan Jalan') selected @endif>Pajak Penerangan Jalan</option>
                            <option value="Pajak Reklame" @if($hotel->bidang_pajak == 'Pajak Reklame') selected @endif>Pajak Reklame</option>
                            <option value="Pajak Restoran" @if($hotel->bidang_pajak == 'Pajak Restoran') selected @endif>Pajak Restoran</option>
                            <option value="Pajak Sarang Burung Walet" @if($hotel->bidang_pajak == 'Pajak Sarang Burung Walet') selected @endif>Pajak Sarang Burung Walet</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="inputUsaha">Nama Badan/Merk Usaha</label>
                          <input name="nama_usaha" type="text" id="inputUsaha" class="form-control" value="{{$hotel->nama_usaha}}">
                        </div>

                        <div class="form-group">
                          <label for="inputAlamat">Alamat Usaha</label>
                          <input name="alamat_usaha" type="text" id="inputAlamat" class="form-control" value="{{$hotel->alamat_usaha}}">
                        </div>

                        <div class="form-group">
                          <label for="inputNpwpd">NPWPD</label>
                          <input name="no_npwpd" type="text" id="inputNpwpd" class="form-control" value="{{$hotel->no_npwpd}}">
                        </div>

                        <div class="form-group">
                          <label for="inputGol">Golongan Hotel</label>
                          <input name="golongan_hotel" type="text" id="inputGol" class="form-control" value="{{$hotel->golongan_hotel}}">
                        </div>

                        <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }} 
                        <div class="form-group">
                          <b>Upload Berkas Pendataan Hotel</b><br/>
                          <input type="file" name="file">
                        </div>
                        
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary">Update</button>
                      </form>
          </div>
        </div>

  </section>


  <!-- FOOTER -->
  @include('layouts.footer')
</div>

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
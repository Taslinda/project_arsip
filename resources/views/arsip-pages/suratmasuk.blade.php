<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surat Masuk</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/dist/css/adminlte.min.css">
     <style type="text/css">
       @media screen and (max-width: 750px) {
           .content-wrapper{
               width: fit-content;
           }
           .card-body.table{
               font-size:20px; 
               overflow:auto;
           }
       }
        </style>
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
                                <li class="breadcrumb-item active">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-primary m-b-10" data-toggle="modal"
                                        data-target="#exampleModal">
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

                <form class="form-inline my-2 my-lg-0" action="/suratmasuk" method="GET">
                    <div class="form-inline" style="margin-bottom: 10px">
                        <div class="input-group">
                            <input name="cari" class="form-control form-control-sidebar" type="search"
                                placeholder="Cari" aria-label3w="Search">
                            <div class="input-group-append">
                                <button>
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Arsip Pendataan Surat Masuk</h3>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Lokasi</th>
                                    <th>Nomor Surat</th>
                                    <th>Tanggal Surat Masuk</th>
                                    <th>Keterangan</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php $no =0;?>
                                @foreach($data_suratmasuk as $suratmasuk)
                            </thead>

                            <tbody>
                                <?php $no++ ;?>
                                <tr class="text-center">
                                    <td>{{$no}}</td>
                                    <td>{{$suratmasuk->lokasi}}</td>
                                    <td>{{$suratmasuk->no_surat}}</td>
                                    <td>{{$suratmasuk->tgl_masuk}}</td>
                                    <td>{{$suratmasuk->ket}}</td>
                                    <td><a target="_blank"
                                            href="{{ url('storage/suratmasuk/'.$suratmasuk->file) }}">{{$suratmasuk->file}}</a>
                                    </td>
                                    <td class="project-actions text-right">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modalView{{$suratmasuk->id}}">
                                            <i class="fas fa-folder"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-primary m-b-10" data-toggle="modal"
                                        data-target="#modalUpdate{{$suratmasuk->id}}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger m-b-10" data-toggle="modal"
                                        data-target="#modalDelete{{$suratmasuk->id}}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <a class="btn btn-primary btn-sm" href="/suratmasuk/{{$suratmasuk->file}}/download">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
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

    <!-- Add -->
    <div class="modal-add-document">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Berkas Arsip Surat Masuk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="/suratmasuk/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputLok">Lokasi</label>
                                <input name="lokasi" type="text" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="inputTglPend">Nomor Surat</label>
                                <input name="no_surat" type="text" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="inputTglPend">Tanggal Surat Masuk</label>
                                <input name="tgl_masuk" type="date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="inputName">Keterangan</label>
                                <input name="ket" type="text" class="form-control" required>
                            </div>

                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {{ $error }} <br />
                                @endforeach
                            </div>
                            @endif

                            <div class="form-group">
                                <b>Upload Berkas Pendataan Surat Masuk</b><br />
                                <input type="file" name="file" required>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" value="Upload" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add -->

    <!-- Update  -->
    @foreach($data_suratmasuk as $suratmasuk)
    <div class="modal-add-document">
        <!-- Modal -->
        <div class="modal fade" id="modalUpdate{{$suratmasuk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Berkas Arsip Surat Masuk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="/suratmasuk/{{$suratmasuk->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputLok">Lokasi</label>
                                <input value="{{$suratmasuk->lokasi}}" name="lokasi" type="text" id="inputLok" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="inputTglPend">Nomor Surat</label>
                                <input value="{{$suratmasuk->no_surat}}" name="no_surat" type="text" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="inputTglPend">Tanggal Surat Masuk</label>
                                <input value="{{$suratmasuk->tgl_masuk}}" name="tgl_masuk" type="date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="inputName">Keterangan</label>
                                <input value="{{$suratmasuk->ket}}" name="ket" type="text" class="form-control" required>
                            </div>

                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {{ $error }} <br />
                                @endforeach
                            </div>
                            @endif

                            <div class="form-group">
                                <b>Ganti Berkas Pendataan Surat Masuk</b><br />
                                <input type="file" name="file">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" value="Upload" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Update  -->

    <!-- View -->
    @foreach($data_suratmasuk as $suratmasuk)
    <div class="modal-add-document">
        <!-- Modal -->
        <div class="modal fade" id="modalView{{$suratmasuk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Berkas Arsip Surat Masuk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="/suratmasuk/{{$suratmasuk->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputLok">Lokasi</label>
                                <input value="{{$suratmasuk->lokasi}}" name="lokasi" type="text" id="inputLok" class="form-control" disabled>
                            </div>

                            <div class="form-group">
                                <label for="inputTglPend">Nomor Surat</label>
                                <input value="{{$suratmasuk->no_surat}}" name="no_surat" type="text" class="form-control" disabled>
                            </div>

                            <div class="form-group">
                                <label for="inputTglPend">Tanggal Surat Masuk</label>
                                <input value="{{$suratmasuk->tgl_masuk}}" name="tgl_masuk" type="date" class="form-control" disabled>
                            </div>

                            <div class="form-group">
                                <label for="inputName">Keterangan</label>
                                <input value="{{$suratmasuk->ket}}" name="ket" type="text" class="form-control" disabled>
                            </div>

                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {{ $error }} <br />
                                @endforeach
                            </div>
                            @endif

                            <div class="form-group">
                                <b>Berkas Pendataan Surat Masuk</b><br />
                                <a target="_blank"
                                            href="{{ url('storage/suratmasuk/'.$suratmasuk->file) }}">{{$suratmasuk->file}}</a>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" value="Upload" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- View -->
    
    <!-- Delete Modal -->
  <div class="modal fade" id="modalDelete{{$suratmasuk->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapusnya?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Data tidak dapat dikembalikan setelah dihapus
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a class="btn btn-danger btn-sm" href="/suratmasuk/{{$suratmasuk->id}}/delete">
            Delete
          </a>
        </div>
      </div>
    </div>
  </div>
    @endforeach
    <!-- Delete Modal-->

    <!-- jQuery -->
    <script src="{{ asset('frontend') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('frontend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('frontend') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('frontend') }}/dist/js/demo.js"></script>
    <script>
    $(document).ready(function() {
        $('.modal-add-document').on('hidden.bs.modal', function(e)
        { 
            $(this).find('form').trigger('reset');
        }) ;
    });
    </script>
</body>

</html>

@extends('admin.template')
@section('title','Lembur' )
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>Tabel Lembur</h3>
            </div>
            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Data Lembur</h2>
                <button class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Data Lembur</button>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Nominal</th>
                        <th width="22.5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lembur as $p)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$p->user->nama}}</td>
                        <td>{{$p->tanggal}}</td>
                        <td>{{$p->nominal}}</td>
                        <td>
                        <button type="danger" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail{{$p->id_lembur}}" ><i class="fa fa-search"></i> Detail</button>
                        <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{$p->id_lembur}}" ><i class="fa fa-pencil"></i> Ubah</button>
                        <div style="float:right;">
                                <form form action="{{route('gajilembur.destroy', $p->id_lembur)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i> Hapus</a>
                                </form>
                              </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /page content -->

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Lembur Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left input_mask" action="{{route('gajilembur.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="username" required>
                                    <option disabled="" selected="" value="">Pilih Nama Pegawai</option>
                                    @foreach($pegawais as $pegawai)
                                    <option value="{{$pegawai->username}}">{{$pegawai->nama}}</option>
                                    @endforeach
                                </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nominal</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="nominal" class="form-control" placeholder="Masukkan Nominal" name="nominal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="date" class="form-control" placeholder="Masukkan tanggal" name="tanggal" required>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3" align="right">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-dark" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($lembur as $p)
    <div class="modal fade" id="edit{{$p->id_lembur}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal form-label-left input_mask" action="{{route('gajilembur.update', $p->id_lembur)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="form-control" name="username" required>
                     <option disabled="" selected="" value="">Pilih Nama Pegawai</option>
                    @foreach($pegawais as $pegawai)
                        <option value="{{$pegawai->username}}">{{$pegawai->nama}}</option>
                    @endforeach
                         </select>
                    </div>
            </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nominal</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="nominal" class="form-control" value="{{$p->nominal}}" name="nominal" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Lembur</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="date" class="form-control" value="{{$p->lembur}}" name="lembur" required>
                    </div>
                </div>
                
                </div>
                <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3" align="right">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-dark" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                
            </form>
            </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
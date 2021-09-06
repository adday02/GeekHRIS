@extends('pegawai.template')
@section('title','Pengajuan Pinjaman' )
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert"aria-label="close">
                    <span aria-hidden= "true"></span>
                  </button>
                  <div>
                    @foreach ($errors->all() as $error)
                        {{$error}} <br>
                        @endforeach
                  </div>
                </div>
            @endif
            <h3>Tabel Pengajuan Pinjaman</h3>
            </div>
            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Data Pengajuan Pinjaman</h2>
                <button class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Pengajuan Pinjaman</button>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th width="22.5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pinjamans as $pinjaman)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$pinjaman->tanggal}}</td>
                        <td>{{$pinjaman->nominal}}</td>
                        <td>{{$pinjaman->keterangan}}</td>
                        <td>{{$pinjaman->status}}</td>
                        <td>
                        @if($pinjaman->status=="Dalam Proses")
                            <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{$pinjaman->id_pinjaman}}" ><i class="fa fa-pencil"></i> Ubah</button>
                            @endif
                            <button type="danger" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail{{$pinjaman->id_pinjaman}}" ><i class="fa fa-search"></i> Detail</button>
                            @if($pinjaman->status=="Dalam Proses"||$pinjaman->status=="Ditolak")
                                <div style="float:right;">
                                <form action="{{route('pengajuan-pinjaman.destroy', $pinjaman->id_pinjaman)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i> Hapus</a>
                                </form>
                                </div>
                              @endif
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

    <!-- Modal tambah -->
    <div id="tambah" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Tambah Pengajuan Pinjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
            @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
              <form action="{{route('pengajuan-pinjaman.store')}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Pinjaman</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="date" name="tanggal" class="form-control"  required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nominal</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <input text class="form-control" placeholder="Masukkan Nominal" name="nominal" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <input textarea class="form-control" placeholder="Masukkan Keterangan" name="keterangan" required=""></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>        
        </div>
    </div>
</div>
<!-- /Modal tambah -->

@foreach ($pinjamans as $pinjaman)
    <div class="modal fade" id="edit{{$pinjaman->id_pinjaman}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pengajuan Pinjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal form-label-left input_mask" action="{{route('pengajuan-pinjaman.update', $pinjaman->id_pinjaman)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="username" class="form-control" value="{{$pinjaman->username}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Pinjaman</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="date" class="form-control" value="{{$pinjaman->tanggal}}" name="tanggal" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nominal</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" value="{{$pinjaman->nominal}}" name="nominal" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="form-control" name="keterangan" required>{{$pinjaman->keterangan}}</textarea>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3" align="right">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    @endforeach

@foreach ($pinjamans as $pinjaman)
<!-- Modal detail Data  -->
<div id="detail{{$pinjaman->id_pinjaman}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
             </div>
            <!-- body modal -->
            <div class="modal-body">
            <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">                
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Nama </label>
                    <div class="col-sm-8">        
                        <input type="text" name="username" class="form-control" value="{{ $pinjaman->username}}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Tanggal</label>
                    <div class="col-sm-8">        
                        <input type="date" name="tanggal" class="form-control" value="{{ $pinjaman->tanggal}}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Nominal</label>
                    <div class="col-sm-8">
                        <input type="text" name="nominal" class="form-control" value="{{ $pinjaman->nominal }}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Keterangan</label>
                    <div class="col-sm-8">
                        <input type="text" name="keterangan" class="form-control" value="{{ $pinjaman->keterangan }}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Status</label>
                    <div class="col-sm-8">
                        <input type="text" name="status" class="form-control" value="{{ $pinjaman->status }}" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>             
            </form>
            </div>        
        </div>
    </div>
</div>
@endforeach
@endsection
@extends('Pegawai.template.layout')
@section('title','Pegawai - Pengajuan Cuti' )
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
                <h3>Cuti</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pengajuan Cuti</h2>
                    
                    <div style="float:right;"><button type="danger" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah" >Tambah  Pengajuan Cuti</button></div> 
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Status</th>
                          <th width="19%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($cutis as $cuti)
                        
                          <tr>
                            <td>{{++$i}}</td>
                            <td>{{$cuti->tanggal}}</td>
                            <td>{{$cuti->keterangan}}</td>
                            <td>{{$cuti->status}}</td>
                            <td>
                            @if($cuti->status=="Dalam Proses")
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{$cuti->id_cuti}}" >Edit</button>
                            @endif
                            <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detail{{$cuti->id_cuti}}" >Detail</button>
                            @if($cuti->status=="Dalam Proses"||$cuti->status=="Ditolak")
                                <div style="float:right;">
                                <form action="{{route('cuti-pegawai.destroy', $cuti->id_cuti)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</i></a>
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
                <h5 class="modal-title" id="mediumModalLabel">Tambah Pengajuan Cuti</h5>
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
              <form action="{{route('cuti-pegawai.store')}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Tanggal Cuci</label>
                    <div class="col-sm-8">
                        <input type="date" name="tanggal" class="form-control"  required="">
                    </div>
                </div>

                <textarea class="form-control"name="keterangan" type="text" placeholder="Keterangan" required pattern=".{,255}" title="Deskripsi Max 255 Karakter"></textarea></br>

                 

                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Tambah Pelatihan</button>
                </div>
              </form>
            </div>        
        </div>
    </div>
</div>
<!-- /Modal tambah -->


@foreach ($cutis as $cuti)
<!-- Modal detail Data  -->
<div id="detail{{$cuti->id_cuti}}" class="modal fade" role="dialog">
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
                    <label class="col-sm-4 control-label">Nama Lengkap </label>
                    <div class="col-sm-8">        
                        <input type="text" name="nama" class="form-control" value="{{ $cuti->users->nama}}" readonly>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Tanggal</label>
                    <div class="col-sm-8">        
                        <input type="date" name="tanggal" class="form-control" value="{{ $cuti->tanggal}}" readonly>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Keterangan</label>
                    <div class="col-sm-8">
                        <input type="text" name="keterangan" class="form-control" value="{{ $cuti->keterangan }}" readonly>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Status</label>
                    <div class="col-sm-8">
                        <input type="text" name="status" class="form-control" value="{{ $cuti->status }}" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>             
            </form>
            </div>        
        </div>
    </div>
</div>
@endforeach
@endsection
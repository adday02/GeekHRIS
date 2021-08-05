@extends('Admin.template')
@section('title','Pinjaman' )
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
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
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
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
                        <td>{{$pinjaman->username}}</td>
                        <td>{{$pinjaman->tanggal}}</td>
                        <td>{{$pinjaman->nominal}}</td>
                        <td>{{$pinjaman->keterangan}}</td>
                        <td>{{$pinjaman->status}}</td>
                        <td>
                        <button type="danger" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail{{$pinjaman->id_pinjaman}}" ><i class="fa fa-search"></i> Detail</button>
                        <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{$pinjaman->id_pinjaman}}" ><i class="fa fa-pencil"></i> Ubah</button>
                        <div style="float:right;">
                                <form form action="{{route('pinjaman.destroy', $pinjaman->id_pinjaman)}}" method="POST">
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

    @foreach ($pinjamans as $pinjaman)
<!-- Modal Ubah Data  -->
<div id="edit{{$pinjaman->id_pinjaman}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
              Pengajuan Pinjaman
            </div>
            <!-- body modal -->
            <div class="modal-body">
            <form action="{{route('pinjaman.update', $pinjaman->id_pinjaman)}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">                
                @csrf
                @method('PATCH')
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Pengajuan Pinjaman</label>
                    <div class="col-sm-8">        
                      <select class="form-control" name="status">
                        <option disabled="" selected="" value="">Pilih Pengajuan Pinjaman</option>
                        <option value="Diterima">Diterima</option>
                        <option value="Ditolak">Ditolak</option>
                      </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>             
            </form>
            </div>        
        </div>
    </div>
</div>
@endforeach  

@foreach ($pinjamans as $pinjaman)
<!-- Modal Detail Data  -->
<div id="detail{{$pinjaman->id_pinjaman}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
            Pengajuan Pinjaman
            </div>
            <!-- body modal -->
            <div class="modal-body">
            <form action="#" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">                
                @csrf
                @method('PATCH')
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{$pinjaman->username}}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Tanggal</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{$pinjaman->tanggal}}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Nominal</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{$pinjaman->keterangan}}"readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Keterangan</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{$pinjaman->keterangan}}"readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Status</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{$pinjaman->status}}"readonly>
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
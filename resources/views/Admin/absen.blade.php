@extends('admin.template')
@section('title','Data Absen' )
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>Tabel Absen</h3>
            </div>
            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Data Absen</h2>
                <button class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Absensi</button>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Status</th> 
                        <th>Tanggal</th>
                        <th width="22.5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($absens as $absen)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$absen->username}}</td>
                        <td>{{$absen->status}}</td>
                        <td>{{$absen->tanggal}}</td>
                        <td>
                        <button type="danger" class="btn btn-primary btn-sm" data-toggle="modal" data-target= "#detail-data{{$absen->id_absen}}" ><i class="fa fa-search"></i> Detail</button>
                        <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{$absen->id_absen}}" ><i class="fa fa-pencil"></i> Ubah</button>
                        <div style="float:right;">
                                <form form action="{{route('absen.destroy', $absen->id_absen)}}" method="POST">
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Absen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal form-label-left input_mask" action="{{route('absen.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group row">
 				<label for="id_muthowwif" class="col-sm-2 col-form-label">Username</label>
                	<div class="col-sm-5">
                    	<select name="username" id="username" class="form-control">
                			<option value="">== Pilih Username ==</option>
                			@foreach ($users as $p)
                    		<option value="{{ $p->username }}">{{ $p->username }}</option>
                			@endforeach
                 		</select>
                 	</div>
            </div>
                
            <div class="form-group row">
 				<label for="id_muthowwif" class="col-sm-2 col-form-label"> Absensi</label>
                	<div class="col-sm-5">
                    	<select name="status" id="status" class="form-control">
                			<option value="">== Pilih Status Absensi ==</option>
                    		<option value="Masuk">Masuk</option>
                            <option value="Izin">Izin</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Tanpa Keterangan">Tanpa Keterangan</option>
                			
                 		</select>
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

    @foreach ($absens as $absen)
<!-- Modal Ubah Data  -->
<div id="edit{{$absen->id_absen}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
              Absensi Pegawai
            </div>
            <!-- body modal -->
            <div class="modal-body">
            <form action="{{route('absen.update', $absen->id_absen)}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">                
                @csrf
                @method('PATCH')
                <div class="form-group row">
 				<label for="id_muthowwif" class="col-sm-2 col-form-label">Username</label>
                	<div class="col-sm-5">
                    	<select name="username" id="username" class="form-control">
                			<option value="">== Pilih Username ==</option>
                			@foreach ($users as $p)
                    		<option value="{{ $p->username }}">{{ $p->username }}</option>
                			@endforeach
                 		</select>
                 	</div>
            </div>

            <div class="form-group row">
 				<label for="id_muthowwif" class="col-sm-2 col-form-label"> Absensi</label>
                	<div class="col-sm-5">
                    	<select name="status" id="status" class="form-control">
                			<option value="">== Pilih Status Absensi ==</option>
                    		<option value="Masuk">Masuk</option>
                            <option value="Izin">Izin</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Tanpa Keterangan">Tanpa Keterangan</option>
                			
                 		</select>
                 	</div>
            </div>
                
                <!--<div class="row form-group">
                    <label class="col-sm-4 control-label">Status Absensi</label>
                    <div class="col-sm-8">        
                      <select class="form-control" name="status">
                        <option disabled="" selected="" value="">Pilih Status Absensi</option>
                        <option value="Masuk">Masuk</option>
                        <option value="Izin">Izin</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Tanpa Keterangan">Tanpa Keterangan</option>
                      </select>
                    </div>
                </div>-->

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

@foreach ($absens as $absen)
<!-- Modal Detail Data  -->
<div id="detail-data{{$absen->id_absen}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
              
        
            <!-- body modal -->
            <div class="modal-body">
            <form  class="form-horizontal tasi-form" method="post" enctype="multipart/form-data"> 

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-8">        
                        <input type="text"  class="form-control" value="{{ $absen->username}}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Status Kehadiran</label>
                    <div class="col-sm-8">        
                        <input type="text"  class="form-control" value="{{ $absen->status}}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Tanggal</label>
                    <div class="col-sm-8">        
                        <input type="date" class="form-control" value="{{ $absen->tanggal}}" readonly>
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
</div>
@endforeach

@endsection
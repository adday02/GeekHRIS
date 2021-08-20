@extends('admin.template')
@section('title','Data Lamaran' )
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
                <h2>Data Lamaran</h2>
                <!--<button class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Absensi</button>-->
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lowongan</th>
                        <th>Nama Recruitment</th>
                        <th>Tanggal</th>
                       
                        <th>Status</th> 
                        <th width="22.5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lamarans as $lamaran)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$lamaran->Lowongan->nama_lowongan}}</td>
                        <td>{{$lamaran->username}}</td>
                        <td>{{$lamaran->tanggal}}</td>

                        <td>{{$lamaran->status}}</td>
                       
                        <td>
                         <button type="danger" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{$lamaran->id_lamaran}}" >Edit</button>
                                <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detail-data{{$lamaran->id_lamaran}}" >Detail</button>
                                <a href="{{URL::to('/')}}/file/{{$lamaran->file}}"><button type="danger" class="btn btn-dark btn-sm">Unduh</button></a>
                                <div style="float:right;">
                                <form action="{{route('lamaran.destroy', $lamaran->id_lamaran)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</i></a>
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

    

    @foreach ($lamarans as $lamaran)
<!-- Modal Ubah Data  -->
<div id="edit{{$lamaran->id_lamaran}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
              Data Lamaran
            </div>
            <!-- body modal -->
            <div class="modal-body">
            <form action="{{route('lamaran.update', $lamaran->id_lamaran)}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">                
                @csrf
                @method('PATCH')

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Nama Lowongan</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" value="{{$lamaran->Lowongan->nama_lowongan}}" readonly></input>
                    </div>
                    @error('nama_lowongan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Nama Recruitment</label>
                    <div class="col-sm-8">        
                        <input type="text"  class="form-control" value="{{ $lamaran->username}}" required="required" readonly>
                    </div>
                    @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Tanggal </label>
                    <div class="col-sm-8">
                        <input type="date" name="tanggal" class="form-control" value="{{ $lamaran->tanggal}}" required="" readonly>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Status</label>
                    <div class="col-sm-8">        
                    <select class="form-control"  type="text" name="status" required>
                            <option disabled="" selected="" value="">--Pilih Jenis Status--</option>
                            <option value="Tahap Medical Checkup">Tahap Medical Checkup</option>
                            <option value="Tahap Interview">Tahap Interview</option>
                            <option value="Diterima">Diterima</option>
                            <option value="Ditolak">Ditolak</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>             
            </form>
            </div>        
        </div>
    </div>
</div>
<!-- Modal Edit -->
@endforeach

@foreach ($lamarans as $lamaran)
<!-- Modal Detail Data  -->
<div id="detail-data{{$lamaran->id_lamaran}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            
            <!-- body modal -->
            <div class="modal-body">
            <form  class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
            <div class="row form-group">
                    <label class="col-sm-4 control-label">Nama Lowongan</label>
                    <div class="col-sm-8">        
                        <input type="text"  class="form-control" value="{{ $lamaran->Lowongan->nama_lowongan}}" readonly>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Nama Recruitment</label>
                    <div class="col-sm-8">        
                        <input type="text"  class="form-control" value="{{ $lamaran->username}}" readonly>
                    </div>
                </div>
               
                

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Tanggal</label>
                    <div class="col-sm-8">
                        <input type="text"  class="form-control" value="{{ $lamaran->tanggal }}" readonly>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Status</label>
                    <div class="col-sm-8">
                        <input type="text"  class="form-control" value="{{ $lamaran->status }}" readonly>
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
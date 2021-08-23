@extends('admin.template')
@section('title','Pegawai' )
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>Tabel Penilaian Pegawai</h3>
            </div>
            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Penilaian pada Semester {{date('m')}} Tahun {{date('Y')}}</h2>
                <button class="btn btn-info pull-right" data-toggle="modal" data-target="#"><i class="fa fa-book"></i>  Cek penilaian semua pegawai</button>

                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th width="23.5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pegawais as $pegawai)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$pegawai->nama}}</td>
                        <td>{{$pegawai->GajiPokok->jabatan}}</td>
                        <td>{{$pegawai->email}}</td>
                        <td>{{$pegawai->no_hp}}</td>
                        <td>
                        <button type="danger" class="btn btn-success btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-plus"></i> Tambah Penilaian</button>
                        <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-search"></i> Cek Nilai</button>
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
    @endsection
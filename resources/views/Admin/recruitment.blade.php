@extends('admin.template')
@section('title','Reqruitment' )
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>Tabel Users</h3>
            </div>
            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Data Reqruitment</h2>
                <button class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Pegawai</button>
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
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tiger Nixon</td>
                        <td>Programing</td>
                        <td>tiger.nixon784@gmail.com</td>
                        <td>08123456789</td>
                        <td>
                        <button type="danger" class="btn btn-info btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-search"></i> Detail</button>
                        <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-pencil"></i> Ubah</button>
                        <button type="danger" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-remove"></i> Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Angelica Ramos</td>
                        <td>Marketing</td>
                        <td>angelica.ramos023@gmail.com</td>
                        <td>08561264548</td>
                        <td>
                        <button type="danger" class="btn btn-info btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-search"></i> Detail</button>
                        <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-pencil"></i> Ubah</button>
                        <button type="danger" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-remove"></i> Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Clara Stevens</td>
                        <td>Desiner</td>
                        <td>clara.stev85@gmail.com</td>
                        <td>082456787154</td>
                        <td>
                        <button type="danger" class="btn btn-info btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-search"></i> Detail</button>
                        <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-pencil"></i> Ubah</button>
                        <button type="danger" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#" ><i class="fa fa-remove"></i> Hapus</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
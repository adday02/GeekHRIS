@extends('admin.template')
@section('title','Penilain' )
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
                    @if(session()->has('gagal'))
                    <div class="alert alert-danger">
                        {{ session()->get('gagal') }}
                    </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                <div class="x_title">
                <h2>Penilaian pada Semester {{$performance->semester}} Tahun {{$performance->tahun}}</h2>
                <button class="btn btn-info pull-right" data-toggle="modal" data-target="#"><i class="fa fa-book"></i>  Cek penilaian semua pegawai</button>

                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>PIC</th>
                        <th>No HP</th>
                        <th width="23.5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pegawais as $pegawai)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$pegawai->nama}}</td>
                        <td>{{$pegawai->divisi}}</td>
                        <td>{{$pegawai->pic}}</td>
                        <td>{{$pegawai->no_hp}}</td>
                        <td>
                        @php
                        $cek=0;
                        foreach($kemampuan as $k){
                            if($k->dinilai==$pegawai->username && $k->penilain==auth()->user()->username){
                                $cek=1;
                            }                        
                        }
                        @endphp
                        @if($cek==1)
                        <div class="btn btn-danger btn-sm">Penilaian Selesai</div>              
                        @else
                        <a href="tahun={{$performance->tahun}}&&semester={{$performance->semester}}/{{$pegawai->username}}" class="btn btn-success btn-sm">Tambah Penilaian</a>              
                        @endif
                        <a href="tahun={{$performance->tahun}}&&semester={{$performance->semester}}/ceknilai/{{$pegawai->username}}" class="btn btn-warning btn-sm">Cek Penilaian</a>              
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
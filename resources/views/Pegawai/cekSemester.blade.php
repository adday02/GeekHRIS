@extends('pegawai.template')
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
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                <div class="x_title">
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Semester</th>
                        <th width="23.5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($performance as $p)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$p->tahun}}</td>
                        <td>{{$p->semester}}</td>
                        <td>
                        <a href="penilaian-pegawai/tahun={{$p->tahun}}&&semester={{$p->semester}}/ceknilai/{{auth()->user()->username}}" class="btn btn-primary btn-sm">Cek Nilai </a>              
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
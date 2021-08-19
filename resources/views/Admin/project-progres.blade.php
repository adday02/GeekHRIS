@extends('admin.template')
@section('title','List Project' )
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>Tabel Project</h3>
            </div>
            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Data List Project</h2>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Project</th>
                        <th>Project Manager</th>
                        <th>Anggota</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Didline</th>
                        <th>Presentase</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $p)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$p->nama_project}}</td>
                        <td>{{$p->user->nama}}</td>
                        <td>
                            <ol>
                            @foreach($ang as $a)
                            @if($a->id_project==$p->id_project)
                                <li>{{$a->user->nama}}</li>
                                @endif
                                @endforeach
                            </ol>
                        </td>
                        <td>{{$p->tgl_mulai}}</td>
                        <td>{{$p->tgl_deadline}}</td>
                        <td>
                        <div class="progress progress_sm">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="{{$p->presentase}}"></div>
                            </div>
                            <small>{{$p->presentase}}% Complete</small>
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
@endsection
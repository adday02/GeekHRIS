@extends('pegawai.template')
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
                <h2>Data List Project (Sebagai Project Manager)</h2>
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
                        <th >Aksi</th>
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
                            @foreach($anggota as $a)
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
                        <td>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{$p->id_project}}"><i class="fa fa-pencil"></i> Edit Presentase</button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Data List Project (Sebagai Anggota)</h2>
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
                    @php
                    $i=0;
                    @endphp
                    @foreach($ang as $p)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$p->project->nama_project}}</td>
                        <td>{{$p->project->user->nama}}</td>
                        <td>
                            <ol>
                            @foreach($ang as $a)
                                @if($a->id_project==$p->id_project)
                                    @foreach($anggota as $b)
                                        @if($a->id_project==$b->id_project)
                                            <li>{{$b->user->nama}}</li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                            </ol>
                        </td>
                        <td>{{$p->project->tgl_mulai}}</td>
                        <td>{{$p->project->tgl_deadline}}</td>
                        <td>
                            <div class="progress progress_sm">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="{{$p->project->presentase}}"></div>
                            </div>
                            <small>{{$p->project->presentase}}% Complete</small>
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
@foreach ($projects as $p)
<!-- Modal detail Data  -->
<div id="edit{{$p->id_project}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
             </div>
            <!-- body modal -->
            <div class="modal-body">
            <form class="form-horizontal form-label-left input_mask" action="{{route('project-list-pegawai.update',$p->id_project)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')    
            <div class="row form-group">
                    <label class="col-sm-4 control-label">Presentase Project</label>
                    <div class="col-sm-8">        
                        <input type="number " name="presentase" class="form-control" value="{{ $p->presentase}}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>             
            </form>
            </div>        
        </div>
    </div>
</div>
@endforeach
@endsection
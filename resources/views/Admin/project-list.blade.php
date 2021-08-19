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
                <button class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Project</button>
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
                        <td>
                            <form form action="{{route('project-list.destroy', $p->id_project)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i> Hapus</a>
                            </form>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left input_mask" action="{{route('project-list.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Manager</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" name="username" required>
                                    <option disabled="" selected="" value="">Pilih Project Manager</option>
                                    @foreach($pegawais as $pegawai)
                                    <option value="{{$pegawai->username}}">{{$pegawai->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Anggota</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                @foreach($pegawais as $pegawai)
                                <ul class="to_do">
                                    <li>
                                        <input type="checkbox" class="flat" name="anggota[]" value ="{{$pegawai->username}}"> {{$pegawai->nama}}
                                    </li>
                                </ul>                                
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Project</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="nama_project" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Mulai</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="date" class="form-control" name="tgl_mulai" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Deadline</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="date" class="form-control" name="tgl_deadline" required>
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
@endsection
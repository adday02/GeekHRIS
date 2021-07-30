@extends('admin.template')
@section('title','Recruitment' )
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
                <h2>Data Recruitment</h2>
                <button class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah recruitment</button>
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
                        <th width="22.5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recruitment as $p)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->jabatan}}</td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->no_hp}}</td>
                        <td>
                        <button type="danger" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail{{$p->username}}" ><i class="fa fa-search"></i> Detail</button>
                        <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{$p->username}}" ><i class="fa fa-pencil"></i> Ubah</button>
                        <div style="float:right;">
                                <form form action="{{route('recruitment.destroy', $p->username)}}" method="POST">
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Recruitment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal form-label-left input_mask" action="{{route('recruitment.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" placeholder="Masukkan Username" name="username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="password" class="form-control" placeholder="Masukkan Password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="email" class="form-control" placeholder="Masukkan Email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">No HP</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" placeholder="Masukkan No HP" name="no_hp" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="form-control" name="agama" required>
                        <option disabled="" selected="" value="">Pilih Agama</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Buddha</option>
                        <option>Konghucu</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="form-control" name="jenis_kelamin" required>
                        <option disabled="" selected="" value="">Pilih Jenis Kelamin</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="form-control" name="jabatan" required>
                        <option disabled="" selected="" value="">Pilih Jabatan</option>
                        <option>Marketing</option>
                        <option>Analis</option>
                        <option>Desiner</option>
                        <option>Programer</option>
                        <option>Tester</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="date" class="form-control" value="2000-01-01" name="tanggal_lahir" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="form-control" name="alamat" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="file" class="form-control" placeholder="Default Input" name="foto" required>
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

    <!-- Modal Edit -->
    @foreach ($recruitment as $p)
    <div class="modal fade" id="edit{{$p->username}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Recruitment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal form-label-left input_mask" action="{{route('recruitment.update', $p->username)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" value="{{$p->username}}" name="username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" value="{{$p->nama}}" name="nama" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="email" class="form-control" value="{{$p->email}}" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">No HP</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" Value="{{$p->no_hp}}" name="no_hp" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" Value="{{$p->jenis_kelamin}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" Value="{{$p->agama}}" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="form-control" name="jabatan">
                        <option disabled="" selected="" value="">Pilih Jabatan</option>
                        <option>Marketing</option>
                        <option>Analis</option>
                        <option>Desiner</option>
                        <option>Programer</option>
                        <option>Tester</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="date" class="form-control" value="{{$p->tanggal_lahir}}"  readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="form-control" name="alamat" required>{{$p->alamat}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="file" class="form-control" placeholder="Default Input" name="foto">
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
    @endforeach

    <!-- Modal Detail -->
    @foreach ($recruitment as $p)
    <div class="modal fade" id="detail{{$p->username}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Eecruitment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal form-label-left input_mask" action="{{route('recruitment.update', $p->username)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" value="{{$p->username}}" name="username" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" value="{{$p->nama}}" name="nama" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="email" class="form-control" value="{{$p->email}}" name="email" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">No HP</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" Value="{{$p->no_hp}}" name="no_hp" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" Value="{{$p->jenis_kelamin}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" Value="{{$p->agama}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" Value="{{$p->jabatan}}" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="date" class="form-control" value="{{$p->tanggal_lahir}}"  readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="form-control" name="alamat" readonly>{{$p->alamat}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <img class="img-responsive avatar-view" src="{{URL::to('/')}}/foto/{{$p->foto}}" alt="Avatar" title="Change the avatar">
                    </div>
                </div>

                <div class="ln_solid"></div>

                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3" align="right">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
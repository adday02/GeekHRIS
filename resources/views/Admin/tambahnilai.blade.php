@extends('admin.template')
@section('title','Tambah Penilaian' )
@section('content')

<div class="right_col" role="main">
    <div class="">
    <div class="page-title">
        <div class="title_left">
        <h3>Penilaian</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Tambah Penilaian</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" value="{{$pegawai->nama}}" class="form-control col-md-7 col-xs-12" readonly>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Divisi
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" value="{{$pegawai->divisi}}"class="form-control col-md-7 col-xs-12" readonly>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">PIC
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" value="{{$pegawai->pic}}"class="form-control col-md-7 col-xs-12" readonly>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" value="{{$pegawai->email}}"class="form-control col-md-7 col-xs-12" readonly>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No HP
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" value="{{$pegawai->no_hp}}"class="form-control col-md-7 col-xs-12" readonly>
                </div>
                </div>
                <div class="ln_solid"></div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <form class="form-horizontal form-label-left input_mask" action="{{Route('inputPenilaian')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Kemampuan</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Komunikatif</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="komunikatif" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Pengetahuan mengenai tugas atau jobdesk</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="tugas" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Bekerja dibawah tekanan</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="tekanan" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Kemampuan yang dimiliki sesuai bidang kerjanya</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard"  class="form-control" name="kemampuan_kerjaan" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Bahasa asing</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard"  class="form-control" name="bahasa" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Kreatif dan inofatif</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="kreatif" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="ln_solid"></div>
            </div>
        </div>
        <div class="x_panel">
            <div class="x_title">
            <h2>Kerjasama</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Saling mengisi dan memberi dengan partner kerja untuk kelancaran</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="menisi_partner" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Koordinasi dan support dengan bagian lain yang membutuhkan</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="koordinasi" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Empati dan toleransi</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard"  class="form-control" name="empati" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="ln_solid"></div>
            </div>
        </div>
        </div>

        <div class="col-md-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Etika dan Keterampilan</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Sikap dan cara bicara</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="sikap_tuturkata" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Jujur dan bertanggung jawab</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="jujur_tanggungjawab" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Pakaian bersih dan rapih</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard"  class="form-control" name="pakaian_rapi" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="ln_solid"></div>
            </div>
        </div>  
        <div class="x_panel">
            <div class="x_title">
                <h2>Disiplin</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Disiplin kerja</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="kerja" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Disiplin waktu</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="waktu" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="ln_solid"></div>
            </div>
        </div>  
        <div class="x_panel">
            <div class="x_title">
                <h2>Tanggung Jawab</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Penyelesaian tugas tepat waktu dan sesuai prosedur</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="tepat_waktu" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Kerahasiaan data perusahaan</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="kerahasiaan" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Sarana dan prasarana kerja</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="sarana" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-6 col-sm-12 col-xs-12">Kebersihan dan kenyamanan lingkungan kerja {{auth()->user()->username}}</label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                    <select id="heard" class="form-control" name="kebersihan" required>
                        <option value="">Nilai</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                    </div>
                </div>
                <input type="hidden" name="id_performance" value="{{$performance->id_performance}}">
                <input type="hidden" name="dinilai" value="{{$pegawai->username}}">
                <input type="hidden" name="penilai" value="{{auth()->user()->nama}}">
                <div class="ln_solid"></div>
                <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <button type="button" class="btn btn-primary">Cancel</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </div>
            </div>
        </div>  
        </div>
        
    </div>
    </div>
    </form>

</div>

@endsection
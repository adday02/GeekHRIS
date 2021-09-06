@extends('atasan.template')
@section('title','Penilain' )
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>Data Penilaian Pegawai</h3>
            </div>
            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>
        @foreach($pegawais as $pegawai)
        <div class="col-md-3 col-xs-12 widget widget_tally_box">
            <div class="x_panel fixed_height_390">
            @php
                $cek=0;
                foreach($kemampuan as $k){
                    if($k->dinilai==$pegawai->username && $k->penilain==auth()->user()->username){
                        $cek=1;
                    }                        
                }
                @endphp
                @if($cek==1)
                <ul class="list-inline">
                    <h3 class="btn btn-round btn-primary" >Sudah diberi nilai</h3>
                </ul>                
                @else
                <ul class="list-inline">
                    <h3 class="btn btn-round btn-danger" >Belum diberi nilai</h3>
                </ul>        
                @endif
                <div class="x_content">

                <div class="flex">
                    <ul class="list-inline widget_profile_box">
                    <li>
                        <a href="#">
                        <i class="fa fa-plus"></i>
                        </a>
                    </li>
                    <li>
                        <img src="{{URL::to('/')}}/foto/{{$pegawai->foto}}" alt="..." class="img-circle profile_img">
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa fa-plus"></i>
                        </a>
                    </li>
                    </ul>
                </div>
                <h4 class="name" style="float:center;">{{$pegawai->nama}}</h4>

                <div class="flex">
                    <ul class="list-inline count2">
                        <h5 style="white-space:pre">Devisi <pre>{{$pegawai->divisi}}</pre></h5>
                    </ul>
                </div>
                <button type="button" class="btn btn-warning">Cek nilai</button>
                @if($cek==0)
                <a style="float:right;" class="btn btn-success" href="tahun={{$performance->tahun}}&&semester={{$performance->semester}}/{{$pegawai->username}}">Tambah Nilai</a>
                @endif
                </div>
            </div>
        </div>
        @endforeach

        </div>
        </div>
    </div>
    @endsection
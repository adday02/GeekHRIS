@extends('pegawai.template')
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
                <div class="x_content">
                <div class="flex">
                    <ul class="list-inline widget_profile_box">
                    <li>
                        <a href="tahun={{$performance->tahun}}&&semester={{$performance->semester}}/{{$pegawai->username}}">
                        <i class="fa fa-plus"></i>
                        </a>
                    </li>
                    <li>
                        <img src="{{URL::to('/')}}/foto/{{$pegawai->foto}}" alt="..." class="img-circle profile_img">
                    </li>
                    <li>
                        <a href="tahun={{$performance->tahun}}&&semester={{$performance->semester}}/{{$pegawai->username}}">
                        <i class="fa fa-plus"></i>
                        </a>
                    </li>
                    </ul>
                </div>

                <h3 class="name">{{$pegawai->nama}}</h3>

                <div class="flex">
                    <ul class="list-inline count2">
                        <h3 align="center">{{{$pegawai->divisi}}}</h3>
                    </ul>
                </div>
                <p>
                    If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                </p>
                </div>
            </div>
        </div>
        @endforeach

        </div>
        </div>
    </div>
    @endsection
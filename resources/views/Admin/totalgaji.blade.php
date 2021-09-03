@extends('admin.template')
@section('title','Totalgaji' )
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>Tabel Total Gaji</h3>
            </div>
            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>nama</th>
                        <th>divisi</th>
                        <th>Nominal</th>
                        <th>Total Tunjangan</th>
                        <th>total gaji</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pegawai as $p)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->divisi}}</td>
                        <td>{{$p->nominal}}</td>
                        <td>
                            @php
                            $totaltunjangan=0;
                            @endphp
                            @foreach($tunjangan as $q)
                        @if($p->username==$q->username)
                      @php
                        $totaltunjangan +=$q->nominal;
                        @endphp
                        @endif
                        @endforeach
                        {{$totaltunjangan}}
                    </td>
                    <td>
                        {{$p->nominal+$totaltunjangan}}
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
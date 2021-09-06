@extends('pegawai.template')
@section('title','Cek Penilaian' )
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
                        <h2>Cek Penilaian Pegawai</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$pegawai->nama}}" class="form-control col-md-7 col-xs-12" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Divisi</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$pegawai->divisi}}"class="form-control col-md-7 col-xs-12" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">PIC</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$pegawai->pic}}"class="form-control col-md-7 col-xs-12" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email</label>
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
                    <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th rowspan="2"width="5%">No</th>
                        <th rowspan="2"width="12%">Aspek</th>
                        <th rowspan="2" colspan="2" width="35%">Sub Aspek</th>
                        <th rowspan="2" width="6%">Bobot</th>
                        <th colspan="2"width="14%">Penilaian 1</th>
                        <th colspan="2" width="14%">Penilaian 2</th>
                        <th colspan="2" width="14%">Penilaian 3</th>
                    </tr>
                    <tr>
                        <th width="7%">Nilai</th>
                        <th width="7%">BX</th>
                        <th width="7%">Nilai</th>
                        <th width="7%">BX</th>
                        <th width="7%">Nilai</th>
                        <th width="7%">BX</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td rowspan="6">1</td>
                        <td rowspan="6">Kemampuan</td>
                        <td>1</td>
                        <td>Komunikatif</td>
                        <td>5</td>
                        <td>{{$kemampuanAts->komunikatif}}</td>
                        <td>{{$kemampuanAts->komunikatif*5}}</td>
                        <td>{{$kemampuanAdm->komunikatif}}</td>
                        <td>{{$kemampuanAdm->komunikatif*5}}</td>
                        <td>{{$kemampuanPgw->komunikatif}}</td>
                        <td>{{$kemampuanPgw->komunikatif*5}}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pengetahuan mengenai tugas atau jobdesk</td>
                        <td>6</td>
                        <td>{{$kemampuanAts->tugas}}</td>
                        <td>{{$kemampuanAts->tugas*6}}</td>
                        <td>{{$kemampuanAdm->tugas}}</td>
                        <td>{{$kemampuanAdm->tugas*6}}</td>
                        <td>{{$kemampuanPgw->tugas}}</td>
                        <td>{{$kemampuanPgw->tugas*6}}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bekerja dibawah tekanan</td>
                        <td>5</td>
                        <td>{{$kemampuanAts->tekanan}}</td>
                        <td>{{$kemampuanAts->tekanan*5}}</td>
                        <td>{{$kemampuanAdm->tekanan}}</td>
                        <td>{{$kemampuanAdm->tekanan*5}}</td>
                        <td>{{$kemampuanPgw->tekanan}}</td>
                        <td>{{$kemampuanPgw->tekanan*5}}</td>

                    </tr>
                        <td>4</td>
                        <td>Kemampuan yang dimiliki sesuai bidang pekerjaan</td>
                        <td>7</td>
                        <td>{{$kemampuanAts->kemampuan_kerjaan}}</td>
                        <td>{{$kemampuanAts->kemampuan_kerjaan*7}}</td>
                        <td>{{$kemampuanAdm->kemampuan_kerjaan}}</td>
                        <td>{{$kemampuanAdm->kemampuan_kerjaan*7}}</td>
                        <td>{{$kemampuanPgw->kemampuan_kerjaan}}</td>
                        <td>{{$kemampuanPgw->kemampuan_kerjaan*7}}</td>
                    </tr>
                    </tr>
                        <td>5</td>
                        <td>Berbahasa asing (khususnya bahasa Inggris)</td>
                        <td>7</td>
                        <td>{{$kemampuanAts->bahasa}}</td>
                        <td>{{$kemampuanAts->bahasa*7}}</td>
                        <td>{{$kemampuanAdm->bahasa}}</td>
                        <td>{{$kemampuanAdm->bahasa*7}}</td>
                        <td>{{$kemampuanPgw->bahasa}}</td>
                        <td>{{$kemampuanPgw->bahasa*7}}</td>
                    </tr>
                    </tr>
                        <td>6</td>
                        <td>Kreatif dan inovatif</td>
                        <td>6</td>
                        <td>{{$kemampuanAts->kreatif}}</td>
                        <td>{{$kemampuanAts->kreatif*6}}</td>
                        <td>{{$kemampuanAdm->kreatif}}</td>
                        <td>{{$kemampuanAdm->kreatif*6}}</td>
                        <td>{{$kemampuanPgw->kreatif}}</td>
                        <td>{{$kemampuanPgw->kreatif*6}}</td>
                        </tr>
                    <tr>
                        <td rowspan="3">2</td>
                        <td rowspan="3">Etika dan Penampilan</td>
                        <td>7</td>
                        <td>Sikap dan cara bicara</td>
                        <td>5</td>
                        <td>{{$etikaAts->sikap_tuturkata}}</td>
                        <td>{{$etikaAts->sikap_tuturkata*5}}</td>
                        <td>{{$etikaAdm->sikap_tuturkata}}</td>
                        <td>{{$etikaAdm->sikap_tuturkata*5}}</td>
                        <td>{{$etikaPgw->sikap_tuturkata}}</td>
                        <td>{{$etikaPgw->sikap_tuturkata*5}}</td>
                        </tr>
                    </tr>
                        <td>8</td>
                        <td>Jujur dan bertanggung jawab</td>
                        <td>5</td>
                        <td>{{$etikaAts->jujur_tanggungjawab}}</td>
                        <td>{{$etikaAts->jujur_tanggungjawab*5}}</td>
                        <td>{{$etikaAdm->jujur_tanggungjawab}}</td>
                        <td>{{$etikaAdm->jujur_tanggungjawab*5}}</td>
                        <td>{{$etikaPgw->jujur_tanggungjawab}}</td>
                        <td>{{$etikaPgw->jujur_tanggungjawab*5}}</td>
                        </tr>
                    </tr>
                        <td>9</td>
                        <td>Pakaian bersih dan rapih</td>
                        <td>5</td>
                        <td>{{$etikaAts->pakaian_rapi}}</td>
                        <td>{{$etikaAts->pakaian_rapi*5}}</td>
                        <td>{{$etikaAdm->pakaian_rapi}}</td>
                        <td>{{$etikaAdm->pakaian_rapi*5}}</td>
                        <td>{{$etikaPgw->pakaian_rapi}}</td>
                        <td>{{$etikaPgw->pakaian_rapi*5}}</td>
                        </tr>
                    <tr>
                        <td rowspan="2">3</td>
                        <td rowspan="2">Disiplin</td>
                        <td>10</td>
                        <td>Disiplin kerja</td>
                        <td>5</td>
                        <td>{{$disiplinAts->kerja}}</td>
                        <td>{{$disiplinAts->kerja*5}}</td>
                        <td>{{$disiplinAdm->kerja}}</td>
                        <td>{{$disiplinAdm->kerja*5}}</td>
                        <td>{{$disiplinPgw->kerja}}</td>
                        <td>{{$disiplinPgw->kerja*5}}</td>
                        </tr>
                    </tr>
                        <td>11</td>
                        <td>Disiplin waktu</td>
                        <td>5</td>
                        <td>{{$disiplinAts->waktu}}</td>
                        <td>{{$disiplinAts->waktu*5}}</td>
                        <td>{{$disiplinAdm->waktu}}</td>
                        <td>{{$disiplinAdm->waktu*5}}</td>
                        <td>{{$disiplinPgw->waktu}}</td>
                        <td>{{$disiplinPgw->waktu*5}}</td>
                        </tr>
                    <tr>
                        <td rowspan="3">4</td>
                        <td rowspan="3">Kerjasama</td>
                        <td>12</td>
                        <td>Saling mengisi dan berbagi dengan partner kerja untuk kelancaran operasional</td>
                        <td>6</td>
                        <td>{{$kerjaAts->menisi_partner}}</td>
                        <td>{{$kerjaAts->menisi_partner*6}}</td>
                        <td>{{$kerjaAdm->menisi_partner}}</td>
                        <td>{{$kerjaAdm->menisi_partner*6}}</td>
                        <td>{{$kerjaPgw->menisi_partner}}</td>
                        <td>{{$kerjaPgw->menisi_partner*6}}</td>
                        </tr>
                    </tr>
                        <td>13</td>
                        <td>Koordinasi dan support dengan bagian lain yang membutuhkan</td>
                        <td>6</td>
                        <td>{{$kerjaAts->koordinasi}}</td>
                        <td>{{$kerjaAts->koordinasi*6}}</td>
                        <td>{{$kerjaAdm->koordinasi}}</td>
                        <td>{{$kerjaAdm->koordinasi*6}}</td>
                        <td>{{$kerjaPgw->koordinasi}}</td>
                        <td>{{$kerjaPgw->koordinasi*6}}</td>
                        </tr>
                        <td>14</td>
                        <td>Empati dan toleransi</td>
                        <td>5</td>
                        <td>{{$kerjaAts->empati}}</td>
                        <td>{{$kerjaAts->empati*5}}</td>
                        <td>{{$kerjaAdm->empati}}</td>
                        <td>{{$kerjaAdm->empati*5}}</td>
                        <td>{{$kerjaPgw->empati}}</td>
                        <td>{{$kerjaPgw->empati*5}}</td>
                        </tr>
                    <tr>
                        <td rowspan="4">5</td>
                        <td rowspan="4">Tanggung Jawab</td>
                        <td>15</td>
                        <td>Penyelesaian tugas tepat waktu dan sesuai prosedur</td>
                        <td>7</td>
                        <td>{{$tanggungAts->tepat_waktu}}</td>
                        <td>{{$tanggungAts->tepat_waktu*7}}</td>
                        <td>{{$tanggungAdm->tepat_waktu}}</td>
                        <td>{{$tanggungAdm->tepat_waktu*7}}</td>
                        <td>{{$tanggungPgw->tepat_waktu}}</td>
                        <td>{{$tanggungPgw->tepat_waktu*7}}</td>
                        </tr>
                    </tr>
                        <td>16</td>
                        <td>Kerahasiaan data perusahaan</td>
                        <td>5</td>
                        <td>{{$tanggungAts->kerahasiaan}}</td>
                        <td>{{$tanggungAts->kerahasiaan*5}}</td>
                        <td>{{$tanggungAdm->kerahasiaan}}</td>
                        <td>{{$tanggungAdm->kerahasiaan*5}}</td>
                        <td>{{$tanggungPgw->kerahasiaan}}</td>
                        <td>{{$tanggungPgw->kerahasiaan*5}}</td>
                        </tr>
                    </tr>
                        <td>17</td>
                        <td>Sarana dan prasarana kerja</td>
                        <td>5</td>
                        <td>{{$tanggungAts->sarana}}</td>
                        <td>{{$tanggungAts->sarana*5}}</td>
                        <td>{{$tanggungAdm->sarana}}</td>
                        <td>{{$tanggungAdm->sarana*5}}</td>
                        <td>{{$tanggungPgw->sarana}}</td>
                        <td>{{$tanggungPgw->sarana*5}}</td>
                        </tr>
                    </tr>
                        <td>18</td>
                        <td>Kebersihan dan kenyamanan lingkungan kerja</td>
                        <td>5</td>
                        <td>{{$tanggungAts->kebersihan}}</td>
                        <td>{{$tanggungAts->kebersihan*5}}</td>
                        <td>{{$tanggungAdm->kebersihan}}</td>
                        <td>{{$tanggungAdm->kebersihan*5}}</td>
                        <td>{{$tanggungPgw->kebersihan}}</td>
                        <td>{{$tanggungPgw->kebersihan*5}}</td>
                        </tr>
                    </tbody>
                    @php
                    $subtotal1=($kemampuanAts->komunikatif*5)+($kemampuanAts->tugas*6)+($kemampuanAts->tekanan*5)+($kemampuanAts->kemampuan_kerjaan*7)+($kemampuanAts->bahasa*7)+($kemampuanAts->kreatif*6)+($etikaAts->sikap_tuturkata*5)+($etikaAts->jujur_tanggungjawab*5)+($etikaAts->pakaian_rapi*5)+($disiplinAts->kerja*5)+($disiplinAts->waktu*5)+($kerjaAts->menisi_partner*6)+($kerjaAts->koordinasi*6)+($kerjaAts->empati*5)+($tanggungAts->tepat_waktu*7)+($tanggungAts->kerahasiaan*5)+($tanggungAts->sarana*5)+($tanggungAts->kebersihan*5);
                    $subtotal2=($kemampuanAdm->komunikatif*5)+($kemampuanAdm->tugas*6)+($kemampuanAdm->tekanan*5)+($kemampuanAdm->kemampuan_kerjaan*7)+($kemampuanAdm->bahasa*7)+($kemampuanAdm->kreatif*6)+($etikaAdm->sikap_tuturkata*5)+($etikaAdm->jujur_tanggungjawab*5)+($etikaAdm->pakaian_rapi*5)+($disiplinAdm->kerja*5)+($disiplinAdm->waktu*5)+($kerjaAdm->menisi_partner*6)+($kerjaAdm->koordinasi*6)+($kerjaAdm->empati*5)+($tanggungAdm->tepat_waktu*7)+($tanggungAdm->kerahasiaan*5)+($tanggungAdm->sarana*5)+($tanggungAdm->kebersihan*5);
                    $subtotal3=($kemampuanPgw->komunikatif*5)+($kemampuanPgw->tugas*6)+($kemampuanPgw->tekanan*5)+($kemampuanPgw->kemampuan_kerjaan*7)+($kemampuanPgw->bahasa*7)+($kemampuanPgw->kreatif*6)+($etikaPgw->sikap_tuturkata*5)+($etikaPgw->jujur_tanggungjawab*5)+($etikaPgw->pakaian_rapi*5)+($disiplinPgw->kerja*5)+($disiplinPgw->waktu*5)+($kerjaPgw->menisi_partner*6)+($kerjaPgw->koordinasi*6)+($kerjaPgw->empati*5)+($tanggungPgw->tepat_waktu*7)+($tanggungPgw->kerahasiaan*5)+($tanggungPgw->sarana*5)+($tanggungPgw->kebersihan*5);
                    @endphp
                    <tfooter>
                    <tr>
                        <th colspan="4">Jumlah</th>
                        <th >100</th>
                        <th ><small>Subtotal 1</small></th>
                        <th >{{$subtotal1}}</th>
                        <th ><small>Subtotal 2</small></th>
                        <th >{{$subtotal2}}</th>
                        <th ><small>Subtotal 3</small></th>
                        <th >{{$subtotal3}}</th>
                    </tr>
                    <tr>
                        <th colspan="5"></th>
                        <th>Score =</th>
                        <th>{{$subtotal1*50/100}}</th>
                        <th>{{$subtotal2*25/100}}</th>
                        <th>{{$subtotal3*25/100}}</th>
                        <th colspan="2">= {{($subtotal1*50/100)+($subtotal2*25/100)+($subtotal3*25/100)}}</th>
                    </tr>
                    </tfooter>
                </table>
                </div>
                <!-- Absen -->
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Alasan</th>
                        <th>Perhitungan</th>
                        <th>Total</th>
                        <th></th>
                        <th colspan="2">Final Grade / Nilai Akhir</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Datang lambat/lupa catat</td>
                        <td>2 x ..... hari </td>
                        <td></td>
                        <td rowspan="6"></td>
                        <td>AVERAGE			</td>
                        <td>450</td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td>Masuk setengah hari</td>
                        <td>3 x ..... hari </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ijin</td>
                        <td>5 x ..... hari </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mangkir / Alpha</td>
                        <td>15 x ..... hari </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Surat Teguran</td>
                        <td>30 x ..... ST </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Surat Peringatan</td>
                        <td>50 x ..... SP </td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                </div>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
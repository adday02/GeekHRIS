<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Pegawai</title>
    <!-- Bootstrap -->
    <link href="../Admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../Admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../Admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../Admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../Admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../Admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../Admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../Admin/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title">Geek Garden</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{auth()->user()->nama}}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
<<<<<<< HEAD
                                <li><a><i class="fa fa-users"></i> Pengajuan <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{URL('pegawai/pengajuan-cuti')}}">Pengajuan Cuti</a></li>
                                        <li><a href="{{URL('pegawai/pengajuan-pinjaman')}}">Pengajuan Pinjaman</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-money"></i> Gaji <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#">Gaji Pokok</a></li>
                                        <li><a href="#">Gaji Tunjangan</a></li>
                                        <li><a href="#">Gaji Lembur</a></li>
                                        <li><a href="#">Total Gaji</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-book"></i> Absensi <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#">Absensi Pegawai</a></li>
                                        <li><a href="#">Rekap Absensi Sakit</a></li>
                                        <li><a href="#">Rekap Absensi Izin</a></li>
                                        <li><a href="#">Rekap Absensi Tanpa Kabar</a></li>
                                    </ul>
                                </li>
                            </ul>
=======
                      <li><a><i class="fa fa-users"></i> Pengajuan <span
                                  class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                              <li><a href="{{URL('admin/pegawai')}}">Pinjaman</a></li>
                              <li><a href="{{URL('admin/recruitment')}}">Cuti</a></li>
                          </ul>
                      </li>
                      <li><a><i class="fa fa-bar-chart"></i> Penilaian <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                              <li><a href="{{URL('pegawai/penilaian-pegawai')}}">Beri Penilaian</a></li>
                              <li><a href="{{URL('pegawai/cekPenilaian-pegawai')}}">Cek Nilai</a></li>
                          </ul>
                      </li>
                      <li><a><i class="fa fa-laptop"></i> Project <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                              <li><a href="{{URL('pegawai/project-list-pegawai')}}">List Project</a></li>
                          </ul>
                      </li>
                      <li><a><i class="fa fa-money"></i> Gaji <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                              <li><a href="#">Gaji Pokok</a></li>
                              <li><a href="#">Gaji Tunjangan</a></li>
                              <li><a href="#">Gaji Lembur</a></li>
                              <li><a href="#">Total Gaji</a></li>
                          </ul>
                      </li>
                      <li><a><i class="fa fa-book"></i> Absensi <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                              <li><a href="#">Absensi Pegawai</a></li>
                              <li><a href="#">Rekap Absensi Sakit</a></li>
                              <li><a href="#">Rekap Absensi Izin</a></li>
                              <li><a href="#">Rekap Absensi Tanpa Kabar</a></li>
                          </ul>
                      </li>
                  </ul>
>>>>>>> de32e4a883ad17c24cbdbcecfaf6bf0e5003966d
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{URL('keluar')}}">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{URL::to('/')}}/foto/{{auth()->user()->foto}}"
                                        alt="">{{auth()->user()->nama}}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li>
                                    <li><a href="{{URL('keluar')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>User Profile</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>User Report <small>Activity report</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                        <div class="profile_img">
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <img class="img-responsive avatar-view"
                                                    src="{{URL::to('/')}}/foto/{{auth()->user()->foto}}" alt="Avatar"
                                                    title="Change the avatar">
                                            </div>
                                        </div>
                                        <h3>{{auth()->user()->nama}}</h3>
                                        <ul class="list-unstyled user_data">
                                            <li><i class="fa fa-map-marker user-profile-icon"></i>
                                                {{auth()->user()->alamat}}
                                            </li>
                                            <li>
                                                <i class="fa fa-briefcase user-profile-icon"></i>
                                                {{auth()->user()->jabatan}}
                                            </li>
                                            <li class="m-top-xs">
                                                <i class="fa fa-envelope user-profile-icon"></i>
                                                  {{auth()->user()->email}}
                                            </li>
                                        </ul>
                                        <button class="btn btn-success" data-toggle="modal" data-target="#edit"><i class="fa fa-edit m-right-xs" ></i> Edit Profile</button>
                                        <br />
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12">

                                        <div class="profile_title">
                                            <div class="col-md-6">
                                                <h2>Rekap Absensi</h2>
                                            </div>
                                        </div>
                                        <!-- start of user-activity-graph -->
                                        <canvas id="bar-chart" width="700" height="250"></canvas>
                                        <!-- end of user-activity-graph -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal form-label-left input_mask" action="{{route('profile-pegawai.update', auth()->user()->username)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" value="{{auth()->user()->username}}" name="username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" value="{{auth()->user()->nama}}" name="nama" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="email" class="form-control" value="{{auth()->user()->email}}" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">No HP</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" Value="{{auth()->user()->no_hp}}" name="no_hp" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" Value="{{auth()->user()->jenis_kelamin}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" Value="{{auth()->user()->agama}}" readonly>
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
                        <input type="date" class="form-control" value="{{auth()->user()->tanggal_lahir}}"  readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="form-control" name="alamat" required>{{auth()->user()->alamat}}</textarea>
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
    <!-- jQuery -->
    <script src="../Admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../Admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../Admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../Admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../Admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../Admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../Admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../Admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../Admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../Admin/vendors/Flot/jquery.flot.js"></script>
    <script src="../Admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../Admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../Admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../Admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../Admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../Admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../Admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../Admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../Admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../Admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../Admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../Admin/vendors/moment/min/moment.min.js"></script>
    <script src="../Admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Table -->
    <script src="../Admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../Admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../Admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>


    <!-- Custom Theme Scripts -->
    <script src="../Admin/build/js/custom.min.js"></script>
    <script type="text/javascript">
        // Bar chart
        new Chart(document.getElementById("bar-chart"), {
            type: 'bar',
            data: {
                labels: [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember",
                ],
                datasets: [{
                    label: "Jumlah",
                    backgroundColor: [
                        "#343f51", "#808080", "#343f51", "#808080", "#343f51", "#808080", "#343f51",
                        "#808080", "#343f51", "#808080", "#343f51", "#808080", "#343f51"
                    ],
                    data: [
                        25, 23, 26, 24, 26, 26, 26, 26, 25, 26, 24, 26, 0
                    ]
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Data Pegawai Absensi {{auth()->user()->nama}} Pada Tahun {{ date("Y")}}'
                }
            }
        });

    </script>
</body>

</html>

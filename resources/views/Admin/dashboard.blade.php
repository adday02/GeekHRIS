<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

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
    <link href="../Admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
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
              <div class="profile_pic">
                <img src="../Admin/Build/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{URL('admin/dashboard')}}"><i class="fa fa-tachometer "></i> Dashboard </a></li>
                  <li><a><i class="fa fa-users"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('admin/pegawai')}}">Pegawai</a></li>
                      <li><a href="{{URL('admin/recruitment')}}">Rekruitment</a></li>
                      <li><a href="{{URL('admin/magang')}}">Magang</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart"></i> Penilaian <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('admin/penilaian')}}">Penilaian Pegawai</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-laptop"></i> Project <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('admin/project-list')}}">All Project</a></li>
                      <li><a href="{{URL('admin/project-progres')}}">Progress Project</a></li>
                      <li><a href="{{URL('admin/project-selesai')}}">Done Project</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Gaji <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('admin/gajipokok')}}">Gaji Pokok</a></li>
                      <li><a href="{{URL('admin/gajitunjangan')}}">Gaji Tunjangan</a></li>
                      <li><a href="{{URL('admin/gajilembur')}}">Gaji Lembur</a></li>
                      <li><a href="#">Lain-Lain</a></li>
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
                  <li><a><i class="fa fa-clock-o"></i> Pengajuan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('admin/cuti')}}">Pengajuan Cuti</a></li>
                      <li><a href="{{URL('admin/pinjaman')}}">Pengajuan Pinjaman</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-desktop"></i> Pekerjaan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('admin/lowongan')}}">Lowongan Pekerjaan</a></li>
                      <li><a href="{{URL('admin/lamaran')}}">Lamaran Pekerjaan</a></li>
                    </ul>
                  </li>
                     
                    </ul>
                  </li>

                  </ul>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../Admin/Build/images/img.jpg" alt="">Admin
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
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
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
                          Film festivals used to be do-or-die moments for movie makers. They were where...
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
                          Film festivals used to be do-or-die moments for movie makers. They were where...
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
                          Film festivals used to be do-or-die moments for movie makers. They were where...
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
                          Film festivals used to be do-or-die moments for movie makers. They were where...
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
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Pegawai</span>
              <div class="count">{{$user_pegawai}}</div>
              <span class="count_bottom">Orang</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Recruitment</span>
              <div class="count">{{$user_recruitment}}</div>
              <span class="count_bottom"><i class="green"></i>Orang</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Magang</span>
              <div class="count">{{$user_magang}}</div>
              <span class="count_bottom"><i class="green"></i>Orang</span>
            </div>
            
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-money"></i> Sudah Terima Gaji</span>
              <div class="count">15</div>
              <span class="count_bottom"><i class="green">75% </i> Pegawai</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-money"></i> Belum Terima Gaji</span>
              <div class="count">5</div>
              <span class="count_bottom"><i class="green">25% </i> Pegawai</span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">
                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Human Resources Information System</h3>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                <canvas id="bar-chart" width="700" height="250"></canvas>
                </div>
                <!-- <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Data Absensi</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Hadir <i class="green"> 75% </i></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="75"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Sakit<i class="green"> 5% </i></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="5"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Izin<i class="green"> 20% </i></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="20"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Tanpa Keterangan<i class="green">0% </i></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="0"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Daftar Hadir Pada {{ date("d F Y")}}</h2>
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
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Hadir</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Sakit</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 3%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Izin</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Tanpa Ket</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
            <?php
              $tgl=date('m');
              if($tgl==1)
              {
                $tgl="Januari";
              }
              else if($tgl==2)
              {
                $tgl="Februari";
              }
              else if($tgl==3)
              {
                $tgl="Maret";
              }
              else if($tgl==4)
              {
                $tgl="April";
              }
              else if($tgl==5)
              {
                $tgl="Mei";
              }
              else if($tgl==6)
              {
                $tgl="Juni";
              }
              else if($tgl==7)
              {
                $tgl="Juli";
              }
              else if($tgl==8)
              {
                $tgl="Agustus";
              }
              else if($tgl==9)
              {
                $tgl="September";
              }
              else if($tgl==10)
              {
                $tgl="Oktober";
              }
              else if($tgl==11)
              {
                $tgl="November";
              }
              else if($tgl==12)
              {
                $tgl="Desember";
              }
              
            ?>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Gaji Pada bulan {{$tgl}}</h2>
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
                    <canvas width="1" height="1" id="inicanvas"></canvas>
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
              "Pegawai", "Rekruitment","Magang"
            ],
            datasets: [
              {
                label: "Jumlah",
                backgroundColor: [
                  "#343f51","#808080","#343f51","#808080","#343f51"
                ],
                data: [
                  {{$user_pegawai}},
                  {{$user_recruitment}},
                  {{$user_magang}},
                  0,
                ]
              }
            ]
          },
          options: {
            legend: { display: false },
            title: {
              display: true,
              text: 'Jumlah User Geek Garden Software House'
            }
          }
      });
    </script>
    <script>
 
 var ctx = document.getElementById("inicanvas").getContext("2d");
 // tampilan chart
 var piechart = new Chart(ctx,{type: 'pie',
   data : {
 // label nama setiap Value
 labels:[
           'Sudah Terima Gaji',
           'Belum Terima Gaji'
   ],
 datasets: [{
   // Jumlah Value yang ditampilkan
    data:[60,60],

   backgroundColor:[
     'rgba(128, 128, 128)',
     'rgba(77,77,77)',
    ]
 }],
 }
 });

</script>
    </body>
</html>


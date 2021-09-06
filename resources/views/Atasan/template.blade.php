<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="../../../../Admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../../../Admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../../Admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../../../Admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../../../../Admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../../../Admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../../../Admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../../../Admin/build/css/custom.min.css" rel="stylesheet">
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
                <img src="../../../../Admin/Build/images/img.jpg" alt="../../..." class="img-circle profile_img">
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
                  <li><a href="{{URL('atasan/dashboard-atasan')}}"><i class="fa fa-tachometer "></i> Dashboard </a></li>
                  <li><a><i class="fa fa-users"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('atasan/pegawai-atasan')}}">Pegawai</a></li>
                      <li><a href="{{URL('atasan/recruitment-atasan')}}">Rekruitment</a></li>
                      <li><a href="{{URL('atasan/magang-atasan')}}">Magang</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart"></i> Penilaian <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('atasan/penilaian-atasan')}}">Penilaian Pegawai</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-laptop"></i> Project <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('atasan/project-list-atasan')}}">All Project</a></li>
                      <li><a href="{{URL('atasan/project-progres-atasan')}}">Progress Project</a></li>
                      <li><a href="{{URL('atasan/project-selesai-atasan')}}">Done Project</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Gaji <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('atasan/gajipokok-atasan')}}">Gaji Pokok</a></li>
                      <li><a href="{{URL('atasan/tunjangan-atasan')}}">Gaji Tunjangan</a></li>
                      <li><a href="{{URL('atasan/totalgaji-atasan')}}">Total Gaji</a></li>
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
                      <li><a href="{{URL('atasan/cuti-atasan')}}">Pengajuan Cuti</a></li>
                      <li><a href="{{URL('atasan/pinjaman-atasan')}}">Pengajuan Pinjaman</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-desktop"></i> Pekerjaan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL('atasan/lowongan-atasan')}}">Lowongan Pekerjaan</a></li>
                      <li><a href="{{URL('atasan/lamaran-atasan')}}">Lamaran Pekerjaan</a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{URL('/keluar')}}">
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
                    <img src="{{URL::to('/')}}/foto/{{auth()->user()->foto}}" alt="">{{auth()->user()->nama}}
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

        @yield('content')

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
    <script src="../../../../Admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../../Admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../../../Admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../../../Admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../../../../Admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../../../../Admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../../../Admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../../../Admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../../../../Admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../../../../Admin/vendors/Flot/jquery.flot.js"></script>
    <script src="../../../../Admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../../../Admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../../../Admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../../../Admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../../../Admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../../../Admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../../../Admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../../../Admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../../../../Admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../../../../Admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../../../Admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../../../Admin/vendors/moment/min/moment.min.js"></script>
    <script src="../../../../Admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Table -->
    <script src="../../../../Admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../../../Admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../../../../Admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/dataTables.buttons.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

    <script type="text/javascript">
            
            $(document).ready(function () {
                $('#table-datatables').DataTable({
                    dom: 'Bfrtip',
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                });
            });
        </script>

    <!-- Custom Theme Scripts -->
    <script src="../../../../Admin/build/js/custom.min.js"></script>
    <script type="text/javascript">
      // Bar chart
      new Chart(document.getElementById("bar-chart"), {
          type: 'bar',
          data: {
            labels: [
              "Pegawai", "Rekruitment","Magang","Sudah Terima Gaji","Belum Terima Gaji"
            ],
            datasets: [
              {
                label: "Jumlah",
                backgroundColor: [
                  "#343f51","#808080","#343f51","#808080","#343f51","#808080","#343f51"
                ],
                data: [
                  5,5,5,5,5
                ]
              }
            ]
          },
          options: {
            legend: { display: false },
            title: {
              display: true,
              text: 'Grafik Human Resources Information System'
            }
          }
      });
    </script>
    </body>
</html>

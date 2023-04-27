<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FlowerFarm | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset( 'assets/plugins/fontawesome-free/css/all.min.css' ) }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset( 'assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css' ) }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset( 'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css' ) }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset( 'assets/plugins/jqvmap/jqvmap.min.css' ) }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset( 'assets/dist/css/adminlte.min.css' ) }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset( 'assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css' ) }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset( 'assets/plugins/daterangepicker/daterangepicker.css' ) }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset( 'assets/plugins/summernote/summernote-bs4.min.css' ) }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset( 'assets/images/svg/logo-no-background.svg' ) }}" alt="Flower Farm" height="100">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout">
          <i class="fas fa-power-off"></i> Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('assets/images/svg/logo-white.svg') }}" alt="Flower Farm" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Flower Farm</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
            <a href="/flower" class="nav-link">
                <i class="fas fa-tree nav-icon"></i>
                <p>Flowers</p>
            </a>
            </li>
            <li class="nav-item">
                <a href="/flower-types" class="nav-link">
                    <i class="fas fa-columns nav-icon"></i>
                    <p>Flower Types</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/contacts" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Contacts</p>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>jsGrid</p>
                </a>
            </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">FlowerFarm</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset( 'assets/plugins/jquery/jquery.min.js' ) }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset( 'assets/plugins/jquery-ui/jquery-ui.min.js' ) }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset( 'assets/plugins/bootstrap/js/bootstrap.bundle.min.js' ) }}"></script>
<!-- ChartJS -->
<script src="{{ asset( 'assets/plugins/chart.js/Chart.min.js' ) }}"></script>
<!-- Sparkline -->
<script src="{{ asset( 'assets/plugins/sparklines/sparkline.js' ) }}"></script>
<!-- JQVMap -->
<script src="{{ asset( 'assets/plugins/jqvmap/jquery.vmap.min.js' ) }}"></script>
<script src="{{ asset( 'assets/plugins/jqvmap/maps/jquery.vmap.usa.js' ) }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset( 'assets/plugins/jquery-knob/jquery.knob.min.js' ) }}"></script>
<!-- daterangepicker -->
<script src="{{ asset( 'assets/plugins/moment/moment.min.js' ) }}"></script>
<script src="{{ asset( 'assets/plugins/daterangepicker/daterangepicker.js' ) }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset( 'assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ) }}"></script>
<!-- Summernote -->
<script src="{{ asset( 'assets/plugins/summernote/summernote-bs4.min.js' ) }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset( 'assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ) }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset( 'assets/dist/js/adminlte.js' ) }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset( 'assets/dist/js/demo.js' ) }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset( 'assets/dist/js/pages/dashboard.js' ) }}"></script>
</body>
</html>

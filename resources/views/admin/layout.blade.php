<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
<title>Đỗ Quang Đức</title>
<meta charset="utf-8">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo asset('css/fontawesome-free/css/all.min.css')?>">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- jsGrid -->
<link rel="stylesheet" href="<?php echo asset('css/jsgrid/jsgrid.min.css')?>">
<link rel="stylesheet" href="<?php echo asset('css/jsgrid/jsgrid-theme.min.css')?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo asset('css/dist/css/adminlte.min.css')?>">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<meta name="msapplication-tap-highlight" content="no">
<link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
<link  href="<?php echo asset('css/main.css')?>" type="text/css" rel="stylesheet">
</head>
<body>
<div class="hold-transition sidebar-mini">
    <div class="wrapper">
@include('admin.header')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="../css/dist/img/AdminLTELogo.png"
                     alt="AdminLTE Logo"
                     class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <span class="brand-text font-weight-light">Trang Quản Trị</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../css/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Đỗ Quang Đức</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        @yield('active')
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Sản Phẩm</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Sản Phẩm</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <!-- /.card-header -->
                  @yield('content')
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@include('admin.footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo asset('css/jsgrid/demos/db.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('css/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script type="text/javascript" src="<?php echo asset('css/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- DataTables -->
    <script type="text/javascript" src="<?php echo asset('css/datatables/jquery.dataTables.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('css/plugins/datatables-bs4/js/dataTables.bootstrap4.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script type="text/javascript" src="<?php echo asset('css/dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script type="text/javascript" src="<?php echo asset('css/dist/js/demo.js'); ?>"></script>
    <!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

</body>
</html>

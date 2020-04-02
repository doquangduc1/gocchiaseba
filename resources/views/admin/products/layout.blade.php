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
<link rel="stylesheet" href="<?php echo asset('css/dist/css/adminlte.min.css')?>">
<link rel="stylesheet" href="<?php echo asset('css/dropzone/basic.css')?>">
<link rel="stylesheet" href="<?php echo asset('css/dropzone/dropzone.css')?>">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body>
<div class="hold-transition sidebar-mini">
    <div class="wrapper">
@include('admin.header')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('products.index')}}" class="brand-link">
                <img src="{!! asset('css/dist/img/AdminLTELogo.png ') !!}"
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
                        <img src="{!! asset('css/dist/img/user2-160x160.jpg') !!}" class="img-circle elevation-2" alt="User Image">
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
                <div class="row">
                    <!-- /.card-header -->
                  @yield('content')
                    <!-- /.card-body -->
                </div>
@yield('button')
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
@include('admin.footer')
{{-- <div  class="form-group">

    <label>Ảnh sản phẩm</label>
    <div class="box-image"  id="myDropzone"><p>Thả file ảnh vào đây để thêm mới</p>
    </div>
</div>
<div class="box-footer">
    <input type="hidden" id="image" name="images" >
    <a href="" style="margin-right:5px" class="btn btn-danger btn-lg">Hủy</a>
    <button type="submit" name="submit" class="btn btn-primary  btn-lg ">Lưu</button>

</div> --}}
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

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
    <script type="text/javascript" src="<?php echo asset('css/dropzone/dropzone.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('css/dropzone/dropzone-amd-module.js'); ?>"></script>
    <!-- page script -->

</div>
{{-- <script>
    $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            CKEDITOR.replace('editor2');
            // CKEDITOR.replace('editor3',{
            //     removePlugins: 'a11yhelp,basicstyles,blockquote,button,clipboard,colorbutton,colordialog,contextmenu,div,elementspath,enterkey,entities,find,font,format,horizontalrule,htmldataprocessor,indent,justify,keystrokes,list,liststyle,maximize,newpage,pagebreak,pastefromword,pastetext,popup,preview,removeformat,resize,save,showblocks,showborders,sourcearea,stylescombo,table,tabletools,specialchar,tab,toolbar,undo,table'
            // });
            //bootstrap WYSIHTML5 - text editor
            $('.select2').select2()

            $('#description-ui').on('click', function(e){
                e.preventDefault();
                $('#box-description').show();
                $(this).hide();
            });
            var arFiles = [];
            var myDropzone = new Dropzone("div#myDropzone", {
                url: 'http://lap-trinh-web.com/admin.php?p=product&act=uploadFiles',
            // The setting up of the dropzone
            init: function () {
            },
            accept: function(file, done)
            {
                var re = /(?:\.([^.]+))?$/;
                var ext = re.exec(file.name)[1];
                ext = ext.toUpperCase();
                if ( ext == "JPG" || ext == "JPEG" || ext == "PNG" ||  ext == "GIF" ||  ext == "BMP")
                {
                    done();
                }else {
                    done("Please select only supported picture files.");
                }
            },
            success: function( file, response ){

            obj = JSON.parse(response);
            arFiles.push(obj.filename);
            $('input[name="images"').val(arFiles);
            }
        })
        })
    </script> --}}

</body>
</html>


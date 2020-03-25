<style>
    .ui-widget *, .ui-widget input, .ui-widget select, .ui-widget button {
            font-family: 'Helvetica Neue Light', 'Open Sans', Helvetica;
            font-size: 14px;
            font-weight: 300 !important;
        }

        .details-form-field input,
        .details-form-field select {
            width: 250px;
            float: right;
        }

        .details-form-field {
            margin: 30px 0;
        }

        .details-form-field:first-child {
            margin-top: 10px;
        }

        .details-form-field:last-child {
            margin-bottom: 10px;
        }

        .details-form-field button {
            display: block;
            width: 100px;
            margin: 0 auto;
        }

        input.error, select.error {
            border: 1px solid #ff9999;
            background: #ffeeee;
        }

        label.error {
            float: right;
            margin-left: 100px;
            font-size: .8em;
            color: #ff6666;
        }
</style>
@extends('admin.layout')
@section('active')
@include('admin.user.leftforuser')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Tài khoản <i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('user.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách tài khoản</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.create')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm mới tài khoản</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sửa tài khoản</p>
                </a>
            </li>
        </ul>
    </li>
@include('admin.user.leftforuserbyblog')
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới sản phẩm</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" id="form">
            <div class="card-body">
                <div class="form-group">
                    <label >Tên sản phẩm</label>
                    <input type="text" class="form-control form-control-lg name "  id ="name" name ="name"  placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="form-group">
                    <label >Giá</label>
                    <input type="text" class="form-control form-control-lg"   name ="price"  placeholder="Nhập giá" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Loại sản phẩm</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
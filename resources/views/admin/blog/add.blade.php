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
    @include('admin.blog.leftforblog')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Blog<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('blog.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách Blog</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('blog.add')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Blog</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sửa Blog</p>
                </a>
            </li>
        </ul>
    </li>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới Blog</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" id="form">
            <div class="card-body">
                <div class="form-group">
                    <label >Tên Blog</label>
                    <input type="text" class="form-control form-control-lg name "  id ="name" name ="name"  placeholder="Nhập tên Blog" required>
                </div>
                <div class="form-group">
                    <label >Nội dung</label>
                    <input type="text" class="form-control form-control-lg"   name ="price"  placeholder="Nhập Nội dung" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Loại Blog</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Thêm tệp</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chọn tệp</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Tải lên</span>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Gửi đi</button>
            </div>
        </form>
    </div>

@endsection
<script>
$().ready(function() {
$("#form").validate({
onfocusout: false,
onkeyup: false,
onclick: false,
rules: {
"name": {
required: true,
maxlength: 1
},
"password": {
required: true,
minlength: 8
},
"re-password": {
equalTo: "#password",
minlength: 8

}
},
messages: {
"name": {
required: "Bắt buộc nhập username",
maxlength: "Hãy nhập tối đa 15 ký tự"
},
"password": {
required: "Bắt buộc nhập password",
minlength: "Hãy nhập ít nhất 8 ký tự"
},
"re-password": {
equalTo: "Hai password phải giống nhau",
minlength: "Hãy nhập ít nhất 8 ký tự"
}
}
});
});
</script>

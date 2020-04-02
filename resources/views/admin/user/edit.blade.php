@extends('admin.layout')
@section('active')
@include('admin.user.leftforuser')
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

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-fw fa-user"></i>
            <p>Tài khoản<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('user.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách tài khoản</p>
                </a>
            </li>
            <li class="nav-item">
                <a  href="{{ route('user.create')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm tài khoản</p>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route('user.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sửa tài khoản</p>
                </a>
            </li> --}}
        </ul>
    </li>
@endsection
@section('content')
    <div class="card card-primary">
        {{-- <div  class="card-title "> --}}
        <div class="card-header">
            <h3 class="btn btn-primary" >Sửa tài khoản</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form role="form" id="form" action="{{ route('user.update',$user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label >Tên tài khoản</label>
                    <input type="text" class="form-control form-control-lg name " value="{{ $user->name }}"  id ="name" name ="name"  placeholder="Nhập tên tài khoản" required>
                </div>
                <div class="form-group">
                    <label >Mật khẩu</label>
                    <input type="password" class="form-control form-control-lg"   name ="password" value="{{$user->password }}"   placeholder="Nhập Mật khẩu" required>
                </div>

                <div class="form-group">
                    <label >Email</label>
                    <input type="text" class="form-control form-control-lg"   name ="email" value="{{$user->email }}"   placeholder="Nhập email" >
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Sửa</button>
            </div>
        </form>
    </div>

@endsection



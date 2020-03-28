
    <style>
        .btnindex {
            background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 12px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Darker background on mouse-over */
        .btn:hover {
            background-color: RoyalBlue;
        }
        button#hover {
            background-color: RoyalBlue;
        }
        #hover span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        #hover span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        #hover:hover span {
            padding-right: 25px;
        }

        #hover:hover span:after {
            opacity: 1;
            right: 0;
        }
        </style>

@extends('admin.layout')
@section('active')
<li class="nav-item has-treeview">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Sản Phẩm<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('products.index')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách sản phẩm</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm sản phẩm</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="../../index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sửa sản phẩm</p>
            </a>
        </li>
    </ul>
</li>
@include('admin.products.leftforproduct')
@include('admin.products.leftforprodbyblog')
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Nội dung</th>
                    <th>Ảnh</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td></td>
                <td></td>
                <td>
                    <button type="button"class="btnindex  glyphicon glyphicon-edit" id="hover"><span>Sửa</span> </button>
                    <button class="btnindex fa fa-trash"id="hover"><span></span> </button>
                </td>
            </tr>
            @endforeach
            </table>
            {!! $products->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection


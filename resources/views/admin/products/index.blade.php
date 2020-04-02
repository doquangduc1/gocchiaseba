
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
        <i class="nav-icon fas fa-th"></i>
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
        {{-- <li class="nav-item">
            <a href="../../index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sửa sản phẩm</p>
            </a>
        </li> --}}
    </ul>
</li>
@include('admin.products.leftforproduct')
@include('admin.products.leftforprodbyblog')
@endsection
@section('content')
    <div class="card">
        <div class="card-header " >
            <a href="{{route('products.create')}}"> <h3 class="card-title btn btn-block btn-success alignRight" >Tạo Mới</h3></a>
        </div>
        <div class="card-header">
            <h3 class="card-title">Danh Sách Sản Phẩm</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th> Giá </th>
                    <th>Ảnh</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            @foreach ($product as $products)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $products ->name }}</td>
                    <td>{{ $products ->loaisp }}</td>
                    <td>{{ $products ->gia }}</td>
                    @foreach($products->productsimage as $image)
                    <td> <img src="{{asset('img/'.$image->image)}}"  style="width: 50px; height: auto"  /> </td>
@endforeach

                    <td>
                        <form action="{{ route('products.destroy',$products->id) }}" method="POST">
                            {{-- <a class="btn btn-info" href="{{ route('products.show',$products->id) }}"></a> --}}
                            <a class="btnindex  glyphicon glyphicon-edit" id="hover"  href="{{ route('products.edit',$products->id) }}"><span>Sửa</span></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btnindex fa fa-trash"id="hover"><span>Xóa</span> </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
            </table>
            {!! $product->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection

<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

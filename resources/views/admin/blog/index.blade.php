
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
    .alignRight {
    text-align: right;
}
    #hover:hover span:after {
        opacity: 1;
        right: 0;
    }
</style>
@extends('admin.layout')
@section('active')
 @include('admin.blog.leftforblog')
<li class="nav-item has-treeview">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>BLOG<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('blog.index')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách blog</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('blog.create')}}"class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm blog</p>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="{{ route('blog.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sửa blog</p>
            </a>
        </li> --}}
    </ul>
</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header " >
            <a href="{{ route('blog.create')}}"> <h3 class="card-title btn btn-block btn-success alignRight" >Tạo Mới</h3></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên blog</th>
                    <th>Nội dung blog</th>
                    <th>Tùy chọn</th>
                </tr>
                </thead>
                @foreach ($blog as $blogs)
                <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $blogs ->name }}</td>
                    <td>{{ $blogs ->detail }}</td>
                    <td>
                        <form action="{{ route('blog.destroy',$blogs->id) }}" method="POST">
                            {{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"></a> --}}
                            <a class="btnindex  glyphicon glyphicon-edit" id="hover"  href="{{ route('blog.edit',$blogs->id) }}"><span>Sửa</span></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btnindex fa fa-trash"id="hover"><span>Xóa</span> </button>
                        </form>
                    </td>
                </tr>
                </tbody>

                @endforeach
            </table>
            {{ $blog->links() }}
        </div>
        <!-- /.card-body -->
    </div>

@endsection


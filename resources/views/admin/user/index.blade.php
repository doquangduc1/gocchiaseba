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
    @include('admin.user.leftforuser')

<li class="nav-item has-treeview">
    <a href="#" class="nav-link active">
        <i class="nav-icon fa fa-fw fa-user"></i>
        <p>Tài khoản<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('user.index')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách tài khoản</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.create')}}"class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm tài khoản</p>
            </a>
        </li>

    </ul>
</li>
@include('admin.user.leftforuserbyblog')
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
             <thead>
                 <tr>
                    <th>ID</th>
                    <th>Tên tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Tùy chọn</th>
                  </tr>
              </thead>
                    @foreach ($user as $users)
                <tbody>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $users ->name }}</td>
                        <td>{{ $users ->password }}</td>
                        <td>{{ $users ->email}}</td>
                        <td>
                            <form action="{{ route('user.destroy',$users->id) }}" method="POST">
                                {{-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}"></a> --}}
                                <a class="btnindex  glyphicon glyphicon-edit" id="hover"  href="{{ route('user.edit',$users->id) }}"><span>Sửa</span></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btnindex fa fa-trash"id="hover"><span>Xóa</span> </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            {{ $user->links() }}
        </div>
        <!-- /.card-body -->
    </div>
@endsection











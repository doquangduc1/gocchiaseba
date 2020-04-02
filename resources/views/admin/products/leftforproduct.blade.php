<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
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
            <a href="{{ route('user.create')}}"class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm tài khoản</p>
            </a>
        </li>

    </ul>
</li>

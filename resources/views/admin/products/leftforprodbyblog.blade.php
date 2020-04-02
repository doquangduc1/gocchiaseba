<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>Blog<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('blog.index')}}" class="nav-link">
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
            <a href="../../index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sửa blog</p>
            </a>
        </li> --}}
    </ul>
</li>

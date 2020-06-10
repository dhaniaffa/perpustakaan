<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset('assets/dist/img/admin.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a class="d-block">Halo, {{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">DATA</li>
                <li class="nav-item">
                    <a href="{{route('admin.author.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-user text-danger"></i>
                        <p class="text">Penulis</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.book.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-book text-warning"></i>
                        <p>Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.report.user')}}" class="nav-link">
                        <i class="nav-icon fa fa-users text-info"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.report.book')}}" class="nav-link">
                        <i class="nav-icon fa fa-book text-warning"></i>
                        <p>Laporan Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.borrow.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-book text-warning"></i>
                        <p>Log Pengembalian</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

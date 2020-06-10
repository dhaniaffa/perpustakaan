<!DOCTYPE html>
<html>

@include('admin.template.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('admin.template.partials.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.template.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::current()->title}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li>
                                {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render()}}
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('admin.template.partials.footer')
</div>
<!-- ./wrapper -->

@include('admin.template.partials.script')
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url("admin/assets/images/favicon.png")}}"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="{{url("admin/dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css")}}" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="{{url("admin/dist/css/bootstrap-docs.css")}}" type="text/css">

    <!-- Slick -->
    <link rel="stylesheet" href="{{url("admin/libs/slick/slick.css")}}" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="{{url("admin/dist/css/app.min.css")}}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- menu -->
<div class="menu">
    <div class="menu-header">
        <a href="{{route('dashboard')}}" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="{{url("admin/assets/images/user/man_avatar3.jpg")}}"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">WEB E-commerce</div>
                    <small class="text-muted">Admin</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="{{route("login")}}" class="dropdown-item d-flex align-items-center text-danger">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
        </div>
        <ul>
            <li>
                <a  href="{{route('dashboard')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin_users')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin_category')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Categories</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin_product-list')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin_orders')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Orders</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- ./  menu -->
<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    <div class="header">
        <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
            <a href="#">
                <i class="bi bi-list"></i>
            </a>
        </div>

        <div class="page-title">Overview</div>
        <form class="search-form">
            <div class="input-group">
                <button class="btn btn-outline-light" type="button" id="button-addon1">
                    <i class="bi bi-search"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search..."
                       aria-label="Example text with button addon" aria-describedby="button-addon1">
                <a href="#" class="btn btn-outline-light close-header-search-bar">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </form>
        <!-- Header mobile buttons -->
        <div class="header-mobile-buttons">
            <a href="#" class="search-bar-btn">
                <i class="bi bi-search"></i>
            </a>
        </div>
        <!-- ./ Header mobile buttons -->
    </div>
    <!-- ./ header -->

    <!-- content -->
    @yield('admin_content')
    <!-- content-footer -->
    <footer class="content-footer">
        <!-- <div>© 2022 - <a href="">OOP</a></div> -->
    </footer>
    <!-- ./ content-footer -->

</div>
<!-- ./ layout-wrapper -->

<!-- Bundle scripts -->
<script src="{{url("admin/libs/bundle.js")}}"></script>

<!-- Apex chart -->
<script src="{{url("admin/libs/charts/apex/apexcharts.min.js")}}"></script>

<!-- Slick -->
<script src="{{url("admin/libs/slick/slick.min.js")}}"></script>

<!-- Examples -->
<script src="{{url("admin/dist/js/examples/dashboard.js")}}"></script>

<!-- Main Javascript file -->
<script src="{{url("admin/dist/js/app.min.js")}}"></script>

{{--<script src="{{url("admin/libs/ckeditor5/ckeditor.js")}}"></script>--}}
<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>

    CKEDITOR.replace('description');
</script>


</body>
</html>

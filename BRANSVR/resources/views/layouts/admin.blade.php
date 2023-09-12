<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('plugin/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
    <div class="sidebar pe-4 pb-3 bg-light">
        <nav class="navbar navbar-dark">
            <a href="{{ route('admin.home.index') }}" class="navbar-brand mx-4 mb-3">
                <h5 class="" style="color: #F28123"><i class="fa fa-user-edit me-2"></i>ADMIN CONTROL</h5>
            </a>
            
            <div class="navbar-nav w-100">
                <a href="{{ route('admin.home.index') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="{{ route('admin.home.index') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="#" class="dropdown-item nav-link">Buttons</a>
                        <a href="#" class="dropdown-item nav-link">Typography</a>
                        <a href="#" class="dropdown-item nav-link">Other Elements</a>
                    </div>
                </div>
                <a href="{{ route('admin.product.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Product</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Form</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-dark sticky-top px-4 py-0">
            <a href="{{ route('admin.home.index') }}" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit" style="color: #F28123"></i></h2>
            </a>
            <a href="{{ route('admin.home.index') }}" class="sidebar-toggler bg-dark flex-shrink-0">
                <i class="fa fa-bars" style="color: #F28123"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control bg-light border-1" type="search" placeholder="Search">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="{{ route('admin.home.index') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Message</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                        <a href="{{ route('admin.home.index') }}" class="dropdown-item ">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="{{ route('admin.home.index') }}" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="{{ route('admin.home.index') }}" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="{{ route('admin.home.index') }}" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ route('admin.home.index') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notificatin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end  border-0 rounded-0 rounded-bottom m-0">
                        <a href="{{ route('admin.home.index') }}" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="{{ route('admin.home.index') }}" class="dropdown-item">
                            <h6 class="fw-normal mb-0">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="{{ route('admin.home.index') }}" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="{{ route('admin.home.index') }}" class="dropdown-item text-center">See all notifications</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ route('admin.home.index') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="{{ asset('/img/undraw_profile.svg') }}" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">John Doe</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                        <a href="{{ route('admin.home.index') }}" class="dropdown-item">My Profile</a>
                        <a href="{{ route('admin.home.index') }}" class="dropdown-item">Settings</a>
                        <form id="logout" action="{{route('logout')}}" method="POST">
                            <a role="button" class="dropdown-item"
                            onclick="document.getElementById('logout').submit();">Log Out</i></a>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
        @yield('content')

        <a href="{{ route('admin.home.index') }}" class="btn btn-lg btn-lg-square back-to-top" style="background-color: #F28123"><i class="bi bi-arrow-up"></i></a>

    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright <b>Nhóm 10:</b> <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="{{ route('admin.home.index') }}">Nguyễn Minh Thư</a> -*-
                     <b>22-0-21093</b><br>
                     <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="{{ route('admin.home.index') }}">Hoàng Thị Kim Anh</a> -*-
                     <b>22-1-21166</b>
            </small>
        </div>
    </div>
    <!-- footer -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    <script src="{{asset('plugin/chart/chart.min.js')}}"></script>
    <script src="{{asset('plugin/easing/easing.min.js')}}"></script>
    <script src="{{asset('plugin/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('plugin/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('plugin/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('plugin/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('plugin/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('js/main_admin.js')}}"></script>
</body>

</html>

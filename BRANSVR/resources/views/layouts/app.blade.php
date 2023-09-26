<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap -->
    <link href="{{asset('plugin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/loginAndregister.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('/plugin/fontawesome/css/all.min.css')}}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="{{asset('css/style.css')}}">

	
    <title>@yield('title', 'Mỹ Phẩm Store')</title>
</head>

<body>

<header>
    <div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="{{route('home.index')}}">
								<img src="{{asset('img/logo.avif')}}" alt="" style="margin-top: -10px">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="{{route('home.index')}}">Home</a></li>
								<li><a href="{{ route('product.index') }}" style="color: #f28123">Shop</a>
									<ul class="sub-menu">
										<li><a href="{{ route('product.index') }}">Shop</a></li>
										<li><a href="{{route('myaccount.orders')}}">Check Out</a></li>
										<li><a href="{{ route('cart.index') }}">Cart</a></li>
									</ul>
								</li>
								<li><a href="{{route('home.about')}}" style="color: #f28123">About</a></li>							
								<li>
									<div class="header-icons">
                                        <ul>
                                            <li><a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search" style="color: #f28123"></i></a></li>
                                            @guest
                                            <li><a href="{{ route('login') }}"><i class="fa-solid fa-user" style="color: #f28123"></i></a></li>
                                            @else
                                            <li><a href="{{route('cart.index')}}"><i class="fas fa-shopping-cart" style="color: #f28123"></i></a></li>
                                            <li><a href="{{route('admin.home.index')}}"><i class="fa-solid fa-toolbox" style="color: #f28123"></i></a></li>
                                            <li>
											<form id="logout" action="{{route('logout')}}" method="POST">
                                            <a role="button"
                                            onclick="document.getElementById('logout').submit();"><i class="fa-solid fa-right-from-bracket" style="color: #f28123"></i></a>
                                            @csrf
                                            </form>
                                            </li>
                                            @endguest
                                        </ul>   
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search" style="color: #f28123"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->
</header>


    <!-- header -->
    <div class="container my-4">
        @yield('content')
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright <b>Nhóm 10:</b> <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="#">Nguyễn Minh Thư</a> -*-
                     <b>22-0-21093</b><br>
                     <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="#">Hoàng Thị Kim Anh</a> -*-
                     <b>22-1-21166</b>
            </small>
        </div>
		<button style="background-color:#f28123; width:3%; float: right;margin-top: -40px" type="button"
                class="btn btn-floating btn-lg opacity-50" id="btn-back-to-top"><i class="fa-solid fa-angle-up"
                    style="color: #ffffff;"></i></button>
            <script>
                //Get the button
                let mybutton = document.getElementById("btn-back-to-top");

                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction();
                };

                function scrollFunction() {
                    if (
                        document.body.scrollTop > 20 ||
                        document.documentElement.scrollTop > 20
                    ) {
                        mybutton.style.display = "block";
                    } else {
                        mybutton.style.display = "none";
                    }
                }
                // When the user clicks on the button, scroll to the top of the document
                mybutton.addEventListener("click", backToTop);

                function backToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <!-- jquery -->
	<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('plugin/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('js/main.js')}}"></script>
</body>

</html>

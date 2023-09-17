<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap -->
    <link href="<?php echo e(asset('plugin/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('/css/loginAndregister.css')); ?>">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php echo e(asset('/plugin/fontawesome/css/all.min.css')); ?>">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" type="text/css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
	<!-- animate css -->
	<link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?php echo e(asset('css/meanmenu.min.css')); ?>">
	<!-- main style -->
	<link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
	<!-- responsive -->
	<link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
    <!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('img/favicon.png')); ?>">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="<?php echo e(asset('css/style.css')); ?>">

	
    <title><?php echo $__env->yieldContent('title', 'Mỹ Phẩm Store'); ?></title>
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
							<a href="<?php echo e(route('home.index')); ?>">
								<img src="<?php echo e(asset('img/logo.png')); ?>" alt="" style="margin-top: -10px">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="<?php echo e(route('product.index')); ?>">Shop</a>
									<ul class="sub-menu">
										<li><a href="<?php echo e(route('product.index')); ?>">Shop</a></li>
										<li><a href="<?php echo e(route('myaccount.orders')); ?>">Check Out</a></li>
										<li><a href="<?php echo e(route('cart.index')); ?>">Cart</a></li>
									</ul>
								</li>
								<li><a href="<?php echo e(route('home.about')); ?>">About</a></li>
								<li class="current-list-item"><a href="<?php echo e(route('home.index')); ?>">Home</a></li>
								
								<li><a href="#">News</a></li>
								<li><a href="#">Contact</a></li>
								
								<li>
									<div class="header-icons">
                                        <ul>
                                            <li><a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a></li>
                                            <?php if(auth()->guard()->guest()): ?>
                                            <li><a href="<?php echo e(route('login')); ?>"><i class="fa-solid fa-user"></i></a></li>
                                            <?php else: ?>
                                            <li><a href="<?php echo e(route('cart.index')); ?>"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="<?php echo e(route('admin.home.index')); ?>"><i class="fa-solid fa-toolbox"></i></a></li>
                                            <li>
											<form id="logout" action="<?php echo e(route('logout')); ?>" method="POST">
                                            <a role="button"
                                            onclick="document.getElementById('logout').submit();"><i class="fa-solid fa-right-from-bracket"></i></a>
                                            <?php echo csrf_field(); ?>
                                            </form>
                                            </li>
                                            <?php endif; ?>
                                        </ul>   
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
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
        <?php echo $__env->yieldContent('content'); ?>
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
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <!-- jquery -->
	<script src="<?php echo e(asset('js/jquery-1.11.3.min.js')); ?>"></script>
	<!-- bootstrap -->
	<script src="<?php echo e(asset('plugin/bootstrap/js/bootstrap.min.js')); ?>"></script>
	<!-- count down -->
	<script src="<?php echo e(asset('js/jquery.countdown.js')); ?>"></script>
	<!-- isotope -->
	<script src="<?php echo e(asset('js/jquery.isotope-3.0.6.min.js')); ?>"></script>
	<!-- waypoints -->
	<script src="<?php echo e(asset('js/waypoints.js')); ?>"></script>
	<!-- owl carousel -->
	<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
	<!-- magnific popup -->
	<script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
	<!-- mean menu -->
	<script src="<?php echo e(asset('js/jquery.meanmenu.min.js')); ?>"></script>
	<!-- sticker js -->
	<script src="<?php echo e(asset('js/sticker.js')); ?>"></script>
	<!-- main js -->
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\BRANSVR\resources\views/Layouts/app.blade.php ENDPATH**/ ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="<?php echo e(asset('/css/admin.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title><?php echo $__env->yieldContent('title', 'Admin - Online Store'); ?></title>
</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-dark">
            <a href="<?php echo e(route('admin.home.index')); ?>" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="<?php echo e(route('admin.home.index')); ?>" class="nav-link text-white">- Admin - Home</a></li>
                <li><a href="<?php echo e(route('admin.product.index')); ?>" class="nav-link text-white">- Admin - Products</a></li>
                <li>
                    <a href="<?php echo e(route('home.index')); ?>" class="mt-2 btn bg-primary text-white">Go back to the home
                        page</a>
                </li>
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img class="img-profile rounded-circle" src="<?php echo e(asset('/img/undraw_profile.svg')); ?>">
            </nav>
            <div class="g-0 m-5">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Daniel Correa
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\MyPhamStore\resources\views/layouts/admin.blade.php ENDPATH**/ ?>
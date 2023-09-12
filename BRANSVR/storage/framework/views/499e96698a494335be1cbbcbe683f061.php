
<?php $__env->startSection('title', $viewData['title']); ?>

<div class="homepage-slider">
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle" style="font-size: 50px">SVR</p>
                            <h1>Buy one get the second</h1>
                            <div class="hero-btns">
                                <a href="<?php echo e(route('product.index')); ?>" class="boxed-btn">Collection</a>
                                <a href="#" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- single home slider -->
<div class="single-homepage-slider homepage-bg-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-right">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle">Mega Sale Going On!</p>
                        <h1>Get December Discount</h1>
                        <div class="hero-btns">
                            <a href="<?php echo e(route('product.index')); ?>" class="boxed-btn">Visit Shop</a>
                            <a href="#" class="bordered-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end home page slider -->
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="<?php echo e(asset('/img/products/product-1.png')); ?>" alt="" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="<?php echo e(asset('/img/safe.png')); ?>" alt="" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="<?php echo e(asset('/img/submarine.png')); ?>" alt="" class="img-fluid rounded">
    </div>
</div>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\BRANSVR\resources\views/home/index.blade.php ENDPATH**/ ?>
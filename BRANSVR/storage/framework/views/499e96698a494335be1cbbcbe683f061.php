
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
<div class="container py-5">
    <div class="row">
        <div class="col">
            <h2>Featured Product</h2>
        </div>
    </div>
</div>

<div class="row">
    <?php $__currentLoopData = $viewData['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-6 col-lg-4 mb-2">
        <a href="<?php echo e(route('product.show', ['id' => $product['id']])); ?>">
            <img src="<?php echo e(asset('/storage/' . $product->getImage())); ?>" alt="" class="img-fluid rounded">
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="container py-5">
      <div class="row row-cols-2 row-cols-md-4">
        <div class="col-auto">
          <span class="rounded float-start"><i class="fa-solid fa-phone-flip fa-lg" style="color: #F28123;"></i><b> Give us a call:</b></span>
          <span class="rounded float-start px-2">
            <p class="">+00 (123) 456 7890</p>
          </span>
        </div>
        <div class="col-auto">
          <span class="rounded float-start"><i class="fa-solid fa-envelope fa-lg" style="color: #F28123;"></i><b> Send us a mail:</b></span>
          <span class="rounded float-start px-2">
            <p class="">support@domain.com</p>
          </span>
        </div>
        <div class="col-auto">
          <span class="rounded float-start"><i class="fa-solid fa-clock fa-lg" style="color: #F28123;"></i><b> Monday - Saturday:</b></span>
          <span class="rounded float-start px-2">
            <p class="fs-">08.00am - 18.00pm</p>
          </span>
        </div>
        <div class="col-auto">
          <span class="rounded float-start"><i class="fa-solid fa-location-dot fa-lg"
              style="color: #F28123;"></i><b> Come visit us:</b></span>
          <span class="rounded float-start px-2">
            <p class="">Direction to <a class="link-underline link-underline-opacity-0" style="color: #F28123;"
                href="#">our location</a></p>
          </span>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\BRANSVR\resources\views/home/index.blade.php ENDPATH**/ ?>
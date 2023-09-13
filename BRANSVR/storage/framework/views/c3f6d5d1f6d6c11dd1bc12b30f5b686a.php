
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('subtitle', $viewData['subtitle']); ?>
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>See more Details</p>
                    <h1>Single Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startSection('content'); ?>
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="<?php echo e(asset('/storage/'.$viewData["product"]->getImage())); ?>"
                    class="img-fluid rounded-start">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3><?php echo e($viewData['product']['name']); ?></h3>
                    <p class="single-product-pricing"><?php echo e($viewData['product']['price']); ?>.000đ</p>
                    <p><?php echo e($viewData['product']['description']); ?></p>
                    <div class="single-product-form">
                        <form method="POST" action="<?php echo e(route('cart.add', ['id' => $viewData['product']->getId()])); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="number" placeholder="0" name="quantity" value="1" min="1" max="10">
                        
                            <button type="submit"class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </form>
                        <p><strong>Categories: </strong>Fruits, Organic</p>
                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\BRANSVR\resources\views/product/show.blade.php ENDPATH**/ ?>
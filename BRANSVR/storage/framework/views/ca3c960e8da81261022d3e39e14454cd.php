
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('subtitle', $viewData['subtitle']); ?>
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Fresh and Organic</p>
                    <h1>Shop</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startSection('content'); ?>
<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php $__currentLoopData = $viewData['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col mb-5">
            <div class="card h-100">
                <!-- Sale badge-->
                
                <!-- Product image-->
                <!--img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." /-->
                <a href="<?php echo e(route('product.show', ['id' => $product['id']])); ?>"><img class="card-img-top" style="width: 450px; height: 200px;"
                src="<?php echo e(asset('/storage/' . $product->getImage())); ?>" alt="..." /></a>
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder"><a style="color: black" href="<?php echo e(route('product.show', ['id' => $product['id']])); ?>"><?php echo e($product['name']); ?></a></h5>
                        <!-- Product reviews-->
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                            <!-- Product price-->
                        <span class=""><?php echo e($product['price']); ?>.000đ</span>
                    </div>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                        <a class="btn btn-outline-dark mt-auto" href="<?php echo e(route('product.show', ['id' => $product['id']])); ?>">
                            Add to cart</a></div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\BRANSVR\resources\views/product/index.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>All the products you have selected are here</p>
                    <h1>Cart</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startSection('content'); ?>
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th>Id</th>
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $viewData["products"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="table-body-row">
                                <td class="product-remove"><a href="<?php echo e(route('cart.remove', ['id' => $product->id])); ?>">
                                    <i class="far fa-window-close"></i></a></td>
                                <td><?php echo e($product->getId()); ?></td>
                                <td class="product-image"><img src="<?php echo e(asset('/storage/' . $product->getImage())); ?>"
                                    class="img-fluid rounded-start"></td>
                                <td class="product-name"><?php echo e($product->getName()); ?></td>
                                <td class="product-price"><?php echo e($product->getPrice()); ?>.000đ</td>
                                <td class="product-quantity"><?php echo e(session('products')[$product->getId()]); ?></td>
                            </tr>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td><?php echo e($viewData["total"]); ?>.000đ</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        <a href="<?php echo e(route('cart.purchase')); ?>" class="boxed-btn black">Purchase</a>
                        <a href="<?php echo e(route('myaccount.orders')); ?>" class="boxed-btn">Check out</a>
                    </div>
                    <div class="cart-buttons">
                        <a href="<?php echo e(route('cart.delete')); ?>" class="boxed-btn">Remove all products</a>
                        <a href="<?php echo e(route('product.index')); ?>" class="boxed-btn">Buy more</a>
                    </div>
                </div>

                <div class="coupon-section">
                    <h3>Apply Coupon</h3>
                    <div class="coupon-form-wrap">
                        <form action="<?php echo e(route('cart.index')); ?>">
                            <input class="form-control " style="height: 50px;" type="text" placeholder="Coupon">
                            <br>
                            <input class="text-white" type="submit" value="Apply">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\BRANSVR\resources\views/cart/index.blade.php ENDPATH**/ ?>
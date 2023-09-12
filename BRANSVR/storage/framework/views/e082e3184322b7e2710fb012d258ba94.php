
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Fresh and Organic</p>
                    <h1>Check Out Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startSection('content'); ?>
<?php $__empty_1 = true; $__currentLoopData = $viewData["orders"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="card mb-4">
        <div class="card-header">
            Order #<?php echo e($order->getId()); ?>

        </div>
        <div class="card-body">

            <b>Date:</b> <?php echo e($order->getCreatedAt()); ?><br />
            <b>Total:</b> $<?php echo e($order->getTotal()); ?><br />
            <table class="table table-bordered table-striped text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">Item ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $order->getItems(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->getId()); ?></td>
                    <td>
                        <a class="link-success"
                        href="<?php echo e(route('product.show', ['id' => $item->getProduct()->getId()])); ?>">
                        <?php echo e($item->getProduct()->getName()); ?>

                    </a>
                    </td>
                    <td>$<?php echo e($item->getPrice()); ?></td>
                    <td><?php echo e($item->getQuantity()); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="alert alert-danger" role="alert">
    Seems to be that you have not purchased anything in our store =(.
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\BRANSVR\resources\views/myaccount/order.blade.php ENDPATH**/ ?>
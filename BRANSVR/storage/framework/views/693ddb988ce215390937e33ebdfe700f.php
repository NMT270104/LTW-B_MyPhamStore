
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('subtitle', $viewData['subtitle']); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-3">
<div class="row g-0">
<div class="col-md-4">
    <img src="<?php echo e(asset('/storage/'.$viewData["product"]->getImage())); ?>"
    class="img-fluid rounded-start">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title">
<?php echo e($viewData['product']['name']); ?> ($<?php echo e($viewData['product']['price']); ?>)
</h5>
<p class="card-text"><?php echo e($viewData['product']['description']); ?></p>

<p class="card-text">
    <form method="POST" action="<?php echo e(route('cart.add', ['id' => $viewData['product']->getId()])); ?>">
        <div class="row">
        <?php echo csrf_field(); ?>
            <div class="col-auto">
                <div class="input-group col-auto">
                    <div class="input-group-text">Quantity</div>
                    <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
                </div>
            </div>
            <div class="col-auto">
                <button class="btn bg-primary text-white" type="submit">Add to cart</button>
            </div>
        </div>
    </form>
</p>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineStore\resources\views/product/show.blade.php ENDPATH**/ ?>
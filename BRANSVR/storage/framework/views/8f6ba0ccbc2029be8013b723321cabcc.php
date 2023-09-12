
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('subtitle', $viewData['subtitle']); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-4 ms-auto">
        <p class="Lead"><?php echo e($viewData['description']); ?></p>
    </div>
    <div class="col-lg-4 ms-auto">
        <p class="Lead"><?php echo e($viewData['author']); ?></p>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineStore\resources\views/home/about.blade.php ENDPATH**/ ?>
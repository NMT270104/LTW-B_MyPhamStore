
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Admin Panel - Home Page
        </div>
        <div class="card-body">
            Wellcom to the Amin panel...
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineStore\resources\views/admin/home/index.blade.php ENDPATH**/ ?>
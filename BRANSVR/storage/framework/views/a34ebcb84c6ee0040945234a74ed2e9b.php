
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid pt-4 p-4 ">
    <div class="row g-4 justify-content-center">
        <div class="col-auto" style="width: 50%;">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4 text-center" style="color: #F28123">Edit Product</h6>
                <?php if($errors->any()): ?>
                <ul class="alert alert-danger list-unstyled">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>- <?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('admin.product.update',['id' => $viewData['products']->getId()])); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Name Product:</label>
                        <input name="name" value="<?php echo e($viewData['products']->getName()); ?>" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Price:</label>
                        <input name="price" value="<?php echo e($viewData['products']->getPrice()); ?>" type="number" min="0" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Description</label>
                        <textarea class="form-control" name="description" rows="3"><?php echo e($viewData['products']->getDescription()); ?>

                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Image:</label>
                        <input class="form-control form-control-sm " id="formFileSm" type="file" name="image">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <button type="submit" class="btn" style="background-color: #F28123">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\BRANSVR\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>
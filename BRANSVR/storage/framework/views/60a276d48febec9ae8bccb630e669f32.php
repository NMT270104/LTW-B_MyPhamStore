
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
    <div class="card mb-4">
        <div class="card-header ">
            Create Products
        </div>
        <div class="card-body">
            <?php if($errors->any()): ?>
                <ul class="alert alert-danger list-unstyled">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>- <?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('admin.product.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> <!– bảo vệ sự tấn công CSRF-->
                <!-- add form controls to create product -->
                <div class="row justify-content-between">
                    
                    <div class="col-auto" style="width: 50%">
                        <label class="form-label">Name:</label>
                        <input name="name" value="<?php echo e(old('name')); ?>" type="text" class="form-control">
                    </div>
                    
                    <div class="col-auto" style="width: 50%">
                        <label class="form-label">Price:</label>
                        <input name="price" value="<?php echo e(old('price')); ?>" type="number" min="0" class="form-control">
                    </div>
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>
                        
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3"><?php echo e(old('description')); ?>

                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            Manage Product
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $viewData['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($product->getId()); ?></td>
                    <td><?php echo e($product->getName()); ?></td>
                    <td>
                        <a class="btn btn-primary"
                            href="<?php echo e(route('admin.product.edit', ['id'=> $product->getId()])); ?>">
                            <i class="bi-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('admin.product.delete', $product->getId())); ?>"
                        method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger">
                                <i class="bi-trash"></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>    
            </table>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\BRANSVR\resources\views/admin/product/index.blade.php ENDPATH**/ ?>
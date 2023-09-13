
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 p-4 ">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-5">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4 text-center" style="color: #F28123">Create Product</h6>
                <?php if($errors->any()): ?>
                <ul class="alert alert-danger list-unstyled">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>- <?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('admin.product.store')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?> <!– bảo vệ sự tấn công CSRF-->
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Name Product:</label>
                        <input name="name" value="<?php echo e(old('name')); ?>" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Price:</label>
                        <input name="price" value="<?php echo e(old('price')); ?>" type="number" min="0" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Description</label>
                        <textarea class="form-control" name="description" rows="3"><?php echo e(old('description')); ?>

                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Image:</label>
                        <input class="form-control form-control-sm " id="formFileSm" type="file" name="image">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <button type="submit" class="btn" style="background-color: #F28123">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-7">
            <div class="col-sm-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4 text-center" style="color: #F28123">List Products</h6>
                    <table class="table table-hover text-white table-dark">
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
                                <a class="btn btn-primary rounded-circle"
                                href="<?php echo e(route('admin.product.edit', ['id'=> $product->getId()])); ?>">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('admin.product.delete', $product->getId())); ?>"
                                    method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger rounded-circle">
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
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LTW-B_Project-MyPhamStore\BRANSVR\resources\views/admin/product/index.blade.php ENDPATH**/ ?>
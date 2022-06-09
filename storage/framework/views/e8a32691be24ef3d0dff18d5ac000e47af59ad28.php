<?php $__env->startSection('admin.title'); ?> Edit Product <?php $__env->stopSection(); ?>

<?php $__env->startSection("admin.content"); ?>

    <div id="content">


        <div class="container-fluid my-5">


            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit <?php echo e($product->name); ?></h1>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <?php if(session()->has('success')): ?>
                        <div class="container mt-4">
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('success')); ?>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(session()->has('errorMessage')): ?>
                        <div class="container mt-4">
                            <div class="alert alert-danger" role="alert">
                                <?php echo e(session('errorMessage')); ?>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php echo $__env->make('admin.products.form', ['action' => 'products.update'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>

            </div>



        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>
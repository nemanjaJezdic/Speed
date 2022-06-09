<?php $__env->startSection('admin.title'); ?> Admin | Products <?php $__env->stopSection(); ?>

<?php $__env->startSection("admin.content"); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Products
        </div>
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

        <div class="my-4">
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Add new Product</a>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Active</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($p->name); ?></td>
                            <td>
                                <img src="<?php echo e(asset("assets/images/$p->image")); ?>" class="img-fluid admin-img" />
                            </td>
                            <td><?php echo e($p->price); ?></td>
                            <td>
                                <?php if($p->is_active == 1): ?>
                                    Yes
                                <?php else: ?>
                                    No
                                <?php endif; ?>
                            </td>
                            <td>
                                <form action="<?php echo e(route('products.edit', ['product' => $p->id])); ?>" method="GET">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-primary" />Edit</button>
                                </form>
                            </td>
                            <td>

                                <form action="<?php echo e(route('products.destroy', ['product' => $p->id])); ?>" method="POST" class="delete-form">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>

                                    <button type="submit" class="btn btn-danger" />Delete</button>

                                </form>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($products->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/admin/products/index.blade.php ENDPATH**/ ?>
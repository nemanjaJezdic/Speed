<?php $__env->startSection('admin.title'); ?> Admin | UsersActions <?php $__env->stopSection(); ?>

<?php $__env->startSection("admin.content"); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            User Actions
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
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>User</th>
                        <th>User Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($a->action); ?></td>
                            <td><?php echo e($a->user->first_name . ' ' . $a->user->last_name); ?></td>
                            <td><?php echo e($a->user->email); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/admin/actions/index.blade.php ENDPATH**/ ?>
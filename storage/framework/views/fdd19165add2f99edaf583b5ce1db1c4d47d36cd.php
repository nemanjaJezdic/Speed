<?php $__env->startSection('admin.title'); ?> Admin | Users <?php $__env->stopSection(); ?>

<?php $__env->startSection("admin.content"); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Users
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
            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary">Add new User</a>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($u->first_name); ?></td>
                            <td><?php echo e($u->last_name); ?></td>
                            <td><?php echo e($u->email); ?></td>
                            <td>
                                <form action="<?php echo e(route('users.edit', ['user' => $u->id])); ?>" method="GET">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-primary" />Edit</button>
                                </form>
                            </td>
                            <td>

                                <form action="<?php echo e(route('users.destroy', ['user' => $u->id])); ?>" method="POST" class="delete-form">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>

                                    <button type="submit" class="btn btn-danger" />Delete</button>

                                </form>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/admin/users/index.blade.php ENDPATH**/ ?>
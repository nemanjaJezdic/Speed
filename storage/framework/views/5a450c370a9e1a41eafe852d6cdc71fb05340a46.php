<form action="<?php if($action == "users.update"): ?> <?php echo e(route($action, $user->id)); ?> <?php else: ?> <?php echo e(route($action)); ?> <?php endif; ?>" method="POST" enctype="multipart/form-data">

    <?php echo csrf_field(); ?>
    <?php if($action == 'users.update'): ?>
        <?php echo method_field("PUT"); ?>
    <?php endif; ?>

    <div class="form-group">
        <label for="first_name">Name</label>
        <input class="form-control" id="first_name" name="first_name" value="<?php echo e($user->first_name ?? old('first_name')); ?>" />
        <p class="help-block">Example: Pera</p>
        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger">
            <?php echo e($message); ?>

        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label for="last_name">Surname</label>
        <input class="form-control" id="last_name" name="last_name" value="<?php echo e($user->last_name ?? old('last_name')); ?>" />
        <p class="help-block">Example: Peric</p>
        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger">
            <?php echo e($message); ?>

        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label for="email">Email</label>
        <input class="form-control" id="email" name="email" value="<?php echo e($user->email ?? old('email')); ?>" />
        <p class="help-block">Example: pera@gmail.com</p>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger">
            <?php echo e($message); ?>

        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label for="password">Password</label>
        <input class="form-control" id="password" name="password" value="<?php echo e($user->password ?? old('password')); ?>" />
        <p class="help-block">Example: pera123</p>
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger">
            <?php echo e($message); ?>

        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
<?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/admin/users/form.blade.php ENDPATH**/ ?>
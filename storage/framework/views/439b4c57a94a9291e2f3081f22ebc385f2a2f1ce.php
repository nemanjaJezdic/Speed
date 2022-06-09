<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item">
            <a class="nav-link <?php if(request()->routeIs($link->route)): ?> active <?php endif; ?>" href="<?php echo e(route($link->route )); ?>" ><?php echo e($link->title); ?></a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if(session()->has('user') && session()->get('user')->role_id == 1): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route("users.index")); ?>" >Admin panel</a>
        </li>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/frontend/fixed/nav.blade.php ENDPATH**/ ?>
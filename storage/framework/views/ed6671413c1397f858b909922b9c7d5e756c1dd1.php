<div class="navbar navbar-inverse set-radius-zero" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="right-div">
            <a href="<?php echo e(route("logout")); ?>" class="btn btn-info pull-right">LOG ME OUT</a>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <?php
                        $navItems = [
                            ['Users', 'users.index'],
                           ['Products', 'products.index'],
                           ['User actions', 'useractions.index'],
                           ['Home', 'home']
                        ];
                    ?>
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item <?php if(request()->routeIs($item[1])): ?> active <?php endif; ?>">
                                <a class="nav-link" href="<?php echo e(route($item[1])); ?>">
                                    <span><?php echo e($item[0]); ?></span>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/admin/fixed/header.blade.php ENDPATH**/ ?>
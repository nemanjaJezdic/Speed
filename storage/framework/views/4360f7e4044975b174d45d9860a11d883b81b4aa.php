<div class="header_section">
    <div class="row">
        <div class="col-sm-4">
            <div class="search_icon"></div>
        </div>
        <div class="col-sm-4">
            <div class="logo"><a href="<?php echo e(route("home")); ?>"><img src="<?php echo e(asset("assets/images/logo.png")); ?>"></a></div>
        </div>
        <div class="col-sm-4">
            <div class="togle_3">
                <div class="left_main">
                    <div class="menu_main">

                        <?php if(session()->has('user')): ?>

                            <a href="<?php echo e(route("logout")); ?>"><i class="fa fa-fw fa-user"></i>Log out</a>

                        <?php else: ?>
                        <a href="<?php echo e(route("login")); ?>"><i class="fa fa-fw fa-user"></i> Login</a>
                        <a href="<?php echo e(route("register")); ?>">Register</a>
                            <?php endif; ?>

                    </div>
                </div>
                <div class="right_main">
                    <div class="togle_main"><a class="openbtn" onclick="openNav()"><img src="<?php echo e(asset("assets/images/togle-menu-icon.png")); ?>" style="max-width: 100%;"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/frontend/fixed/header.blade.php ENDPATH**/ ?>
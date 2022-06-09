<?php $__env->startSection("title"); ?> Speed | Login <?php $__env->stopSection(); ?>
<?php $__env->startSection("keyword"); ?> Contact us,bike,users <?php $__env->stopSection(); ?>
<?php $__env->startSection("description"); ?> This is our contact form,feel free to call us <?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_text"><strong>Log in</strong></h1>
        </div>
        <div class="contact_main">
            <div class="enput_section">
                <div class="email_box">
                    <div class="input_main">
                        <div class="container">

                            <?php if(session('loginFail')): ?>

                                <div class="alert alert-danger" role="alert">
                                    <?php echo e(session('loginFail')); ?>

                                </div>

                            <?php endif; ?>

                            <form action="<?php echo e(route("login")); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="email" class="email-bt <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email" name="email" id="email">
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
                                </div>
                                <div class="form-group">
                                    <input type="password" class="email-bt <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" name="password" id="password">
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
                                <div class="send_btn">
                                    <button type="submit" class="main_bt">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("frontend.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/frontend/pages/login.blade.php ENDPATH**/ ?>
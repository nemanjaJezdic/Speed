<form action="<?php if($action == "products.update"): ?> <?php echo e(route($action, $product->id)); ?> <?php else: ?> <?php echo e(route($action)); ?> <?php endif; ?>" method="POST" enctype="multipart/form-data">

    <?php echo csrf_field(); ?>
    <?php if($action == 'products.update'): ?>
        <?php echo method_field("PUT"); ?>
    <?php endif; ?>

    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" id="name" name="name" value="<?php echo e($product->name ?? old('name')); ?>" />

        <?php $__errorArgs = ['name'];
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
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="5"><?php echo e($product->description ?? old('description')); ?></textarea>

        <?php $__errorArgs = ['description'];
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
        <label for="price">Price</label>
        <input class="form-control" id="price" name="price" value="<?php echo e($product->price ?? old('name')); ?>" />

        <?php $__errorArgs = ['price'];
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
        <label for="gender">Active</label>
        <div class="radio">
            <input type="radio" name="is_active" id="active_yes" value="1" <?php if(isset($product) && $product->is_active == 1): ?> checked <?php endif; ?> />  Yes
        </div>

        <div class="radio">
            <input type="radio" name="is_active" value="0" <?php if(isset($product) && $product->is_active == 0): ?> checked <?php endif; ?>  />  No
        </div>

        <?php $__errorArgs = ['active'];
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

    <?php
        $image= ['Image', 'image'];

    ?>
        <div class="form-group">
            <label for="image"><?php echo e($image[0]); ?></label>
            <input type="file" name="<?php echo e($image[1]); ?>" id="<?php echo e($image[1]); ?>" />

            <?php $__errorArgs = [$image[1]];
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
<?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/admin/products/form.blade.php ENDPATH**/ ?>
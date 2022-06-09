<?php $__env->startSection("title"); ?> Speed | Products <?php $__env->stopSection(); ?>
<?php $__env->startSection("keyword"); ?> Contact us,bike,users <?php $__env->stopSection(); ?>
<?php $__env->startSection("description"); ?> This is our contact form,feel free to call us <?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <div class="container">
        <h1 class="contact_text"><strong>Shop</strong></h1>
        <form action="<?php echo e(route("products")); ?>" method="GET">
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="keyword" placeholder="Keyword" class="form-control">
                </div>

                <div class="col-md-2">
                    <input type="submit" placeholder="Keyword" value="Search" class="btn btn-primary">
                </div>
            </div>
        </form>
        <div class="row mt-3 justify-content-around">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make("frontend.component.productcom", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="mt-3">
            <?php echo e($products->links()); ?>

        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("frontend.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/frontend/pages/products.blade.php ENDPATH**/ ?>
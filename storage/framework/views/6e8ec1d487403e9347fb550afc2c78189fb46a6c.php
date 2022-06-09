<?php $__env->startSection("title"); ?> Speed | Product <?php $__env->stopSection(); ?>
<?php $__env->startSection("keyword"); ?> Contact us,bike,users <?php $__env->stopSection(); ?>
<?php $__env->startSection("description"); ?> This is our contact form,feel free to call us <?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <div class="container">
           <h1 class="contact_text"><strong><?php echo e($product->name); ?></strong></h1>
        <div class="row justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo e(asset("assets/images/$product->image")); ?>" class="card-img-top" alt="...">
                <p class="p-1">Price : <?php echo e($product->price); ?>$</p>
                <p class="p-1"><?php echo e($product->description); ?></p>
                <a href="<?php echo e(route("products")); ?>" class="btn btn-primary">Return to Shop</a>
         </div>
    </div>

    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make("frontend.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/frontend/pages/product.blade.php ENDPATH**/ ?>
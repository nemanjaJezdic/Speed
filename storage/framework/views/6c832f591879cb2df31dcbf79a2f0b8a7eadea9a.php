<div class="card mt-3 " style="width: 18rem;">
    <img src="<?php echo e(asset("assets/images/$p->image")); ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title text-center"><?php echo e($p->name); ?></h5>
        <p class="card-text">Price : <?php echo e($p->price); ?>$</p>
        <a href="<?php echo e(route("product", ['product' => $p->id])); ?>" class="btn btn-secondary">View</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/frontend/component/productcom.blade.php ENDPATH**/ ?>
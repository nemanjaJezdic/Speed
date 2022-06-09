<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $__env->make("frontend.fixed.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

<?php echo $__env->make("frontend.fixed.nav", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div id="main">

  <?php echo $__env->make("frontend.fixed.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->yieldContent("content"); ?>


    <?php echo $__env->make("frontend.fixed.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

<?php echo $__env->make("frontend.fixed.scripts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/frontend/layout.blade.php ENDPATH**/ ?>
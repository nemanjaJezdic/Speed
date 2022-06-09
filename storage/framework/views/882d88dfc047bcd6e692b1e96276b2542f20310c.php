<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

 <?php echo $__env->make("admin.fixed.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
 <?php echo $__env->make("admin.fixed.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent("admin.content"); ?>


<?php echo $__env->make("admin.fixed.scripts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/admin/layout.blade.php ENDPATH**/ ?>
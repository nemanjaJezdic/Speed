<!-- Javascript files-->
<script src="<?php echo e(asset("assets/js/jquery.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/js/popper.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/js/bootstrap.bundle.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/js/jquery-3.0.0.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/js/plugin.js")); ?>"></script>
<!-- sidebar -->
<script src="<?php echo e(asset("assets/js/jquery.mCustomScrollbar.concat.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/js/custom.js")); ?>"></script>
<!-- javascript -->
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
        $('#myCarousel').carousel({
            interval: false
        });})
</script>

<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>
<?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/frontend/fixed/scripts.blade.php ENDPATH**/ ?>
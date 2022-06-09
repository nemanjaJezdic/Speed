<?php $__env->startSection("title"); ?> Speed | Author <?php $__env->stopSection(); ?>
<?php $__env->startSection("keyword"); ?> Contact us,bike,users <?php $__env->stopSection(); ?>
<?php $__env->startSection("description"); ?> This is our contact form,feel free to call us <?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_text"><strong>Author</strong></h1>

            <div id="author-page" class="container">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12 ">

                            <div class="text-center author-container">
                                <img src="<?php echo e(asset("assets/images/author.jpg")); ?>" alt="author"/>
                                <p>
                                    I would describe myself as positive hard working person that's ready for new challenges.
                                    So far i'm skilled in HTML,CSS,Bootstrap,C,Java,C#,JavaScript,Jquery,AJAX and i'm also trying to improve by learing new technologies.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div><

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("frontend.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-vezba1\resources\views/frontend/pages/author.blade.php ENDPATH**/ ?>
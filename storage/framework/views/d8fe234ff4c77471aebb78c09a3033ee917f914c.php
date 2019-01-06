<?php $__env->startSection('content'); ?>
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('<?php echo e(asset('media/photos/photo15@2x.jpg')); ?>');">
        <div class="hero bg-white overflow-hidden">
            <div class="hero-inner">
                <div class="content content-full text-center">
                    <h1 class="display-4 font-w700 mb-2">
                        Dash<span class="text-primary">mix</span> <span class="font-w300">+ Laravel</span>
                    </h1>
                    <h2 class="h3 font-w300 text-muted mb-5 invisible" data-toggle="appear" data-timeout="150">
                        Welcome to the starter kit! Build something amazing!
                    </h2>
                    <span class="m-2 d-inline-block invisible" data-toggle="appear" data-timeout="300">
                        <a class="btn btn-hero-success" href="/dashboard">
                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Enter Dashboard
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Main Title</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item">Generic</li>
                        <li class="breadcrumb-item active" aria-current="page">Blank</li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Modello Title</h3>
            </div>
            <div class="block-content">

 
                <form action="" method="POST" >
                    <legend>Add New</legend> 

                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title"  id="" placeholder="Input field">
                    </div>

                    <div class="form-group">
                        <label for="">GB</label>
                        <input type="text" class="form-control" name="gb"  id="" placeholder="Input field">
                    </div>
 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>  
 

            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="block-content">
    <div class="row push">
        <div class="col-md-12" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
            <div class="form-group row items-push mb-0">
                <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="custom-control custom-block custom-control-primary mb-1">
                            <input type="radio" class="custom-control-input" id="modello_<?php echo e($marca->id); ?>"
                                   name="modelloRadio" onclick="handleClickModello(this)" value="<?php echo e($marca->id); ?>">
                            <label class="custom-control-label" for="modello_<?php echo e($marca->id); ?>">
                                                    <span class="d-block font-w400 text-center my-3">
                                                        <span class="font-size-h4 font-w600"><?php echo e($marca->title); ?></span>
                                                    </span>
                            </label>
                            <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>


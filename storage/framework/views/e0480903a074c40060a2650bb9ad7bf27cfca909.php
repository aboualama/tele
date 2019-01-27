<div class="form-group">
    <label for="">Modello</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="">
    
</div>

<div class="form-group form-row">
    <div class="col-12">
        <label for="">Marca</label>
        <select class="js-select2 form-control" id="marca" name="marca">
            <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($marca->id); ?>"><?php echo e($marca->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="">IMG</label>
    <input type="file" class="form-control" name="img" id="img">
</div>
   


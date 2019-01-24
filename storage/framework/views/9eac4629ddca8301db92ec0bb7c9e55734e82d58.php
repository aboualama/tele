




<input type="text" style="display: none" id="Id" value="<?php echo e($modello->id); ?>">

<div class="form-group form-row">

    <div class="col-12 "> 
 		<label for="">Title</label>
        	<input type="text" class="form-control" placeholder="" id="title" name="title" value="<?php echo e($modello->title); ?>">
		<label for="">GB</label>
        	<input type="text" class="form-control" placeholder="" id="gb" name="gb" value="<?php echo e($modello->gb); ?>"> 
    </div>  
</div>  
<div class="form-group form-row">
    <div class="col-12">	
    	<label for="">Marca</label>
        <select class="js-select2 form-control" id="marca" name="marca"  value="<?php echo e($modello->marca->title); ?>">
                <option value="<?php echo e($modello->marca->id); ?>"><?php echo e($modello->marca->title); ?></option>
            <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($marca->id); ?>"><?php echo e($marca->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="">IMG</label>
    <input type="file" class="form-control" name="img"  id="img" value="<?php echo e($modello->img); ?>">
</div>

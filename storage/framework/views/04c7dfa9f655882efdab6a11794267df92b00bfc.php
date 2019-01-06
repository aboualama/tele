<input type="text" style="display: none" id="Id" value="<?php echo e($telefono->id); ?>">


   
					<div class="form-group form-row">
					    <div class="col-6">	
					    	<label for="">Marca</label>
					        <select class="js-select2 form-control" id="modello" name="modello">
					        	<option value="<?php echo e($telefono->modello->marca->id); ?>"><?php echo e($telefono->modello->marca->title); ?></option>
					            <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                <option value="<?php echo e($marca->id); ?>"><?php echo e($marca->title); ?></option>
					            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					        </select>
					    </div>
			 
					    <div class="col-6">	
					    	<label for="">Modello</label>
					        <select class="js-select2 form-control" id="modello" name="modello">
					        	<option value="<?php echo e($telefono->modello->id); ?>"><?php echo e($telefono->modello->title); ?></option>
					            <?php $__currentLoopData = $modellos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modello): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                <option value="<?php echo e($modello->id); ?>"><?php echo e($modello->title); ?></option>
					            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					        </select>
					    </div>
					</div>

                    <div class="form-group form-row"">
					    <div class="col-3">	
					    	<label for="">Q1</label>
					        <select class="js-select2 form-control" id="q1" name="q1" >
					                <option value="Yes" <?php echo e($telefono->q1 == 'Yes'?'selected':''); ?>>Yes</option>
					                <option value="No" <?php echo e($telefono->q1 == 'No'?'selected':''); ?>>No</option> 
					        </select>
					    </div>
					    <div class="col-3">	
					    	<label for="">Q2</label>
					        <select class="js-select2 form-control" id="q2" name="q2" >
					                <option value="Yes" <?php echo e($telefono->q2 == 'Yes'?'selected':''); ?>>Yes</option>
					                <option value="No" <?php echo e($telefono->q2 == 'No'?'selected':''); ?>>No</option> 
					        </select>
					    </div>
					    <div class="col-3">	
					    	<label for="">Q3</label>
					        <select class="js-select2 form-control" id="q3" name="q3" > 
					                <option value="Yes" <?php echo e($telefono->q3 == 'Yes'?'selected':''); ?>>Yes</option>
					                <option value="No" <?php echo e($telefono->q3 == 'No'?'selected':''); ?>>No</option> 
					        </select>
					    </div>

					    <div class="col-3">	
					    	<label for="">prezzo</label> 
					    	<input class="form-control" type="number" id="prezzo" name="prezzo" value="<?php echo e($telefono->prezzo); ?>">
					    </div>
                    </div>
   
  
<input type="text" style="display: none" id="Id" value="<?php echo e($telefono->id); ?>">


   
					<div class="form-group form-row">
					    <div class="col-5">	
					    	<label for="">Marca</label>
					        <select class="js-select2 form-control" id="marca" name="marca"> 
					                <option value="<?php echo e($telefono->modello->marca->id); ?>"> <?php echo e($telefono->modello->marca->title); ?></option>
					            <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                <option value="<?php echo e($marca->id); ?>"><?php echo e($marca->title); ?></option>
					            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					        </select>
					    </div>
			 
					    <div class="col-5">	
					    	<label for="">Modello</label>
					        <select class="js-select2 form-control" id="modello" name="modello">
					                <option value="<?php echo e($telefono->modello->id); ?>"> <?php echo e($telefono->modello->title); ?></option>
					            
					                <option value=""></option>
					                
					            
					        </select>
					    </div>
			 
					    <div class="col-2">	
					    	<label for="">GB</label>
					        <select class="js-select2 form-control" id="gb"  >
					                <option value="<?php echo e($telefono->modello->gb); ?>"> <?php echo e($telefono->modello->gb); ?></option>
					            
					                <option value=""></option>
					                
					            
					        </select>
					    </div>
					</div>

                    <div class="form-group form-row"">
					    <div class="col-3">	
					    	<label for="">Q1</label> 
					    	<input class="form-control" type="number" id="q1" name="q1" value="<?php echo e($telefono->q1); ?>">
					        </select>
					    </div>
					    <div class="col-3">	
					    	<label for="">Q2</label> 
					    	<input class="form-control" type="number" id="q2" name="q2" value="<?php echo e($telefono->q2); ?>">
					        </select>
					    </div>
					    <div class="col-3">	
					    	<label for="">Q3</label> 
					    	<input class="form-control" type="number" id="q3" name="q3" value="<?php echo e($telefono->q3); ?>">
					    </div>

					    <div class="col-3">	
					    	<label for="">prezzo</label> 
					    	<input class="form-control" type="number" id="prezzo" name="prezzo" value="<?php echo e($telefono->prezzo); ?>">
					    </div>
                    </div>
   
  
 
<script>


    $('#marca').change(function () {
        if ($(this).val() == 'null'){
            return false;
        }
        else {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '/getmodello',
                data: {
                    'marca': $(this).val(),
                },
                success: function (data) {  
                    
                    
                    $('#modello').empty();
                        $.each(data, function(key,val) {
                            $('#modello').append('<option value=' + val.id + '>' + val.title + '</option>');
                        });
                    $('#gb').empty();
                        $.each(data, function(key,val) {
                            $('#gb').append('<option value=' + val.gb + '>' + val.gb + '</option>');
                        });
                }
                });
            }   
        });


</script>
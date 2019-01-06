 

   
					<div class="form-group form-row">
					    <div class="col-6">	
					    	<label for="">Marca</label>
					        <select class="js-select2 form-control" id="marca" name="marca"> 
					            <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                <option value="<?php echo e($marca->id); ?>"><?php echo e($marca->title); ?></option>
					            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					        </select>
					    </div>
			 
					    <div class="col-6">	
					    	<label for="">Modello</label>
					        <select class="js-select2 form-control" id="modello" name="modello">
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
					                <option value="Yes">Yes</option>
					                <option value="No">No</option> 
					        </select>
					    </div>
					    <div class="col-3">	
					    	<label for="">Q2</label>
					        <select class="js-select2 form-control" id="q2" name="q2" >
					                <option value="Yes">Yes</option>
					                <option value="No">No</option> 
					        </select>
					    </div>
					    <div class="col-3">	
					    	<label for="">Q3</label>
					        <select class="js-select2 form-control" id="q3" name="q3" > 
					                <option value="Yes">Yes</option>
					                <option value="No">No</option> 
					        </select>
					    </div>

					    <div class="col-3">	
					    	<label for="">prezzo</label> 
					    	<input class="form-control" type="number" id="prezzo" name="prezzo">
					    </div>
                    </div>
   

 
<script>


    // $('#marca').change(function () {
        // if ($(this).val() == 'null'){
            // return false;
        // }
        // else {
        //     $.ajax({
        //         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //         type: 'POST',
                // url: '/getmodello',
                // data: {
                //     'marca': $(this).val(),
                // },
                // success: function (data) { 
                    // $('#modello').html(data);
                // }
            // });
        // }
    // });


</script>
 

   
					<div class="form-group form-row">
					    <div class="col-5">	
					    	<label for="">Marca</label>
					        <select class="js-select2 form-control" id="marca" name="marca"> 
					                <option value=""></option>
					            <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                <option value="<?php echo e($marca->id); ?>"><?php echo e($marca->title); ?></option>
					            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					        </select>
					    </div>
			 
					    <div class="col-5">	
					    	<label for="">Modello</label>
					        <select class="js-select2 form-control" id="modello" name="modello">
					            
					                <option value=""></option>
					                
					            
					        </select>
					    </div>
			 
					    <div class="col-2">	
					    	<label for="">GB</label>
					        <select class="js-select2 form-control" id="gb"  >
					            
					                <option value=""></option>
					                
					            
					        </select>
					    </div>
					</div>

                    <div class="form-group form-row"">
					    <div class="col-4">	
					    	<label for="">Q1</label>
					        <select class="js-select2 form-control" id="q1" name="q1" >
					                <option value="Yes">Yes</option>
					                <option value="No">No</option> 
					        </select>
					    </div>
					    <div class="col-4">	
					    	<label for="">Q2</label>
					        <select class="js-select2 form-control" id="q2" name="q2" >
					                <option value="Yes">Yes</option>
					                <option value="No">No</option> 
					        </select>
					    </div>
					    <div class="col-4">	
					    	<label for="">Q3</label>
					        <select class="js-select2 form-control" id="q3" name="q3" > 
					                <option value="Yes">Yes</option>
					                <option value="No">No</option> 
					        </select>
					    </div>
                    </div>
   

					    <div class="col-3">	
					    	<label for="">prezzo</label> 
					    	<h3 id="prezzo"> </h3> 
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
 
<script>
  
   
        function searchtelefono() {
            var modello = $('#modello').val();
            var q1     = $('#q1').val();
            var q2     = $('#q2').val();
            var q3     = $('#q3').val(); 
            var gb     = $('#gb').val(); 
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '/searchtelefono',
                data: { 
                    'modello': modello,
                    'q1': q1,
                    'q2': q2,
                    'q3': q3, 
                    'gb': gb, 
                },
                success: function (data) {   
                    $('#prezzo').html(data);
                }
            });
    }
 
 
 
</script>
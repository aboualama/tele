 

   
					<div class="form-group form-row">
					    <div class="col-6">	
					    	<label for="">Marca</label>
					        <select class="js-select2 form-control" id="marca" name="marca"> 
					            @foreach($marcas as $marca)
					                <option value="{{$marca->id}}">{{$marca->title}}</option>
					            @endforeach
					        </select>
					    </div>
			 
					    <div class="col-6">	
					    	<label for="">Modello</label>
					        <select class="js-select2 form-control" id="modello" name="modello">
					            @foreach($modellos as $modello)
					                <option value=""></option>
					                {{-- <option value="{{$modello->id}}">{{$modello->title}}</option> --}}
					            @endforeach
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
                }
            });
        }
    });


</script>
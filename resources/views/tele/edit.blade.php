<input type="text" style="display: none" id="Id" value="{{$telefono->id}}">


   
					<div class="form-group form-row">
					    <div class="col-5">	
					    	<label for="">Marca</label>
					        <select class="js-select2 form-control" id="marca" name="marca"> 
					                <option value="{{$telefono->modello->marca->id}}"> {{$telefono->modello->marca->title}}</option>
					            @foreach($marcas as $marca)
					                <option value="{{$marca->id}}">{{$marca->title}}</option>
					            @endforeach
					        </select>
					    </div>
			 
					    <div class="col-5">	
					    	<label for="">Modello</label>
					        <select class="js-select2 form-control" id="modello" name="modello">
					                <option value="{{$telefono->modello->id}}"> {{$telefono->modello->title}}</option>
					            {{-- @foreach($modellos as $modello) --}}
					                <option value=""></option>
					                {{-- <option value="{{$modello->id}}">{{$modello->title}}</option> --}}
					            {{-- @endforeach --}}
					        </select>
					    </div>
			 
					    <div class="col-2">	
					    	<label for="">GB</label>
					        <select class="js-select2 form-control" id="gb"  >
					                <option value="{{$telefono->modello->gb}}"> {{$telefono->modello->gb}}</option>
					            {{-- @foreach($modellos as $modello) --}}
					                <option value=""></option>
					                {{-- <option value="{{$modello->id}}">{{$modello->title}}</option> --}}
					            {{-- @endforeach --}}
					        </select>
					    </div>
					</div>

                    <div class="form-group form-row"">
					    <div class="col-3">	
					    	<label for="">Q1</label> 
					    	<input class="form-control" type="number" id="q1" name="q1" value="{{$telefono->q1}}">
					        </select>
					    </div>
					    <div class="col-3">	
					    	<label for="">Q2</label> 
					    	<input class="form-control" type="number" id="q2" name="q2" value="{{$telefono->q2}}">
					        </select>
					    </div>
					    <div class="col-3">	
					    	<label for="">Q3</label> 
					    	<input class="form-control" type="number" id="q3" name="q3" value="{{$telefono->q3}}">
					    </div>

					    <div class="col-3">	
					    	<label for="">prezzo</label> 
					    	<input class="form-control" type="number" id="prezzo" name="prezzo" value="{{$telefono->prezzo}}">
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
                url: '/admin/getmodello',
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
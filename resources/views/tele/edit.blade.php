<input type="text" style="display: none" id="Id" value="{{$telefono->id}}">


   
					<div class="form-group form-row">
					    <div class="col-6">	
					    	<label for="">Marca</label>
					        <select class="js-select2 form-control" id="modello" name="modello">
					        	<option value="{{$telefono->modello->marca->id}}">{{$telefono->modello->marca->title}}</option>
					            @foreach($marcas as $marca)
					                <option value="{{$marca->id}}">{{$marca->title}}</option>
					            @endforeach
					        </select>
					    </div>
			 
					    <div class="col-6">	
					    	<label for="">Modello</label>
					        <select class="js-select2 form-control" id="modello" name="modello">
					        	<option value="{{$telefono->modello->id}}">{{$telefono->modello->title}}</option>
					            @foreach($modellos as $modello)
					                <option value="{{$modello->id}}">{{$modello->title}}</option>
					            @endforeach
					        </select>
					    </div>
					</div>

                    <div class="form-group form-row"">
					    <div class="col-3">	
					    	<label for="">Q1</label>
					        <select class="js-select2 form-control" id="q1" name="q1" >
					                <option value="Yes" {{ $telefono->q1 == 'Yes'?'selected':''}}>Yes</option>
					                <option value="No" {{ $telefono->q1 == 'No'?'selected':''}}>No</option> 
					        </select>
					    </div>
					    <div class="col-3">	
					    	<label for="">Q2</label>
					        <select class="js-select2 form-control" id="q2" name="q2" >
					                <option value="Yes" {{ $telefono->q2 == 'Yes'?'selected':''}}>Yes</option>
					                <option value="No" {{ $telefono->q2 == 'No'?'selected':''}}>No</option> 
					        </select>
					    </div>
					    <div class="col-3">	
					    	<label for="">Q3</label>
					        <select class="js-select2 form-control" id="q3" name="q3" > 
					                <option value="Yes" {{ $telefono->q3 == 'Yes'?'selected':''}}>Yes</option>
					                <option value="No" {{ $telefono->q3 == 'No'?'selected':''}}>No</option> 
					        </select>
					    </div>

					    <div class="col-3">	
					    	<label for="">prezzo</label> 
					    	<input class="form-control" type="number" id="prezzo" name="prezzo" value="{{$telefono->prezzo}}">
					    </div>
                    </div>
   
  
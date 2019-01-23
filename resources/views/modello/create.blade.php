 

                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title"  id="title" placeholder="Input field">
                        <label for="">GB</label>
                        <input type="text" class="form-control" name="gb"  id="gb" placeholder="Input field"> 
                    </div>
   
					<div class="form-group form-row">
					    <div class="col-12">	
					    	<label for="">Marca</label>
					        <select class="js-select2 form-control" id="marca" name="marca" >
					            @foreach($marcas as $marca)
					                <option value="{{$marca->id}}">{{$marca->title}}</option>
					            @endforeach
					        </select>
					    </div>
					</div>
 
                    <div class="form-group">
                        <label for="">IMG</label>
                        <input type="file" class="form-control" name="img"  id="img">
                    </div>
   


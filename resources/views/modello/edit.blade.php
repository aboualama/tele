<input type="text" style="display: none" id="Id" value="{{$modello->id}}">

<div class="form-group form-row">

    <div class="col-12 "> 
 		<label for="">Title</label>
        	<input type="text" class="form-control" placeholder="" id="title" name="title" value="{{$modello->title}}">
		<label for="">GB</label>
        	<input type="text" class="form-control" placeholder="" id="gb" name="gb" value="{{$modello->gb}}"> 
    </div>  
</div>  
<div class="form-group form-row">
    <div class="col-12">	
    	<label for="">Marca</label>
        <select class="js-select2 form-control" id="marca" name="marca"  value="{{$modello->marca->title}}">
                <option value="{{$modello->marca->id}}">{{$modello->marca->title}}</option>
            @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->title}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label for="">IMG</label>
    <input type="file" class="form-control" name="img"  id="img" value="{{$modello->img}}">
</div>

<input type="text" style="display: none" id="Id" value="{{$marca->id}}">

<div class="form-group form-row">
    <label for="">Marca</label>
    <div class="col-12 "> 
        <input type="text" class="form-control" placeholder=""
               id="title" name="title" value="{{$marca->title}}">
    </div>  
</div> 

<div class="form-group">
	<label for="">IMG</label>
	<input type="file" class="form-control" name="img"  id="img" value="{{$marca->img}}">
</div>
 
<input type="text" style="display: none" id="Id" value="{{$telefono->id}}">

<div class="form-group form-row">
    <div class="col-5">
        <label for="">Marca</label>
        <select class="js-select2 form-control" id="marca" name="marca">
            <option value="">{{$telefono->modello->marca->title}}</option>
            @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-5">
        <label for="">Modello</label>
        <select class="js-select2 form-control" id="modello" name="modello">
            <option value="{{$telefono->modello->id}}">{{$telefono->modello->title}}</option>
              	@foreach ($telefono->modello->marca->modellos as $modello) 
                    <option value="{{$modello->id}}">{{$modello->title}}</option>
                @endforeach  
        </select>
    </div> 
</div>

 
<div class="form-group " id="gbBlock">
	@foreach($gbs as $gb)  
	    <div class="newGb row">
	        <div class="col-5">
	            <label for="">GB</label>
	            <input class="form-control GBValue" type="number" value="{{$gb->gb}}">
	        </div>
	        <div class="col-5">
	            <label for="">Prezzo</label>
	            <input class="form-control GBPrice" type="number" value="{{$gb->price}}">
	        </div>
	        <div class="col-2"><a class="btn btn-hero-sm" onclick="removeGb(this)"> x </a></div>
	    </div> 
    @endforeach
</div>
 
<div class="form-group " id="gbBlock"> 
	    <div class="newGb row">
	        <div class="col-5">
	            <label for="">GB</label>
	            <input class="form-control GBValue" type="number">
	        </div>
	        <div class="col-5">
	            <label for="">Prezzo</label>
	            <input class="form-control GBPrice" type="number">
	        </div>
	        <div class="col-2"><a class="btn btn-hero-sm" onclick="removeGb(this)"> x </a></div>
	    </div>  
</div>

<script>
    function addNewGB() {
        html = "<div class=\"newGb row\" >\n" +
            "        <div class=\"col-5\">\n" +
            "            <label for=\"\">GB</label>\n" +
            "            <input class=\"form-control GBValue\" type=\"number\">\n" +
            "        </div>\n" +
            "        <div class=\"col-5\">\n" +
            "            <label for=\"\">Prezzo</label>\n" +
            "            <input class=\"form-control GBPrice\" type=\"number\">\n" +
            "        </div>\n" +
            "        <div class=\"col-2\"><a class=\"btn btn-hero-sm\" onclick=\"removeGb(this)\"> x </a></div>\n" +
            "    </div>";
        $('#gbBlock').append(html);
    }

    function removeGb(x) {
        x.closest('.newGb').remove();
        console.log(x.closest('.newGb'));

    }
</script>
<a class="btn btn-hero-sm btn-success float-right" onclick="addNewGB()"> Aggiungi</a>

<div class="form-group form-row">
    <div class="row form-group form-row">
        <label class="col-12">stato telefono</label>
        <div class="col-4 ">
            <input class="form-control" type="number" id="q1" name="q1"  value="{{$telefono->q1}}">
        </div>
        <div class="col-4">
            <input class="form-control" type="number" id="q1_1" name="q1_1"  value="{{$telefono->q1_1}}">
        </div>
        <div class="col-4">
            <input class="form-control" type="number" id="q1_2" name="q1_2"  value="{{$telefono->q1_2}}">
        </div>
    </div>
    <div class="col-3">
        <label for="">Scatola</label>
        <input class="form-control" type="number" id="q2"  value="{{$telefono->q2}}">
    </div>
    <div class="col-3">
        <label for="">Accessori originali</label>
        <input class="form-control" type="number" id="q3"  value="{{$telefono->q3}}">
    </div>
 
</div>

    <div >
        <label for="">Documents</label>
        <input class="form-control" type="text" id="documents" name="documents" value="{{$telefono->documents}}">
    </div>
<script>


    $('#marca').change(function () {
        if ($(this).val() == 'null') {
            return false;
        } else {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '/admin/getmodello',
                data: {
                    'marca': $(this).val(),
                },
                success: function (data) {


                    $('#modello').empty();
                    $.each(data, function (key, val) {
                        $('#modello').append('<option value=' + val.id + '>' + val.title + '</option>');
                    });
                }
            });
        }
    });

 

</script>

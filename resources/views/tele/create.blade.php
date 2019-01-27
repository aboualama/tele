<div class="form-group form-row">
    <div class="col-5">
        <label for="">Marca</label>
        <select class="js-select2 form-control" id="marca" name="marca">
            <option value="">Seleziona Marca..</option>
            @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-5">
        <label for="">Modello</label>
        <select class="js-select2 form-control" id="modello" name="modello">
            <option value="">......</option>
           {{--      @foreach($modellos as $modello) 
                    <option value="{{$modello->id}}">{{$modello->title}}</option>
                @endforeach --}}
        </select>
    </div> 
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
            <input class="form-control" type="number" id="q1" name="q1" placeholder="Ottimno">
        </div>
        <div class="col-4">
            <input class="form-control" type="number" id="q1_1" name="q1_1" placeholder="Buono">
        </div>
        <div class="col-4">
            <input class="form-control" type="number" id="q1_2" name="q1_2" placeholder="Discreto">
        </div>
    </div>
    <div class="col-3">
        <label for="">Scatola</label>
        <input class="form-control" type="number" id="q2" name="q2">
    </div>
    <div class="col-3">
        <label for="">Accessori originali</label>
        <input class="form-control" type="number" id="q3" name="q3">
    </div>

    {{--  <div class="col-3">
          <label for="">prezzo</label>
          <input class="form-control" type="number" id="prezzo" name="prezzo">
      </div>--}}
</div>


    <div >
        <label for="">Documents</label>
        <input class="form-control" type="text" id="documents" name="documents">
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

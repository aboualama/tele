@extends('layouts.backend')

@section('content')

    <div class="block-content">
        <div class="row push">
            <div class="col-md-12">
                <div class="form-group row items-push mb-0">
                    @foreach($marcas as $marca)
                        <div class="col-md-4" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                            <div class="custom-control custom-block custom-control-primary mb-1">
                                <input type="radio" class="custom-control-input" id="marca_{{$marca->id}}"
                                       name="marcaRadio" onclick="handleClick(this)" value="{{$marca->id}}">
                                <label class="custom-control-label" for="marca_{{$marca->id}}">
                                                    <span class="d-block font-w400 text-center my-3">
                                                        <span class="font-size-h4 font-w600">{{$marca->title}}</span>
                                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div id="newContent">

    </div>
    <div id="modelContent">

    </div>
@endsection


@section('js_after')

    <script>
        jQuery(function () {
            Dashmix.helpers(['datepicker', 'table-tools-checkable']);
        });

        function handleClick(myRadio) {

            $.ajax({
                url: '/admin/modello/' + $(myRadio).val(),
                method: "GET",
                success: function (resp) {
                    $('#newContent').html(resp);
                    $('#newContent').focus();

                }
            });
        }

        function handleClickModello(myRadio) {
            console.log($(myRadio).val());
            $.ajax({
                url: '/getGP/' + $(myRadio).val(),
                method: "GET",
                success: function (resp) {
                    $('#modelContent').html(resp);
                    $('#modelContent').focus();

                }
            });/*
            $('#domande').css('display', 'block');
            $('#domande').focus()
            $('#valutaSubito').css('display', 'block');*/
        }

        function handleClickgb(myRadio) {
            console.log(myRadio);
            /*$.ajax({
                url: '/getGP/'+$(myRadio).val(),
                method: "GET",
                success: function (resp) {
                    $('#modelContent').html(resp);
                    $('#modelContent').focus();

                }
            });*/
            $('#domande').css('display', 'block');
            $('#domande').focus();
            $('#valutaSubito').css('display', 'block');
        }


        function valutaSubito() {
            modello = $('[name="modelloRadio"]:checked').val();
            gb = $('[name="gbRadio"]:checked').val();
            stato = $('[name="example-rd-custom-inline"]:checked').val();
            scatola = $('[name="scatola"]:checked').val();
            accessori = $('[name="accessori"]:checked').val();

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '{{route('valuta')}}',
                data: {

                    'modello': modello,
                    'stato': stato,
                    'scatola': scatola,
                    'accessori': accessori,
                    'gb': gb

                },
                success: function (data) {
                    console.log(data);
                    $.notify(data.data, 'success');
                    // $.notify(data.msg,"success");
                    $('#DataTables_Table_0').DataTable().row.add([data.data.id, '-', data.data.title, data.data.marca_id, '']).draw(true).node();

                    // notifySuccess(data);
                }
            });

        }

    </script>



@endsection

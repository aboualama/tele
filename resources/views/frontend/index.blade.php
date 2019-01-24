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
@endsection


@section('js_after')

    <script>
        jQuery(function () {
            Dashmix.helpers(['datepicker', 'table-tools-checkable']);
        });

        function handleClick(myRadio) {

            $.ajax({
                url: '{{route('modello.show', ['id' => 1])}}',
                method: "GET",
                success: function (resp) {
                    $('#newContent').html(resp);
                    $('#newContent').focusin();

                }
            });
        }

        function handleClickModello() {

            $('#domande').css('display', 'block');
            $('#domande').focus()
            $('#valutaSubito').css('display', 'block');
        }

        /*     function valutaSubito() {
                 modello = $('[name="modelloRadio"]:checked').val();
                 stato = $('[name="modelloRadio"]:checked').val();
                 scatola = $('[name="modelloRadio"]:checked').val();
                 accessori
             }
     */
    </script>



@endsection

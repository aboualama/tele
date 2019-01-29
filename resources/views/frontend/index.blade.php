@extends('layouts.login')

@section('content')
    <style>

    </style>
    <div class="block block-rounded block-bordered text-center">
        <div class="block-content">
            <h2> Quale dispositivo vuoi vendere?</h2>
            <div class="row push no-gutters">

                <div class="form-group row items-push justify-content-center no-gutters">
                    @foreach($marcas as $marca)
                        <div class="col-6 col-sm-4 no-gutters" data-toggle="appear" data-class="animated fadeInDown"
                             data-timeout="300">
                            <div class="custom-control custom-block custom-control-primary mb-1">

                                <input type="radio" class="custom-control-input" id="marca_{{$marca->id}}"
                                       name="marcaRadio" onclick="handleClick(this)" value="{{$marca->id}}">
                                <label class="custom-control-label" for="marca_{{$marca->id}}"
                                       style="     padding:0px !important; background: white !important;border: 2px solid #fff;">
                                    <img src="{{asset('/uploads/marca')}}/{{$marca->img}}" class="img-fluid">
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

        <div id="newContent">

        </div>
        <div id="modelContent">

        </div>
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
                    $('html, body').animate({
                        scrollTop: $("div#newContent").offset().top
                    }, 1000)

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
                    $('html, body').animate({
                        scrollTop: $("div#modelContent").offset().top
                    }, 1000)

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
            $('#q1').css('display', 'block');
            $('html, body').animate({
                scrollTop: $("div#q1").offset().top
            }, 1000)

        }


        function handleClickQ1(myRadio) {

            $('#q2').css('display', 'block');
            $('html, body').animate({
                scrollTop: $("div#q2").offset().top
            }, 1000)
            //  $('#valutaSubito').css('display', 'block');
        }

        function handleClickQ2(myRadio) {

            $('#q3').css('display', 'block');
            $('html, body').animate({
                scrollTop: $("div#q3").offset().top
            }, 1000)
            //  $('#valutaSubito').css('display', 'block');
        }

        function handleClickQ3(myRadio) {

            $('#q4').css('display', 'block');
            $('html, body').animate({
                scrollTop: $("div#q4").offset().top
            }, 1000)
            // $('#valutaSubito').css('display', 'block');
        }

        function handleClickQ4(myRadio) {

            $('#domande').css('display', 'block');
            $('html, body').animate({
                scrollTop: $("div#domande").offset().top
            }, 1000)
            // $('#valutaSubito').css('display', 'block');
        }


        function valutaSubito1() {
            modello = $('[name="modelloRadio"]:checked').val();
            gb = $('[name="gbRadio"]:checked').val();
            stato = $('[name="example-rd-custom-inline"]:checked').val();
            scatola = $('[name="scatola"]:checked').val();
            documenti = $('[name="documenti"]:checked').val();
            accessori = $('[name="accessori"]:checked').val();

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '{{route('valuta')}}',
                data: {

                    'modello': modello,
                    'stato': stato,
                    'scatola': scatola,
                    'documenti': documenti,
                    'accessori': accessori,
                    'gb': gb

                },
                success: function (data) {
                    console.log(data);
                    $.notify(data.data, 'success');
                    // $.notify(data.msg,"success");
                    $('#DataTables_Table_0').DataTable().row.add([data.data.id, '-', data.data.title, data.data.marca_id, '']).draw(true).node();

                    // notifySuccess(data);
                    parent.tuttoOk();
                    console.log($('html, body'));
                }
            });


        }

        jQuery(document).ready(function ($) {
            // now you can use jQuery code here with $ shortcut formatting
            // this will execute after the document is fully loaded
            // anything that interacts with your html should go here
            document.domain = "elettroshock.net";
        });

    </script>



@endsection

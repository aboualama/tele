@extends('layouts.backend')

@section('content')
      


    <div class="block block-rounded block-bordered ">
        <div class="block-header block-header-default"><h3 class="block-title">telefono</h3>
            <div class="block-options">
                <div class="block-options-item"><code></code></div>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                <a class="btn btn-hero-success btn-rounded center center-block text-white" data-toggle="modal" 
                	data-target="#modal-block-large" onclick="AddNew()" href="#" style="float: right">
                    <span class="click-ripple animate"></span>
                    <i class="si si-plus"></i> nuovo 
                </a>
                <a class="btn btn-hero-success btn-rounded center center-block text-white" data-toggle="modal" 
                    data-target="#modal-block-search" onclick="telesearch()" href="#" style="float: right">
                    <span class="click-ripple animate"></span>
                    <i class="si si-plus"></i> Search 
                </a>
                <tr> 
                    <th class="text-center" width="100px">#</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Modello</th>
                    <th class="text-center">GB</th>
                    <th class="text-center">Q1</th>
                    <th class="text-center">Q2</th>
                    <th class="text-center">Q3</th>
                    <th class="text-center">prezzo</th>
                    <th class="text-center" width="50px">Action</th> 
                </tr>
                </thead>
                <tbody>
                @foreach($records as $index => $record)
                    <tr class="tr{{$record->id}}">
                        <th class="font-w600 text-xinspire-darker text-center">{{$record->id}}</th>
                        <th class="font-w600 text-xinspire-darker text-center" id ="table_marca_{{$record->id}}">
                            {{$record->modello->marca->title}}
                        </th>
                        <th class="font-w600 text-xinspire-darker text-center" id ="table_modello_{{$record->id}}">
                            {{$record->modello->title}}
                        </th>
                        <th class="font-w600 text-xinspire-darker text-center" id ="table_gb_{{$record->id}}">{{$record->gb}}</th>

                        <th class="font-w600 text-xinspire-darker text-center" id ="table_q1_{{$record->id}}">{{$record->q1}}</th>
                        <th class="font-w600 text-xinspire-darker text-center" id ="table_q2_{{$record->id}}">{{$record->q2}}</th>
                        <th class="font-w600 text-xinspire-darker text-center" id ="table_q3_{{$record->id}}">{{$record->q3}}</th>
                        <th class="font-w600 text-xinspire-darker text-center" id ="table_prezzo_{{$record->id}}">{{$record->prezzo}}</th>

                        <td class="text-center" style="width: 50px">
                            <div class="btn-group">
                                <a onclick="edit('{{$record->id}}')" target="_blank" data-toggle="modal" 
                	data-target="#modal-block-edit" >
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                            title="Edit"><i class="fa fa-pencil-alt"></i></button>
                                </a>
                                <a href="#" onclick="destroy('{{$record->id}}',this)">
                                    <button href="#" type="button" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                            title="delete"><i class="fa fa-trash"></i></button>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
            <div>{{ $records->links() }}</div> 
    </div>


 


    <div class="modal" id="modal-block-large" tabindex="-1" role="dialog" aria-labelledby="modal-block-large"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Nuovo Telefono</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div id="createContent">

                        </div>


                    </div>
                    <div class="block-content block-content-full text-right bg-light">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Annulla</button>
                        <button type="button" onclick="addtelefono()" class="btn btn-sm btn-primary" data-dismiss="modal">Salva </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

 

    <div class="modal" id="modal-block-edit" tabindex="-1" role="dialog" aria-labelledby="modal-block-edit"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Modifica Telefono</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div id="editContent"> 
                        </div>


                    </div>
                    <div class="block-content block-content-full text-right bg-light">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="button" onclick="updatetelefono()" class="btn btn-sm btn-primary" data-dismiss="modal">Salva </button>
                    </div>
                </div>
            </div>
        </div>
    </div> 



    <div class="modal" id="modal-block-search" tabindex="-1" role="dialog" aria-labelledby="modal-block-search"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">search modello</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div id="searchContent"> 
                        </div>


                    </div>
                    <div class="block-content block-content-full text-right bg-light">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="button" onclick="searchtelefono()" class="btn btn-sm btn-primary" data-dismiss="modal">Salva </button>
                    </div>
                </div>
            </div>
        </div>
    </div> 

 
@endsection


@section('js_after')

    <script>
        jQuery(function () {
            Dashmix.helpers(['datepicker', 'table-tools-checkable']);
        });
 

        function telesearch() { 
            $.ajax({
                url: '/search',
                method: "GET",
                success: function (resp) {
                    $('#searchContent').html(resp);

                }
            });

        }

        function AddNew() {
            $.ajax({
                url: "{{route('telefono.create')}}",
                method: "GET",
                success: function (resp) {
                    $('#createContent').html(resp);

                }
            });

        }
   
        function addtelefono() {
            var modello = $('#modello').val();
            var gb     = $('#gb').val();
            var q1     = $('#q1').val();
            var q1_1 = $('#q1_1').val();
            var q1_2 = $('#q1_2').val();
            var q2     = $('#q2').val();
            var q3     = $('#q3').val();
            var prezzo = $('#prezzo').val();
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '{{route('telefono.store')}}',
                data: {

                    'modello': modello,
                    'gb': gb,
                    'q1': q1,
                    'q1_1': q1_1,
                    'q1_2': q1_2,
                    'q2': q2,
                    'q3': q3,
                    'prezzo': prezzo
                },
                success: function (data) {
                    // $.notify(data.msg,"success");  
                    t = $('.js-dataTable-buttons').DataTable();  
                    t.row.add([
                        '<th class="font-w600 text-xinspire-darker text-center" id ="table_id">' + data.data.id + '</th>',
                        '<th class="font-w600 text-xinspire-darker text-center" id ="table_marca_"' + data.data.id + '>' + data.data.modello.marca.title + '</th>', 
                        '<th class="font-w600 text-xinspire-darker text-center" id ="table_modello_"' + data.data.id + '>' + data.data.modello.title + '</th>',
                        '<th class="font-w600 text-xinspire-darker text-center" id ="table_gb_"' + data.data.id + '>' + data.data.gb + '</th>',
                        '<th class="font-w600 text-xinspire-darker text-center" id ="table_q1_"' + data.data.id + '>' + data.data.q1 + '</th>',
                        '<th class="font-w600 text-xinspire-darker text-center" id ="table_q2_"' + data.data.id + '>' + data.data.q2 + '</th>',   
                        '<th class="font-w600 text-xinspire-darker text-center" id ="table_q3_"' + data.data.id + '>' + data.data.q3 + '</th>', 
                        '<th class="font-w600 text-xinspire-darker text-center" id ="table_prezzo_"' + data.data.id + '>' + data.data.prezzo + '</th>', 
                        setActionButtons(data.data.id)
                    ]).draw();
                    resetInputs();
                    // notifySuccess(data);
                }
            });
    }
 
 

        function edit(id) {

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: "GET",
                url: '/telefono/' + id + '/edit',
                success: function (data) {
                    $('#editContent').html(data);

                }
            });

        }
 
        function updatetelefono() {
            var modello = $('#modello').val();
            var gb      = $('#gb').val();
            var q1      = $('#q1').val();
            var q2      = $('#q2').val();
            var q3      = $('#q3').val();
            var prezzo  = $('#prezzo').val();
            var id      = $('#Id').val();
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '/telefono/' + id,
                data: {
                    _method: "PUT", 
                    'modello': modello,
                    'gb': gb,
                    'q1': q1,
                    'q2': q2,
                    'q3': q3,
                    'prezzo': prezzo
                },
                success: function (data) {
                    $("#table_marca_" + id).text(data.data.marca);
                    $("#table_modello_" + id).text(data.data.modello);
                    $("#table_gb_" + id).text(data.data.gb);
                    $("#table_q1_" + id).text(data.data.q1);
                    $("#table_q2_" + id).text(data.data.q2); 
                    $("#table_q3_" + id).text(data.data.q3); 
                    $("#table_prezzo_" + id).text(data.data.prezzo); 
                    // notifySuccess(data);
                }
            });
        }


        function destroy(id, el) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '/telefono/' + id,
                data: {
                    _method: "DELETE",
                },
                success: function (data) {
                    // $.notify(data.msg, 'success');
                    // console.log($(this));
                    el.closest('tr').remove();
                }

            });
        }
    </script>

 

@endsection

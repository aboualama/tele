<?php $__env->startSection('content'); ?>
      
 

    <div class="block block-rounded block-bordered ">
        <div class="block-header block-header-default"><h3 class="block-title">modello</h3>
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
                <tr> 
                    <th class="text-center" width="100px">#</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Modello</th> 
                    <th class="text-center">GB</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center" width="50px">Action</th> 
                </tr>
                </thead>
                <tbody> 
                <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="tr<?php echo e($record->id); ?>">
                        <th class="font-w600 text-xinspire-darker text-center"><?php echo e($record->id); ?></th>
                        <th class="font-w600 text-xinspire-darker text-center" id ="table_img_<?php echo e($record->id); ?>">
                            <img src="<?php echo e(asset('/uploads/modello')); ?>/<?php echo e($record->img); ?>" style="width: 50px; height: 50px;">
                        </th>
                        <th class="font-w600 text-xinspire-darker text-center" id ="table_title_<?php echo e($record->id); ?>"><?php echo e($record->title); ?></th>
                        <th class="font-w600 text-xinspire-darker text-center" id ="table_gb_<?php echo e($record->id); ?>"><?php echo e($record->gb); ?></th>
                        <th class="font-w600 text-xinspire-darker text-center" id ="table_marca_<?php echo e($record->id); ?>"><?php echo e($record->marca->title); ?></th>

                        <td class="text-center" style="width: 50px">
                            <div class="btn-group">
                                <a onclick="edit('<?php echo e($record->id); ?>')" target="_blank" data-toggle="modal" 
                	data-target="#modal-block-edit" >
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                            title="Edit"><i class="fa fa-pencil-alt"></i></button>
                                </a>
                                <a href="#" onclick="destroy('<?php echo e($record->id); ?>',this)">
                                    <button href="#" type="button" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                            title="delete"><i class="fa fa-trash"></i></button>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>


 


    <div class="modal" id="modal-block-large" tabindex="-1" role="dialog" aria-labelledby="modal-block-large"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Nuovo modello</h3>
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
                        <h3 class="block-title">Modifica modello</h3>
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
                        <button type="button" onclick="updatemodello()" class="btn btn-sm btn-primary" data-dismiss="modal">Salva </button>
                    </div>
                </div>
            </div>
        </div>
    </div> 

 


 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js_after'); ?>

    <script>
        jQuery(function () {
            Dashmix.helpers(['datepicker', 'table-tools-checkable']);
        });

        function AddNew() { 
            $.ajax({
                url: "<?php echo e(route('modello.create')); ?>",
                method: "GET",
                success: function (resp) {
                    $('#createContent').html(resp);

                }
            });

        }
  

        $('#form').on('submit', function(e){
            e.preventDefault();
            var title = $('#title').val();
            var gb = $('#gb').val();
            var marca = $('#marca').val();
            var img = $('#img').val();
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '<?php echo e(route('modello.store')); ?>',
                data: {

                    'title': title,
                    'gb': gb,
                    'marca': marca,
                    'img': img
                },
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) { 
                    $('#modal-block-large').modal('toggle');
                }
            });
        });
 
 

        function edit(id) {

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: "GET",
                url: '/modello/' + id + '/edit',
                success: function (data) {
                    $('#editContent').html(data);

                }
            });

        }
 
        function updatemodello() {
            var title = $('#title').val(); 
            var gb = $('#gb').val(); 
            var id = $('#Id').val();
            var marca = $('#marca').val();
            var img = $('#img').val();
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '/modello/' + id,
                data: {
                    _method: "PUT",
                    title: title, 
                    gb: gb, 
                    marca: marca,
                    img: img
                },
                success: function (data) { 
                    $("#table_title_" + id).text(data.data.title); 
                    $("#table_gb_" + id).text(data.data.gb); 
                    $("#table_marca_" + id).text(data.data.marca.title); 
                    notifySuccess(data);
                }
            });
        }


        function destroy(id, el) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: '/modello/' + id,
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
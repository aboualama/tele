<?php $__env->startSection('content'); ?>

    <div class="block-content">
        <div class="row push ">
            <div class="col-md-12">
                <div class="form-group row items-push mb-0">
                    <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                            <div class="custom-control custom-block custom-control-primary mb-1">
                                <input type="radio" class="custom-control-input" id="marca_<?php echo e($marca->id); ?>"
                                       name="marcaRadio" onclick="handleClick(this)" value="<?php echo e($marca->id); ?>">
                                <label class="custom-control-label" for="marca_<?php echo e($marca->id); ?>">
                                <img src="<?php echo e(asset('/uploads/marca')); ?>/<?php echo e($marca->img); ?>" class="rounded float-left img-thumbnail"
                                style="width: 75px; height: 65px;  " >
                                                    <span class="d-block font-w400 text-center my-3">
                                                        <span class="font-size-h4 font-w600"><?php echo e($marca->title); ?></span>
                                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <div id="newContent">

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js_after'); ?>

    <script>
        jQuery(function () {
            Dashmix.helpers(['datepicker', 'table-tools-checkable']);
        });

        function handleClick(myRadio) {

            $.ajax({
                url: '<?php echo e(route('modello.show', ['id' => 1])); ?>',
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



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
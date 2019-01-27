<input type="text" style="display: none" id="Id" value="<?php echo e($telefono->id); ?>">

<div class="form-group form-row">
    <div class="col-5">
        <label for="">Marca</label>
        <select class="js-select2 form-control" id="marca" name="marca">
            <option value=""><?php echo e($telefono->modello->marca->title); ?></option>
            <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($marca->id); ?>"><?php echo e($marca->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="col-5">
        <label for="">Modello</label>
        <select class="js-select2 form-control" id="modello" name="modello">
            <option value="<?php echo e($telefono->modello->id); ?>"><?php echo e($telefono->modello->title); ?></option>
              	<?php $__currentLoopData = $telefono->modello->marca->modellos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modello): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <option value="<?php echo e($modello->id); ?>"><?php echo e($modello->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </select>
    </div> 
</div>

 
<div class="form-group " id="gbBlock">
	<?php $__currentLoopData = $gbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
	    <div class="newGb row">
	        <div class="col-5">
	            <label for="">GB</label>
	            <input class="form-control GBValue" type="number" value="<?php echo e($gb->gb); ?>">
	        </div>
	        <div class="col-5">
	            <label for="">Prezzo</label>
	            <input class="form-control GBPrice" type="number" value="<?php echo e($gb->price); ?>">
	        </div>
	        <div class="col-2"><a class="btn btn-hero-sm" onclick="removeGb(this)"> x </a></div>
	    </div> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <input class="form-control" type="number" id="q1" name="q1"  value="<?php echo e($telefono->q1); ?>">
        </div>
        <div class="col-4">
            <input class="form-control" type="number" id="q1_1" name="q1_1"  value="<?php echo e($telefono->q1_1); ?>">
        </div>
        <div class="col-4">
            <input class="form-control" type="number" id="q1_2" name="q1_2"  value="<?php echo e($telefono->q1_2); ?>">
        </div>
    </div>
    <div class="col-3">
        <label for="">Scatola</label>
        <input class="form-control" type="number" id="q2"  value="<?php echo e($telefono->q2); ?>">
    </div>
    <div class="col-3">
        <label for="">Accessori originali</label>
        <input class="form-control" type="number" id="q3"  value="<?php echo e($telefono->q3); ?>">
    </div>
 
</div>

    <div >
        <label for="">Documents</label>
        <input class="form-control" type="text" id="documents" name="documents" value="<?php echo e($telefono->documents); ?>">
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

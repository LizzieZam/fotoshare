<?php $__env->startSection('content'); ?>    
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">IMAGEN</div>
                        <div class="panel-body">
                        <form  method="post" id="form" action="<?php echo e(route('create')); ?>" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label>Imagen</label>
                                <input  class='form-control' name="imagen" type="file" id="imagen" >
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        </div>
                        <button type="submit" class="btn btn-default">Guardar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\CATO\VERANO\Lab\fotoShare\resources\views/pages/imagen.blade.php ENDPATH**/ ?>
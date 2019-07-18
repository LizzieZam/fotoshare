<?php $__env->startSection('content'); ?>    
    <div class="container">
        <div class="row">
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <img id="image" name="image" class="img-responsive" alt="imagen" title="Imagen" src="/images/<?php echo e($img->image); ?>" />
                    
            </div> 
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\CATO\VERANO\Lab\fotoShare\resources\views/pages/compartir.blade.php ENDPATH**/ ?>
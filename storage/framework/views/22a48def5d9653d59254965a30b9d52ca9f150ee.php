<?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function(){
        $("#alto").keydown(function(event){
            if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
                return false;
            }
        });
        $("#ancho").keydown(function(event){
            if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
                return false;
            }
        });
    });
    $("#submit").click(function(){
      
      $.post("/editar/"+$("#id").val(),$("#form").serialize()).done(function(data){
          alert(data);
      });
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>    
    <div class="container">
        <div class="row">
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <form  method="post" id="form"  >
                    <img id="image" name="image" class="img-responsive" alt="" src="/images/<?php echo e($img->image); ?>" />
                    <label>Ancho</label>
                    <input type="text" class="img-responsive" id="ancho" name="ancho"/>
                    <label>Alto</label>
                    <input type="text" class="img-responsive" id="alto" name="alto"/>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="id" id="id" value="<?php echo e($img->id); ?>">
                    <button class="btn btn-default" id="submit">Guardar </button>
                </form>
            </div> 
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\CATO\VERANO\Lab\fotoShare\resources\views/pages/edicion.blade.php ENDPATH**/ ?>
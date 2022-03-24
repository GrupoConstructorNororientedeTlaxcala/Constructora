<?php echo $__env->yieldContent("cabezausuario"); ?>
<?php echo $__env->yieldContent("contenidousuario"); ?>
<?php echo $__env->yieldContent("pieusuario"); ?>
<?php echo $__env->make("Layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
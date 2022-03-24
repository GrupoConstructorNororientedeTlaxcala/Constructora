<?php $__env->startSection("cabecerausuario"); ?>
CONSULTA DE REGISTROS
<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>
<h1><?php echo e($usuarios->id); ?></h1>
<h1><?php echo e($usuarios->nombre); ?></h1>
<h1><?php echo e($usuarios->apaterno); ?></h1>
<h1><?php echo e($usuarios->amaterno); ?></h1>
<h1><?php echo e($usuarios->telefono); ?></h1>
<h1><?php echo e($usuarios->contrasena); ?></h1>
<h1><?php echo e($usuarios->correo); ?></h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection("pieusuario".); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
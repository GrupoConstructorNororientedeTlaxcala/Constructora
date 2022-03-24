<?php $__env->startSection("cabecerausuario"); ?>
<?php $__env->startSection("contenidousuario"); ?>
CONSULTA DE REGISTROS

<table width="60" heidth="30">
	<tr>
		<td>Id</td>
		<td>Imagen</td>
		<td>Nombre</td>
		<td>Descripción</td>
		<td>Precio</td>
		<td>Estatus</td>
	</tr>

<tr>
<td><h3><?php echo e($panes->id); ?></h3></td>
<td><h3><?php echo e($panes->imagen); ?></h3></td>
<td><h3><?php echo e($panes->nombre); ?></h3></td>
<td><h3><?php echo e($panes->descripcion); ?></h3></td>
<td><h3><?php echo e($panes->precio); ?></h3></td>
<td><h3><?php echo e($panes->estatus); ?></h3></td>
</tr>



</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection("cabecerausuario"); ?>
<h2>CONSULTA DE REGISTROS</h2>
<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="id">Id</th>
      <th scope="nombre">Nombre</th>
      <th scope="correo">Correo</th>
      <th scope="mensaje">Mensaje</th>
	  </a></td>
	</tr>
	</thead>
	<?php $__currentLoopData = $comentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>	
		<td><?php echo e($comentario->id); ?></td>
		<td><?php echo e($comentario->nombre); ?></td>
		<td><?php echo e($comentario->correo); ?></td>
		<td><?php echo e($comentario->mensaje); ?></td>

		<td><form method="POST" action="/comentarios/<?php echo e($comentario->id); ?>">
			<?php echo e(csrf_field()); ?>

			<td><input type="hidden" name="_method" value="delete"></td>
			<td><button type="submit" class="btn btn-primary">Eliminar registro</button><td>

	</tr>		
		</form>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
</table>


<?php $__env->stopSection(); ?>


<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
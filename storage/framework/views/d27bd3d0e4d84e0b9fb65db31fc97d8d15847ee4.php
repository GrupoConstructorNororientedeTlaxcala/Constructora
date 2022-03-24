<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/imgProductos/imgconlogo.png" width="1510" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">

<?php $__env->startSection("contenidousuario"); ?>
<br>
<center><h2 class="titulo">CONSULTA DE REGISTROS DE COMENTARIO</h2></center>

<?php if(session()->get('accion')): ?>
	<hr>
	<div class="alert
		<?php echo e(session()->get('accion')=='guardar'? 'alert-success':''); ?>

		<?php echo e(session()->get('accion')=='editar'? 'alert-primary':''); ?>

		<?php echo e(session()->get('accion')=='eliminar'? 'alert-danger':''); ?>"
		>
		<?php echo e(session()->get('mensaje')); ?>

	</div>
<?php endif; ?>
<table class="table" >
  <thead class="thead-dark">
  <tr>
      <th scope="id">Id</th>
      <th scope="nombre">Nombre</th>
      <th scope="correo">Correo</th>
      <th scope="mensaje">Mensaje</th>
	  <th><a href="<?php echo e(url('generarPDF')); ?>" class="btn btn-outline-info" onclick="return confirm('¿Quieres implimir un reporte?')">Descargar PDF</a> </th>
	  
	  <th></th>
	  <th></th>

	</tr>
	</thead>
	<?php $__currentLoopData = $comentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($comentario->id); ?></td>
		<td><?php echo e($comentario->nombre); ?></td>
		<td><?php echo e($comentario->correo); ?></td>
		<td><?php echo e($comentario->mensaje); ?></td>
		<td><a href="<?php echo e(route('comentarios.show', $comentario->id)); ?>"><button type="submit" class="btn btn-success">Ver</button></a></td>
		<td><form method="POST" action="/comentarios/<?php echo e($comentario->id); ?>">
			<?php echo e(csrf_field()); ?>

			<input type="hidden" name="_method" value="delete">
			<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres eliminar el registro?')">Eliminar</button><td>
			

	</tr>		
		</form>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
</table>
<?php echo $comentarios->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
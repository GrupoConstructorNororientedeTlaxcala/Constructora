<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/imgProductos/imgconlogo.png" width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenidousuario"); ?>
<table><tr><td width="1000px"></td><td><form><?php echo $__env->make('empleados.buscarem', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></form></td></tr></table>
<center><h2>CONSULTA DE EMPLEADOS REGISTRADOS</h2></center>

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
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="id">Id</th>
      <th scope="nombre">Nombre</th>
      <th scope="apaterno">Apellido Paterno</th>
      <th scope="amaterno">Apellido Materno</th>
      <th scope="telefono">Teléfono</th>
      <th scope="correo">Correo</th>
      <th scope="puesto">Puesto</th>
	  <th><a href="<?php echo e(route('empleados.create')); ?>"><button type="button" class="btn btn-secondary"> Registrar </button></a></th>
	  
	  <th><a href="<?php echo e(url('generPDF')); ?>" class="btn btn-outline-info" onclick="return confirm('¿Quieres implimir un reporte?')">Descargar PDF</a> </th>
	  <th></th>
	  <th></th>
	  <th></th>
</tr>
   
  </thead>
	<?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>	
		<td><?php echo e($empleado->id); ?></td>
		<td><?php echo e($empleado->nombre); ?></td>
		<td><?php echo e($empleado->apaterno); ?></td>
		<td><?php echo e($empleado->amaterno); ?></td>
		<td><?php echo e($empleado->telefono); ?></td>
		<td><?php echo e($empleado->correo); ?></td>
		<td><?php echo e($empleado->puesto); ?></td>
		<td><a href="<?php echo e(route('empleados.show', $empleado->id)); ?>"><button type="submit" class="btn btn-success">Ver</button></a></td>

		<td><a href="<?php echo e(route('empleados.edit', $empleado->id)); ?>"><button type="submit" class="btn btn-primary">Editar</button></a></td>
		<td><form method="POST" action="/empleados/<?php echo e($empleado->id); ?>">
			<?php echo e(csrf_field()); ?>

			<td><input type="hidden" name="_method" value="delete">
			<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres eliminar el registro?')">Eliminar</button><td>
			
	</tr>		
		</form>
		
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php echo $empleados->render(); ?>

	
	<form action="<?php echo e(route('busca')); ?>" method="post">
    <?php echo csrf_field(); ?>
  
</form>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
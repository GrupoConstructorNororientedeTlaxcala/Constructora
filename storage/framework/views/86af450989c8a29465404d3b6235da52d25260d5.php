<link rel="shortcut icon" href="/imgProductos/logocuerno.png" width	="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/imgProductos/imgconlogo.png" width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenidousuario"); ?>
<table><tr><td width="1000px"></td><td><form><?php echo $__env->make('proveedores.buscarpro', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></form></td></tr></table>
<center><h2>CONSULTA DE PROVEEDORES REGISTRADOS</h2></center>

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
      <th scope="direccion">Dirección</th>
      <th scope="correo">Correo</th>
      <th scope="telefono">Teléfono</th>
      <th scope="producto">Producto</th>
      
	  <th><a href="<?php echo e(route('proveedores.create')); ?>"><button type="button" class="btn btn-secondary"> Registrar </button></a></th>
	  <th><a href="<?php echo e(url('gPDF')); ?>" class="btn btn-outline-info" onclick="return confirm('¿Quieres implimir un reporte?')">Descargar PDF</a></th>
	  <th></th><th></th>
</tr>
   
  </thead>
	<?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</tr>
	
<tr>	
		<td><?php echo e($proveedor->id); ?></td>
		<td><?php echo e($proveedor->nombre); ?></td>
		<td><?php echo e($proveedor->apaterno); ?></td>
		<td><?php echo e($proveedor->amaterno); ?></td>
		<td><?php echo e($proveedor->direccion); ?></td>
		<td><?php echo e($proveedor->correo); ?></td>
		<td><?php echo e($proveedor->telefono); ?></td>
		<td><?php echo e($proveedor->producto); ?></td>
		<td><a href="<?php echo e(route('proveedores.show', $proveedor->id)); ?>"><button type="submit" class="btn btn-success">Ver</button></a></td>

		<td><a href="<?php echo e(route('proveedores.edit', $proveedor->id)); ?>"><button type="submit" class="btn btn-primary">Editar</button></a></td>
			
		<td><form method="POST" action="/proveedores/<?php echo e($proveedor->id); ?>">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="_method" value="delete">
				<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres eliminar el registro?')" >Eliminar</button><td>
			
	</tr>		
		</form>
		
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php echo $proveedores->render(); ?>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
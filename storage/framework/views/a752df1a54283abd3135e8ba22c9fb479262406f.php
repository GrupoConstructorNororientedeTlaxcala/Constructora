<?php $__env->startSection("cabecera"); ?>
<h2>CONSULTA DE REGISTROS</h2>
<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenido"); ?>
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="id">Id</th>
      <th scope="nombre">Nombre</th>
      <th scope="apaterno">Apellido paterno</th>
      <th scope="amaterno">Apellido Materno</th>
      <th scope="telefono">Teléfono</th>
      <th scope="contrasena">Contraseña</th>
      <th scope="correo">Correo</th>

     <td><a href="<?php echo e(route('usuarios.create')); ?>"><button type="button" class="btn btn-secondary"> Registrar </button></a></td>
</tr>
   
  </thead>
	<?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</tr>
	
<tr>	
		<td><?php echo e($usuario->id); ?></td>
		<td><?php echo e($usuario->nombre); ?></td>
		<td><?php echo e($usuario->apaterno); ?></td>
		<td><?php echo e($usuario->amaterno); ?></td>
		<td><?php echo e($usuario->telefono); ?></td>
		<td><?php echo e($usuario->contrasena); ?></td>
		<td><?php echo e($usuario->correo); ?></td>

		<td><a href="<?php echo e(route('usuarios.edit', $usuario->id)); ?>"><button type="submit" class="btn btn-primary">Editar</button></a></td>
		<td><form method="POST" action="/usuarios/<?php echo e($usuario->id); ?>">
			<?php echo e(csrf_field()); ?>

			<td><input type="hidden" name="_method" value="delete"></td>
			<td><button type="submit" class="btn btn-primary" onclick="Quieres eliminar?" >Eliminar registro</button><td>
			
	</tr>		
		</form>
		
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layout", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
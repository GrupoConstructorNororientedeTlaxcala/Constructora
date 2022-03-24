<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h2>Editar Registro de Empleado</h2></center>
<center><table>
<form method="POST" action="/empleados/<?php echo e($empleados->id); ?>">
		 <tr>
			    <td width="320px"><label for="nombre">Nombre:</label>
			     <input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Coloca Nombre" name="nombre" value="<?php echo e($empleados->nombre); ?>" required>
			    </td>
			    
  		</tr>
  		

  			<?php echo e(csrf_field()); ?>

			<input type="hidden" name="_method" value="PUT">

  		<tr>
			    <td width="320px"><label for="apaterno">Apellido Paterno:</label>
			    <input type="text" class="form-control" id="apaterno" aria-describedby="apaterno" placeholder="Coloca Apellido Paterno" name="apaterno" value="<?php echo e($empleados->apaterno); ?>" required>
			    </td>
		</tr>
		<tr>	    
  		
			    <td width="320px"><label for="amaterno">Apellido Materno:</label>
			    <input type="text" class="form-control" id="amaterno" aria-describedby="amaterno" placeholder="Coloca Apellido Materno" name="amaterno" value="<?php echo e($empleados->amaterno); ?>" required>
			    </td>
		</tr>
		<tr>	    
  		
			    <td width="320px"><label for="telefono">Teléfono:</label>
			    <input type="text" class="form-control" id="telefono" aria-describedby="telefono" placeholder="Coloca Teléfono" name="telefono" pattern="[0-9]{10}" value="<?php echo e($empleados->telefono); ?>" required>
			    </td>
  		</tr>
  		<tr>
			    <td width="320px"><label for="correo">Correo:</label>
			    <input type="email" class="form-control" id="correo" aria-describedby="correo" placeholder="Coloca Correo" name="correo" value="<?php echo e($empleados->correo); ?>" required>
			    </td>
		</tr>
		<tr>
	

			    <td width="320px"><label for="puesto">Puesto:</label>
			    <input type="text" class="form-control" id="puesto" aria-describedby="puesto" placeholder="Coloca Puesto" name="puesto" value="<?php echo e($empleados->puesto); ?>" required>
			    </td>
		</tr>
		<tr>
			    
  		<td width="320px"><button type="submit" class="btn btn-primary">Actualizar</button>
		
		<a class="btn btn-primary" href="<?php echo e(route('empleados.index')); ?>">Cancel</a>
		
		</td>
		</tr>
</form>	
</table></center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
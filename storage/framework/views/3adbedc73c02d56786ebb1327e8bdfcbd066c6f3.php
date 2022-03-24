<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h2>Editar Registro de Bizcocho</h2></center>
<center>
	<table>
		<form method="POST" action="/bizcocheria/<?php echo e($bizcochos->id); ?>">
				<tr> 	
					    <td><label for="nombre">Nombre:</label></td>
					    <td><input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Coloca Nombre" name="nombre" value="<?php echo e($bizcochos->nombre); ?>" required></td>
				</tr>	    
		  		
		  			<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="PUT">
				<tr>
		  			    <td width="320px"><label for="descripcion">Descripción:</label></td>
					    <td width="320px"><input type="text" class="form-control" id="descripcion" aria-describedby="descripcion" placeholder="Coloca Descripción" name="descripcion" value="<?php echo e($bizcochos->descripcion); ?>" required></td>
				</tr>
				<tr>

					    <td width="320px"><label for="precio">Precio:</label></td>
					    <td width="320px"><input type="text" class="form-control" id="precio" aria-describedby="precio" placeholder="Coloca Precio" name="precio" pattern="[0-9.]{1,5}" value="<?php echo e($bizcochos->precio); ?>" required></td>
				</tr>	    
		  		    
		  		
				<tr>
					    <td width="320px"><label for="estatus">Estatus:</label></td>
					    <td width="320px"><select class="form-control" placeholder="Selecciona" name="estatus" required>
					    	<option></option>
					    	<option>Disponible</option>
					    	<option>No Disponible</option>
					    </select></td>
				</tr>
				<tr>	    
		  		

					    <td width="320px"><label for="imagen">Foto:</label></td>
					    <td width="320px"><input type="file" class="form-control" id="imagen" aria-describedby="imagen" name="imagen" required> <img src="/imgProductos/<?php echo e($bizcochos->imagen); ?>" width="100" height="100"></td>
				</tr>
				<tr>	    
		  	

				<td width="320px"><button type="submit" class="btn btn-primary">Actualizar</button>
				
				<a class="btn btn-primary" href="<?php echo e(route('bizcocheria.index')); ?>">Cancel</a>
			</tr>
		</form>	
		</table>
</center>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
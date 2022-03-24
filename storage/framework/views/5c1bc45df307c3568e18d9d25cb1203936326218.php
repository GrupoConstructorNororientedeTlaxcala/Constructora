<link rel="shortcut icon" href="/imgProductos/logocuerno.png" width	="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h2>Editar Registro de Pan</h2></center>
<center>
	<table>
		<form method="POST" action="/productos/<?php echo e($productos->id); ?>">
				<tr> 	
					    <td><label for="nombre">Nombre:</label></td>
					    <td><input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Coloca Nombre" name="nombre" value="<?php echo e($productos->nombre); ?>" required></td>
				</tr>	    
		  		
		  			<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="PUT">
				<tr>
		  			    <td width="320px"><label for="descripcion">Descripción:</label></td>
					    <td width="320px"><input type="text" class="form-control" id="descripcion" aria-describedby="descripcion" placeholder="Coloca Descripción" name="descripcion" value="<?php echo e($productos->descripcion); ?>" required></td>
				</tr>
				<tr>

					    <td width="320px"><label for="precio">Precio:</label></td>
					    <td width="320px"><input type="text" class="form-control" id="precio" aria-describedby="precio" placeholder="Coloca Precio" pattern="[0-9.]{1,5}" name="precio" value="<?php echo e($productos->precio); ?>" required></td>
				</tr>	    
		  		
				<tr>
					    <td width="320px"><label for="estatus">Estatus:</label></td>
					    <td width="320px"><select class="form-control" placeholder="Selecciona" name="estatus" required >
					    	<option></option>
					    	<option>Disponible</option>
					    	<option>No Disponible</option>
					    </select></td>
				</tr>
				<tr>	    
		  		

					    <td width="320px"><label for="foto">Foto:</label></td>
					    <td width="320px"><input type="file" class="form-control" id="foto" aria-describedby="foto" name="foto" required> <img src="/imgProductos/<?php echo e($productos->foto); ?>" width="100" height="100"></td>
				</tr>
				<tr>	    
		  	

				<td width="320px"><button type="submit" class="btn btn-primary">Actualizar</button>
				
				<a class="btn btn-primary" href="<?php echo e(route('productos.index')); ?>">Cancel</a>
			</tr>
		</form>	
		</table>
</center>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
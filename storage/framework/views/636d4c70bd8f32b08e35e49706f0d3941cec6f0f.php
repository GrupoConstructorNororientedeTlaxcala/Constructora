<link rel="shortcut icon" href="/imgProductos/logocuerno.png" width	="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h3>Editar Registro de Proveedor</h3></center>
<center>
	<table>

			<form method="POST" action="/proveedores/<?php echo e($proveedores->id); ?>">
					<tr>	
							   <td width="320px"><label for="nombre">Nombre:</label>
							    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Coloca Nombre" name="nombre" value="<?php echo e($proveedores->nombre); ?>" required>
							    </td> 
					</tr>	    
				  		
				  			<?php echo e(csrf_field()); ?>

							<input type="hidden" name="_method" value="PUT">
					<tr><td width="320px">
				  		
							    <label for="apaterno">Apellido Paterno:</label>
							    <input type="text" class="form-control" id="apaterno" aria-describedby="apaterno" placeholder="Coloca Apellido Paterno" name="apaterno" value="<?php echo e($proveedores->apaterno); ?>" required>
					</td></tr>
					<tr><td width="320px">		    
				  		
							    <label for="amaterno">Apellido Materno:</label>
							    <input type="text" class="form-control" id="amaterno" aria-describedby="amaterno" placeholder="Coloca Apellido Materno" name="amaterno" value="<?php echo e($proveedores->amaterno); ?>" required>
					</td></tr>
					<tr><td width="320px">		    
				  		
							    <label for="direccion">Dirección:</label>
							    <input type="text" class="form-control" id="direccion" aria-describedby="direccion" placeholder="Coloca Dirección" name="direccion" value="<?php echo e($proveedores->direccion); ?>" required>
					</td></tr>
					<tr><td width="320px">		    
				  		
							    <label for="correo">Correo:</label>
							    <input type="email" class="form-control" id="correo" aria-describedby="correo" placeholder="Coloca Correo" name="correo" value="<?php echo e($proveedores->correo); ?>" required>
					</td></tr>
					<tr><td width="320px">	    
				  		
							    <label for="telefono">Teléfono:</label>
							    <input type="text" class="form-control" id="telefono" aria-describedby="telefono" placeholder="Coloca Teléfono" pattern="[0-9]{10}"  name="telefono" value="<?php echo e($proveedores->telefono); ?>" required>
					</td></tr>	
					<tr><td width="320px">		    
				  		
							    <label for="producto">Producto:</label>
							    <input type="text" class="form-control" id="producto" aria-describedby="producto" placeholder="Producto que Entrega" name="producto" value="<?php echo e($proveedores->producto); ?>" required>
					</td></tr>
					<tr>		    
				  
				  		<td width="320px"><button type="submit" class="btn btn-primary">Actualizar</button>
						
						<a class="btn btn-primary" href="<?php echo e(route('proveedores.index')); ?>">Cancel</a>
						</td>
					</tr>
				</form>
			</table>	
	</center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
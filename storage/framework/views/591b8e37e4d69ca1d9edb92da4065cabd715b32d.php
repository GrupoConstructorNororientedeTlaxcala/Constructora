<link rel="shortcut icon" href="/imgProductos/logocuerno.png" width	="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>


<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">


<?php $__env->startSection("contenidousuario"); ?>
<center>
	<table>
	<h1>Registrar Proveedor</h1>

		<form method="POST" action="/proveedores">
	
				<tr>
							
							    <td width="320px"><label for="nombre">Nombre:</label>
							    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" required placeholder="Coloca Nombre" name="nombre">
							    </td>
				</tr>		    
				  	
				  		<?php echo e(csrf_field()); ?>

				<tr>  	
							    <td width="320px"><label for="apaterno">Apellido Paterno:</label>
							    <input type="text" class="form-control" id="apaterno" aria-describedby="apaterno" required placeholder="Coloca Apellido Paterno" name="apaterno">
							    </td>
							    
				</tr>
				<tr> 		
							    <td width="320px"><label for="amaterno">Apellido Materno:</label>
							    <input type="text" class="form-control" id="amaterno" aria-describedby="amaterno" required placeholder="Coloca Apellido Materno" name="amaterno">
							    </td>
							   
				</tr> 
				<tr>  		
							    <td width="320px"><label for="direccion">Dirección:</label>
							    <input type="text" class="form-control" id="direccion" aria-describedby="direccion" required " placeholder="Coloca Dirección" name="direccion">
							    </td>
				</tr>
				<tr>			   
				  		
							    <td width="320px"><label for="correo">Correo:</label>
							    <input type="email" class="form-control" id="correo" aria-describedby="correo" required  title="Letras, numeros y caracteres diferentes. Tamaño mínimo: 9. Tamaño máximo: 50" placeholder="Coloca Correo" name="correo">
							    </td>
				</tr>
				<tr>		
							    <td width="320px"><label for="telefono">Teléfono:</label>
							    <input type="text" class="form-control" id="telefono" aria-describedby="telefono" required  pattern="[0-9]{10}" placeholder="Coloca Teléfono" name="telefono">
							    </td>
				</tr>
				<tr>							
				
							    <td width="320px"><label for="producto">Producto:</label>
							    <input type="text" class="form-control" id="producto" aria-describedby="producto" required placeholder="Producto que Entrega" name="producto">
							    </td>
				</tr>
				<tr>			   
				 
						<td width="320px">	
								<input class="btn btn-primary" type="submit" name="registrar" value="Registrar">
								<input class="btn btn-primary" type="reset" name="Limpiar" value="Limpiar">
						</td>
				</tr>
		</form>	
	</table>
</center>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
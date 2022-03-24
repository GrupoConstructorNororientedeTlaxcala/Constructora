<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/imgProductos/imgconlogo.png" width="1348" height="300"></center>
<?php $__env->startSection("cabecera"); ?>


<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">


<?php $__env->startSection("contenido"); ?>
<center><center><h3>Realizar Pedido</h3></center>
<table>
	<tr>
<form method="POST" action="/pedidos">
	
		
			<td width="320px"><label for="nombre">Nombre:</label>
					 <input type="text" class="form-control" id="nombre" aria-describedby="nombre"  title="Solo letras. Tamaño mínimo: 3. Tamaño máximo: 25" placeholder="Coloca Nombre" name="nombre" required></td>
					  
				  	
				  		<?php echo e(csrf_field()); ?>

				  		
	</tr>
		<td width="320px"><label for="apaterno">Apellido Paterno:</label>
					 <input type="text" class="form-control" id="apaterno" aria-describedby="apaterno"  title="Solo letras. Tamaño mínimo: 3. Tamaño máximo: 25" placeholder="Coloca Apellido Paterno" name="apaterno" required></td> 		
	</tr>
			<td width="320px"><label for="amaterno">Apellido Materno:</label>
					 <input type="text" class="form-control" id="amaterno" aria-describedby="amaterno"  title="Solo letras. Tamaño mínimo: 3. Tamaño máximo: 25" placeholder="Coloca Apellido Materno" name="amaterno" required></td> 		
	</tr>
	<tr>
		
						    <td wi	dth="320px"><label for="correo">Correo:</label>
						    <input type="email" class="form-control" id="correo" aria-describedby="correo" required  title="Letras, numeros y caracteres diferentes. Tamaño mínimo: 9. Tamaño máximo: 50" placeholder="Coloca Correo" name="correo"></td>
						   
			  	
	</tr>
	<tr>	
				
						    <td width="320px"><label for="pedido">Productos Solicitados:</label>
						    <input type="text" class="form-control" id="pedido" aria-describedby="pedido" required  title="Letras, numeros y caracteres diferentes. Tamaño mínimo: 5. Tamaño máximo: 225" placeholder="Escibe tu Pedido" name="pedido"></td>
						    
			  	
	</tr>
	<tr>	
				
						    <td width="320px"><label for="fechaentrega">Fecha Entrega:</label>
						    <input type="date" class="form-control" id="fechaentrega" aria-describedby="fechaentrega" required  title="Letras, numeros y caracteres diferentes. Tamaño mínimo: 5. Tamaño máximo: 225" placeholder="Elige fecha de entrega" name="fechaentrega"></td>
						    
			  	
	</tr>	
	<tr>		
					
					<td width="100px"><input class="btn btn-primary" type="submit" name="registrar" value="Registrar">
					<input class="btn btn-primary" type="reset" name="Limpiar" value="Limpiar"></td>
	</tr>
			</form>	
</table>
</center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pie'); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make("/..layout", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
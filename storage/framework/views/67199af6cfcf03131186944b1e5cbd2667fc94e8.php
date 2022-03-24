<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h2>Editar Registro Equipo de Transporte</h2></center>
<center>
	<table>
		<form method="POST" action="/equipotransporte/<?php echo e($equipots->idet); ?>">
				<tr> 	
					    <td><label for="detalleset">Detalles Equipo de Transporte:</label></td>
					    <td><input type="text" class="form-control" idet="detalleset" aria-describedby="detalleset" placeholder="Coloca Detalles Equipo de Transporte" name="detalleset" value="<?php echo e($equipots->detalleset); ?>" required></td>
				</tr>	    
		  		
		  			<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="PUT">
				<tr>

					    <td width="320px"><label for="marcaet">Marca:</label></td>
					    <td width="320px"><input type="text" class="form-control" idet="marcaet" aria-describedby="marcaet" placeholder="Coloca Marca" name="marcaet" value="<?php echo e($equipots->marcaet); ?>" required></td>
				</tr>

				<tr>
		  			    <td width="320px"><label for="modeloet">Modelo:</label></td>
					    <td width="320px"><input type="text" class="form-control" idet="modeloet" aria-describedby="modeloet" placeholder="Coloca Modelo" name="modeloet" value="<?php echo e($equipots->modeloet); ?>" required></td>
				</tr>

				<tr>

					    <td width="320px"><label for="numeroserie">Número de Serie</label></td>
					    <td width="320px"><input type="text" class="form-control" idet="numeroserie" aria-describedby="numeroserie" placeholder="Coloca Número de Serie" name="numeroserie" value="<?php echo e($equipots->numeroserie); ?>" required></td>
				</tr>

				<tr>	    
		  		

					    <td width="320px"><label for="fotoet">Foto:</label></td>
					    <td width="320px"><input type="file" class="form-control" idet="fotoet" aria-describedby="fotoet" name="fotoet" required> <img src="/imgProductos/<?php echo e($equipots->fotoet); ?>" width="100" height="100"></td>
				</tr>
				<tr>	    	    
		  	

				<td width="320px"><button type="submit" class="btn btn-primary">Actualizar</button>
				
				<a class="btn btn-primary" href="<?php echo e(route('maquinaria.index')); ?>">Cancel</a>
			</tr>
		</form>	
		</table>
</center>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
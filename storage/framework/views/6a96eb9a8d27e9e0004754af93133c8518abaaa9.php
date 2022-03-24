<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h2>Editar Registro de Maquinaria</h2></center>
<center>
	<table>
		<form method="POST" action="/maquinaria/<?php echo e($maquinarias->id); ?>">
				<tr> 	
					    <td><label for="detallesm">Detalles de Maquinaria:</label></td>
					    <td><input type="text" class="form-control" id="detallesm" aria-describedby="detallesm" placeholder="Coloca Detalles de Maquinaria" name="detallesm" value="<?php echo e($maquinarias->detallesm); ?>" required></td>
				</tr>	    
		  		
		  			<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="PUT">
				<tr>

					    <td width="320px"><label for="marca">Marca:</label></td>
					    <td width="320px"><input type="text" class="form-control" id="marca" aria-describedby="marca" placeholder="Coloca Marca" name="marca" value="<?php echo e($maquinarias->marca); ?>" required></td>
				</tr>

				<tr>
		  			    <td width="320px"><label for="modelo">Modelo:</label></td>
					    <td width="320px"><input type="text" class="form-control" id="modelo" aria-describedby="modelo" placeholder="Coloca Modelo" name="modelo" value="<?php echo e($maquinarias->modelo); ?>" required></td>
				</tr>

				<tr>

					    <td width="320px"><label for="numserie">Número de Serie</label></td>
					    <td width="320px"><input type="text" class="form-control" id="numserie" aria-describedby="numserie" placeholder="Coloca Número de Serie" name="numserie" value="<?php echo e($maquinarias->numserie); ?>" required></td>
				</tr>

				<tr>	    
		  		

					    <td width="320px"><label for="fotom">Foto:</label></td>
					    <td width="320px"><input type="file" class="form-control" id="fotom" aria-describedby="fotom" name="fotom" required> <img src="/imgProductos/<?php echo e($maquinarias->fotom); ?>" width="100" height="100"></td>
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
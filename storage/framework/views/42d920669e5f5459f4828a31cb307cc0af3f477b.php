<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h2>Editar Registro de Contrato</h2></center>
<center>
	<table>
		<form method="POST" action="/contrato/<?php echo e($contratos->idct); ?>">
				<tr> 	
					    <td><label for="numcontrato">Número de Contrato:</label></td>
					    <td><input type="text" class="form-control" idct="numcontrato" aria-describedby="numcontrato" placeholder="Coloca Número de Contrato" name="numcontrato" value="<?php echo e($contratos->numcontrato); ?>" required></td>
				</tr>	    
		  		
		  			<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="PUT">
				<tr>

					    <td width="320px"><label for="fechact">Fecha:</label></td>
					    <td width="320px"><input type="date" class="form-control" idct="fechact" aria-describedby="fechact" placeholder="Coloca Fecha" name="fechact" value="<?php echo e($contratos->fechact); ?>" required></td>
				</tr>

				<tr>
		  			    <td width="320px"><label for="descripcionct">Descripción:</label></td>
					    <td width="320px"><input type="text" class="form-control" idct="descripcionct" aria-describedby="descripcionct" placeholder="Coloca Descripción" name="descripcionct" value="<?php echo e($contratos->descripcionct); ?>" required></td>
				</tr>

				<tr>

					    <td width="320px"><label for="montoct">Monto: $</label></td>
					    <td width="320px"><input type="text" class="form-control" idct="montoct" aria-describedby="montoct" placeholder="Coloca Monto" name="montoct" value="<?php echo e($contratos->montoct); ?>" required></td>
				</tr>

				<tr>	    
		  		

					    <td width="320px"><label for="fotoct">Foto:</label></td>
					    <td width="320px"><input type="file" class="form-control" idct="fotoct" aria-describedby="fotoct" name="fotoct" required> <img src="/imgProductos/<?php echo e($contratos->fotoct); ?>" width="100" height="100"></td>
				</tr>
				<tr>	    	    
		  	

				<td width="320px"><button type="submit" class="btn btn-primary">Actualizar</button>
				
				<a class="btn btn-primary" href="<?php echo e(route('contrato.index')); ?>">Cancel</a>
			</tr>
		</form>	
		</table>
</center>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
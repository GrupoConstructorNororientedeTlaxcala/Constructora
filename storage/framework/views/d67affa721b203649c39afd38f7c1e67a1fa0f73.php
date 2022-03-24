<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h2>Editar Registro de Presupuesto</h2></center>
<center>
	<table>
		<form method="POST" action="/presupuesto/<?php echo e($presupuestos->idpr); ?>">
				<tr> 	
					    <td width="320px"><label for="fechaelaboracion">Fecha de Elaboración:</label></td>
					    <td width="320px"><input type="date" class="form-control" idpr="fechaelaboracion" aria-describedby="fechaelaboracion" placeholder="Coloca Fecha de Elaboración" name="fechaelaboracion" value="<?php echo e($presupuestos->fechaelaboracion); ?>" required></td>

					    
				</tr>	    
		  		
		  			<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="PUT">
				<tr>
		  			    <td width="320px"><label for="material">Material:</label></td>
					    <td width="320px"><input type="text" class="form-control" idpr="material" aria-describedby="material" placeholder="Coloca Material" name="material" value="<?php echo e($presupuestos->material); ?>" required></td>
				</tr>

				<tr>

					    <td width="320px"><label for="monto">Monto:$</label></td>
					    <td width="320px"><input type="text" class="form-control" idpr="monto" aria-describedby="monto" placeholder="Coloca Monto" name="monto" pattern="[0-9.]{1,9}" value="<?php echo e($presupuestos->monto); ?>" required></td>
				</tr>

				<tr>

					    <td width="320px"><label for="nombrecliente">Nombre de Cliente:</label></td>
					    <td width="320px"><input type="text" class="form-control" idpr="nombrecliente" aria-describedby="nombrecliente" placeholder="Coloca Nombre de Cliente" name="nombrecliente" value="<?php echo e($presupuestos->nombrecliente); ?>" required></td>
				</tr>	    
		  		    
				<tr>	    
		  	

				<td width="320px"><button type="submit" class="btn btn-primary">Actualizar</button>
				
				<a class="btn btn-primary" href="<?php echo e(route('presupuesto.index')); ?>">Cancel</a>
			</tr>
		</form>	
		</table>
</center>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
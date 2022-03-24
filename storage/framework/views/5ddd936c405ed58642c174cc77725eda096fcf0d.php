<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenidousuario"); ?>
<table><tr><td width="1000px"></td><td><form><?php echo $__env->make('presupuesto.buscarpresupuesto', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></form></td></tr></table>
<center><h2>CONSULTA DE PRESUPUESTO</h2></center>

<?php if(session()->get('accion')): ?>
	<hr>
	<div class="alert
		<?php echo e(session()->get('accion')=='guardar'? 'alert-success':''); ?>

		<?php echo e(session()->get('accion')=='editar'? 'alert-primary':''); ?>

		<?php echo e(session()->get('accion')=='eliminar'? 'alert-danger':''); ?>"
		>
		<?php echo e(session()->get('mensaje')); ?>

	</div>
<?php endif; ?>

<table class="table">
  <thead class="thead-dark">
	<tr> 
	      <th scope="idpr">Id</th>
	      <th scope="fechaelaboracion">Fecha de Elaboración</th>
	      <th scope="material">Material</th>
	      <th scope="monto">Monto</th>   
	      <th scope="nombrecliente">Nombre de Cliente</th>   

		 <th><a href="<?php echo e(route('presupuesto.create')); ?>"><button type="button" class="btn btn-secondary"> Registrar</button></a></th>
		<th><a href="<?php echo e(url('generapsPDF')); ?>" class="btn btn-outline-info" onclick="return confirm('¿Quieres implimir un reporte?')">Descargar PDF</a></th>  
		<th></th>
	 </tr> 
		<?php $__currentLoopData = $presupuestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $presupuesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>	
			<td><?php echo e($presupuesto->idpr); ?></td>
			<td><?php echo e($presupuesto->fechaelaboracion); ?></td>
			<td><?php echo e($presupuesto->material); ?></td>
			<td>$<?php echo e($presupuesto->monto); ?></td>
			<td><?php echo e($presupuesto->nombrecliente); ?></td>
						
			<td><a href="<?php echo e(route('presupuesto.show', $presupuesto->idpr)); ?>"><button type="submit" class="btn btn-success">Ver</button></a></td>

			<td><a href="<?php echo e(route('presupuesto.edit', $presupuesto->idpr)); ?>"><button type="submit" class="btn btn-primary">Editar</button></a></td>
			
			<td><form method="POST" action="/presupuesto/<?php echo e($presupuesto->idpr); ?>">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="_method" value="delete">
				<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres eliminar el registro?')">Eliminar </button></td>
				
				
			</form>
		
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php echo $presupuestos->render(); ?>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
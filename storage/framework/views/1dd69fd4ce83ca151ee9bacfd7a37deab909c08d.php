<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenidousuario"); ?>

<table><tr><td width="1000px"></td><td><form><?php echo $__env->make('contrato.buscarcontrato', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></form></td></tr></table> 

<center><h2>CONSULTA DE CONTRATOS REGISTRADOS</h2></center>

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
	      <th scope="idct">Id</th>
	      <th scope="numcontrato">Número de Contrato</th>
	      <th scope="fechact">Fecha</th>
	      <th scope="descripcionct">Descripción</th> 
	      <th scope="montoct">Monto</th>
	      <th scope="fotoct">Foto</th>

		 <th><a href="<?php echo e(route('contrato.create')); ?>"><button type="button" class="btn btn-secondary"> Registrar</button></a></th>
		<th><a href="<?php echo e(url('generactPDF')); ?>" class="btn btn-outline-info" onclick="return confirm('¿Quieres implimir un reporte?')">Descargar PDF</a></th>  
		<th></th>
	 </tr> 
		<?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>	
			<td><?php echo e($contrato->idct); ?></td>
			<td><?php echo e($contrato->numcontrato); ?></td>
			<td><?php echo e($contrato->fechact); ?></td>
			<td><?php echo e($contrato->descripcionct); ?></td>
			<td>$<?php echo e($contrato->montoct); ?></td>
			<td><img src="imgProductos/<?php echo e($contrato->fotoct); ?>" width="100" height="100"></td>


			<td><a href="<?php echo e(route('contrato.show', $contrato->idct)); ?>"><button type="submit" class="btn btn-success">Ver</button></a></td>

			<td><a href="<?php echo e(route('contrato.edit', $contrato->idct)); ?>"><button type="submit" class="btn btn-primary">Editar</button></a></td>
			
			<td><form method="POST" action="/contrato/<?php echo e($contrato->idct); ?>">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="_method" value="delete">
				<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres eliminar el registro?')">Eliminar </button></td>
				
				
			</form>
		
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php echo $contratos->render(); ?>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
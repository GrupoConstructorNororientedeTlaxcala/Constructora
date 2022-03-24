<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1000" height="250"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenidousuario"); ?>

<center>
	<h2>PENDIENTES</h2>
		<a href="<?php echo e(route('pendientes.create')); ?>"><button type="button" class="btn btn-secondary"> Registrar</button></a>
		<?php echo $paginas->render(); ?>

</center>
<br>

<!--Aqui coloco las alertas-->
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
<!--Coloco la estructura de las cartas que se muestran en el index de todos los registros-->
<div class="row justify-content-center">
	<?php $__currentLoopData = $paginas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pagina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
		<div class="col-3">
			<div class="card">
				<div class="card-header">
					<label>
						<b>Título:</b>
					</label>
						<span><?php echo e($pagina->titulo); ?></span>
							<br>
				</div>
				<div class="card-body">
					<b>Descripción:</b>
						</label><p class="card-text"><?php echo e($pagina->descripcionp); ?></p>
						<br>
							<div class="card-footer">
								<a href="<?php echo e(route('pendientes.show', $pagina->idp)); ?>">
									<button type="submit" class="btn btn-success">Ver</button>
								</a>
								<br>
								<br>		
								<a href="<?php echo e(route('pendientes.edit', $pagina->idp)); ?>">
									<button type="submit" class="btn btn-primary">Editar</button>
								</a>
								<br>
								<br>
							
						<form method="POST" action="/pendientes/<?php echo e($pagina->idp); ?>">
							<?php echo e(csrf_field()); ?>

								<input type="hidden" name="_method" value="delete">
									<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres eliminar el registro?')">Eliminar 
									</button>
						</form>
				</div>
						<form accept="" method="post">
								<input type="hidden" name="titulo" idp="idp">
								<input type="hidden" name="descripcionp" idp="descripcionp">
						</form>
			</div>
		</div>
</div>			
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
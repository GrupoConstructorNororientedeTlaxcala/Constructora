<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>
<?php $__env->startSection("contenidousuario"); ?>
<div class="row justify-content-center">
	<div class="col-lg-8 col-">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">DETALLES DE COMENTARIO</h1>
			</div>
			<div class="card-body">
				<p>Id:<?php echo e($comentario->id); ?></p>
				<p>Nombre: <?php echo e($comentario->nombre); ?></p>
				<p>Comentario: <?php echo e($comentario->correo); ?></p>
				<p>Mensaje:	<?php echo e($comentario->mensaje); ?></p>
				<a href="<?php echo e(route('comentarios.index')); ?>" class="btn btn-secondary">Regresar</a>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
					
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
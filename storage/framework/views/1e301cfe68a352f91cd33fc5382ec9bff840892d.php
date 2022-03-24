<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1000" height="250"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>
<div class="row justify-content-center">
	<div class="col-lg-8 col-">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">Detalles de Documento Legal de Empresa</h1>
			</div>
			<div class="card-body">
		<p><b>ID:</b> <?php echo e($empresas->ide); ?></p>


		<p><b>Nombre:</b> <?php echo e($empresas->nombred); ?></p>


		<p><b>Fecha:</b> <?php echo e($empresas->fecha); ?></p>


		<p><b>Descripción:</b> <?php echo e($empresas->descripcion); ?></p>


		<p><b>Foto:</b> <img src="/imgProductos/<?php echo e($empresas->escaneo); ?>" width="100" height="100"></p>
		<center><a href="<?php echo e(route('empresa.index')); ?>" class="btn btn-secondary">Regresar</a></center>
			</div>
		</div>
	</div>
</div>

		<?php $__env->stopSection(); ?>


<?php $__env->startSection("pieusuario"); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
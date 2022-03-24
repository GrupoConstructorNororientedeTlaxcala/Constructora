<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1000" height="250"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>
<div class="row justify-content-center">
	<div class="col-lg-8 col-">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">Detalles de Contcato</h1>
			</div>
			<div class="card-body">
		<p><b>ID:</b> <?php echo e($contactos->idc); ?></p>


		<p><b>Nombre:</b> <?php echo e($contactos->nombre); ?></p>


		<p><b>Apellido Paterno:</b> <?php echo e($contactos->apaterno); ?></p>


		<p><b>Apellido Materno:</b> <?php echo e($contactos->amaterno); ?></p>

		<p><b>Teléfono:</b> <?php echo e($contactos->telefono); ?></p>

		<p><b>Correo Electrónico:</b> <?php echo e($contactos->mail); ?></p>

		<p><b>Dirección:</b> <?php echo e($contactos->direccion); ?></p>

		<center>
			<a href="<?php echo e(route('contacto.index')); ?>" class="btn btn-secondary">Regresar</a>
		</center>
			</div>
		</div>
	</div>
</div>

		<?php $__env->stopSection(); ?>


<?php $__env->startSection("pieusuario"); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
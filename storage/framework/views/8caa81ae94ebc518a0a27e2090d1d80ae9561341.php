<link rel="shortcut icon" href="/imgProductos/logocuerno.png" width	="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>
<div class="row justify-content-center">
	<div class="col-lg-8 col-">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">Detalles de Pan</h1>
			</div>
			<div class="card-body">
		<p>ID: <?php echo e($productos->id); ?></p>


		<p>Nombre: <?php echo e($productos->nombre); ?></p>


		<p>Descripción: <?php echo e($productos->descripcion); ?></p>


		<p>Precio: $<?php echo e($productos->precio); ?></p>


		<p>Estatus: <?php echo e($productos->estatus); ?></p>


		<p>Foto: <img src="/imgProductos/<?php echo e($productos->foto); ?>" width="100" height="100"></p>
		<a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">Regresar</a>
			</div>
		</div>
	</div>
</div>

		<?php $__env->stopSection(); ?>


<?php $__env->startSection("pieusuario"); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
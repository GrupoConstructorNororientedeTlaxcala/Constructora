<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>
<div class="row justify-content-center">
	<div class="col-lg-8 col-">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">Detalles de Pedido</h1>
			</div>
			<div class="card-body">
					<p>ID:  <?php echo e($pedidos->id); ?></p>
					<p>Nombre:  <?php echo e($pedidos->nombre); ?></p>
					<p>Apellido Paterno:  <?php echo e($pedidos->apaterno); ?></p>
					<p>Apellido Materno:  <?php echo e($pedidos->amaterno); ?></p>
					<p>Correo:  <?php echo e($pedidos->correo); ?></p>
					<p>Productos Solicitados:  <?php echo e($pedidos->pedido); ?></p>
					<p>Fecha Entrega:  <?php echo e($pedidos->fechaentrega); ?></p>
				<a href="<?php echo e(route('pedidos.index')); ?>" class="btn btn-secondary">Regresar</a>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection("pieusuario"); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
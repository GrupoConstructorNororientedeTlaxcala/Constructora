<link rel="shortcut icon" href="/imgProductos/logocuerno.png" width	="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>



<?php $__env->startSection("contenidousuario"); ?>
	<div class="row justify-content-center">
	<div class="col-lg-8 col-">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">Detalles de Proveedor</h1>
			</div>
			<div class="card-body">
					
					<p>ID: <?php echo e($proveedores->id); ?></p>

					<p>Nombre: <?php echo e($proveedores->nombre); ?></p>

					<p>Apellido Paterno: <?php echo e($proveedores->apaterno); ?></p>

					<p>Apellido Materno: <?php echo e($proveedores->amaterno); ?></p>

					<p>Dirección: <?php echo e($proveedores->direccion); ?></p>

					<p>Correo: <?php echo e($proveedores->correo); ?></p>	

					<p>Teléfono: <?php echo e($proveedores->telefono); ?></p>

					<p>Proveedores: <?php echo e($proveedores->producto); ?></p>

					<a href="<?php echo e(route('proveedores.index')); ?>" class="btn btn-secondary">Regresar</a>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
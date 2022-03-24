<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>
<?php $__env->startSection("contenidousuario"); ?>

<div class="row justify-content-center">
	<div class="col-lg-8 col-">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">Detalles de Empleado</h1>
			</div>
			<div class="card-body">

					<p>ID: <?php echo e($empleados->id); ?></>
					</p>

					<p>Nombre:<?php echo e($empleados->nombre); ?>

					</p>

					<p>Apellido Paterno: <?php echo e($empleados->apaterno); ?>

					</p>

					<p>Apellido Materno: <?php echo e($empleados->amaterno); ?>

					</p>

					<p>Teléfono: <?php echo e($empleados->telefono); ?>

					</p>

					<p>Correo: <?php echo e($empleados->correo); ?>

					</p>

					<p>Puesto: <?php echo e($empleados->puesto); ?>

					</p>
					<a href="<?php echo e(route('empleados.index')); ?>" class="btn btn-secondary">Regresar</a>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
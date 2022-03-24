<title>Usuarios</title>

<?php $__env->startSection('cabeza'); ?>

<?php $__env->startSection('contenido'); ?>

<h4>Estoy en formulario Registro de Usuarios</h4>

	<form method="POST" action="usuarios">
		<label for="nombre">
			Nombre:
			<input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>">
			<?php echo e($errors->first('nombre')); ?>

		</label><br>

		<label for="apaterno">
			Apellido Paterno:
			<input type="text" name="apaterno" value="<?php echo e(old('apaterno')); ?>">
			<?php echo e($errors->first('apaterno')); ?>

		</label><br>


		<label for="amaterno">
			Apellido Materno:
			<input type="text" name="amaterno" value="<?php echo e(old('amaterno')); ?>">
			<?php echo e($errors->first('amaterno')); ?>

		</label><br>


		<label for="telefono">
			Apellido Paterno:	
			<input type="number" name="telefono" value="<?php echo e(old('telefono')); ?>">
			<?php echo e($errors->first('telefono')); ?>

		</label><br>

		<label for="correo">
			Correo:
			<input type="email" name="correo" value="<?php echo e(old('email')); ?>">
			<?php echo e($errors->first('email')); ?>

		</label><br>

		
		
		<input type="submit" name="enviar" value="Enviar mensaje">
		</form>	
		<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
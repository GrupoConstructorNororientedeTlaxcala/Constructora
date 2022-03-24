<title>Contacto</title>

<?php $__env->startSection('cabeza'); ?>

<?php $__env->startSection('contenido'); ?>

<h4>Estoy en formulario contacto</h4>

	<form method="POST" action="contactanos">
		<label for="nombre">
			Nombre:
			<input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>">
			<?php echo e($errors->first('nombre')); ?>

		</label><br><br>

		<label for="correo">
			Correo:
			<input type="email" name="email" value="<?php echo e(old('email')); ?>">
			<?php echo e($errors->first('email')); ?>

		</label><br><br>

		<label for="msj">
			Mensaje:
			<textarea name="msj" value="<?php echo e(old('msj')); ?> ">
			<?php echo e($errors->first('msj')); ?>

			</textarea>
		</label><br><br>
		<input type="submit" name="enviar" value="Enviar mensaje">
		</form>	
		<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<title>Panadería</title>
<?php $__env->startSection('cabeza'); ?>

<?php $__env->startSection('contenido'); ?>
<h4>Aquí se encuentra todo el tipo de pan dulce y salado </h4>

<form method="POST" action="pan">

<label for="nombre">
		Nombre:
			<input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>">
			<?php echo e($errors->first('nombre')); ?>

		</label><br><br>

		
		<label for="precio">
			Precio:
			<input type="number" name="precio" value="<?php echo e(old('precio')); ?>">
			<?php echo e($errors->first('precio')); ?>

		</label><br><br>
		
		<label for="descripcion">
			Descripción:
			<textarea name="descripcion" value="<?php echo e(old('descripcion')); ?> ">
			<?php echo e($errors->first('descripcion')); ?>

			</textarea>
		</label><br><br>
		<input type="submit" name="enviar" value="Enviar mensaje">

	
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
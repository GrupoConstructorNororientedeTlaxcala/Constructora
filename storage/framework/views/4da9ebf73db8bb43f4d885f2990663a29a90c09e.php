<?php $__env->startSection("cabecera"); ?>
Editar registro
<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenido"); ?>


<form method="POST" action="/comentarios/<?php echo e($comentario->id); ?>">
			
			<div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Nombre" name="nombre" value="<?php echo e($comentario->nombre); ?>">
			    <small id="nombre" class="form-text text-muted">Nunca compartiremos su nombre con nadie. más.</small>
  		</div>
  		<br>

			<?php echo e(csrf_field()); ?>

			<input type="hidden" name="_method" value="PUT">

		<div class="form-group">
			    <label for="correo">Correo:</label>
			    <input type="text" class="form-control" id="correo" aria-describedby="correo" placeholder="corre@gmail.com" name="correo" value="<?php echo e($comentario->correo); ?>">
			    <small id="correo" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
  		</div>
		
<br>
		<div class="form-group">
			    <label for="mensaje">Mensaje:</label>
			    <input type="text" class="form-control" id="mensaje" aria-describedby="mensaje" placeholder="corre@gmail.com" name="mensaje" value="<?php echo e($comentario->mensaje); ?>">
			    <small id="mensaje" class="form-text text-muted">Su mensaje es cofidencial no se compartira con nadie más.</small>
  		</div>
		
<br>	
<?php echo e(csrf_field()); ?>

		<button type="submit" class="btn btn-primary">Actualizar</button>
		
		<button type="submit" class="btn btn-primary">cancelar</button>
</form>	
		

<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layout", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection("cabecerausuario"); ?>
Editar registro
<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>


<form method="POST" action="/usuarios/<?php echo e($usuarios->id); ?>">
		 <div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Nombre" name="nombre" value="<?php echo e($usuarios->nombre); ?>">
			    
  		</div>
  		<br>

  			<?php echo e(csrf_field()); ?>

			<input type="hidden" name="_method" value="PUT">

  		<div class="form-group">
			    <label for="apaterno">Apellido Paterno:</label>
			    <input type="text" class="form-control" id="apaterno" aria-describedby="apaterno" placeholder="Apellido Paterno" name="apaterno" value="<?php echo e($usuarios->apaterno); ?>">
			    
  		</div>
<br>
		<div class="form-group">
			    <label for="amaterno">Apellido Materno:</label>
			    <input type="text" class="form-control" id="amaterno" aria-describedby="amaterno" placeholder="Apellido Materno" name="amaterno" value="<?php echo e($usuarios->amaterno); ?>">
			    
  		</div>
<br>
		<div class="form-group">
			    <label for="telefono">Teléfono:</label>
			    <input type="text" class="form-control" id="telefono" aria-describedby="telefono" placeholder="2411263362" name="telefono" value="<?php echo e($usuarios->telefono); ?>">
			    
  		</div>	
<br>
		<div class="form-group">
			    <label for="contrasena">Contraseña:</label>
			    <input type="text" class="form-control" id="contrasena" aria-describedby="contrasena" placeholder="Password" name="contrasena" value="<?php echo e($usuarios->contrasena); ?>">
			    
  		</div>
			
<br>
		<div class="form-group">
			    <label for="correo">Correo:</label>
			    <input type="text" class="form-control" id="correo" aria-describedby="correo" placeholder="corre@gmail.com" name="correo" value="<?php echo e($usuarios->correo); ?>">
			    <small id="correo" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
  		</div>
		
<br>
	
<?php echo e(csrf_field()); ?>

		<button type="submit" class="btn btn-primary">Actualizar</button>
		
		<button type="submit" class="btn btn-primary">cancelar</button>
</form>	

<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
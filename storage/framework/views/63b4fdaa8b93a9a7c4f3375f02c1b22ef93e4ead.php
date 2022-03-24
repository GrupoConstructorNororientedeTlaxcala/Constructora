<?php $__env->startSection("cabecera"); ?>

<h1>Crear Usuario</h1>
<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">


<?php $__env->startSection("contenido"); ?>


<form method="POST" action="/usuarios">
	
		
			<div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" required pattern="[A-Za-z]{3,25}" placeholder="Nombre" name="nombre">
			    <small id="nombre" class="form-text text-muted">Nunca compartiremos su nombre con nadie. más.</small>
  		</div>
  		<?php echo e(csrf_field()); ?>

  		<br>
			<div class="form-group">
			    <label for="apaterno">Apellido Paterno:</label>
			    <input type="text" class="form-control" id="apaterno" aria-describedby="apaterno" required pattern="[A-Za-z]{3,25}" placeholder="Apellido Paterno" name="apaterno">
			    <small id="apaterno" class="form-text text-muted">Nunca compartiremos su apellido paterno con nadie más.</small>
  		</div>
<br>
			
		<div class="form-group">
			    <label for="amaterno">Apellido Materno:</label>
			    <input type="text" class="form-control" id="amaterno" aria-describedby="amaterno" required pattern="[A-Za-z]{3,25}" placeholder="Apellido Materno" name="amaterno">
			    <small id="amaterno" class="form-text text-muted">Nunca compartiremos su apellido materno con nadie más.</small>
  		</div>
<br>

			<div class="form-group">
			    <label for="telefono">Teléfono:</label>
			    <input type="number" class="form-control" id="telefono" aria-describedby="telefono" required placeholder="2411263362" name="telefono">
			    <small id="telefono" class="form-text text-muted">Nunca compartiremos su teléfono con nadie más.</small>
  		</div>	
<br>
		<div class="form-group">
			    <label for="contrasena">Contraseña:</label>
			    <input type="text" class="form-control" id="contrasena" aria-describedby="contrasena" required placeholder="mi password" placeholder="Password" name="contrasena">
			    <small id="contrasena" class="form-text text-muted">Nunca compartiremos su contraseña es confidencial.</small>
  		</div>
			
<br>
		<div class="form-group">
			    <label for="correo">Correo:</label>
			    <input type="text" class="form-control" id="correo" aria-describedby="correo" required  title="Letras, numeros y caracteres diferentes. Tamaño mínimo: 9. Tamaño máximo: 50" placeholder="corre@gmail.com" name="correo">
			    <small id="correo" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
  		</div>
		
<br>
			
			
		<?php echo e(csrf_field()); ?>

		<input class="btn btn-primary" type="submit" name="registrar" value="Registrar">
		<input class="btn btn-primary" type="reset" name="Limpiar" value="Limpiar">
</form>	

<?php $__env->stopSection(); ?>


<?php echo $__env->make("/..layout", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection("cabecerausuario"); ?>

<h1>Crear Registro de Pan</h1>
<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">


<?php $__env->startSection("contenidousuario"); ?>


<form method="POST" action="/panes">
	
		
			<div class="form-group">
			    <label for="imagen">Imágen:</label>
			    <input type="text" class="form-control" id="imagen" aria-describedby="imagen" required placeholder="img.png" name="imagen">
			    
  		</div>
  		<?php echo e(csrf_field()); ?>

  		<br>
			<div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" required pattern="[A-Za-z]{3,25}" placeholder="Nombre" name="nombre">
			    
  		</div>
<br>
			
		<div class="form-group">
			    <label for="descripcion">Descripción:</label>
			    <input type="text" class="form-control" id="descripcion" aria-describedby="descripcion" required placeholder="Pan Delicioso con chocolate" name="descripcion">
			   
  		</div>
<br>

			<div class="form-group">
			    <label for="precio">Precio:</label>
			    <input type="precio" class="form-control" id="precio " aria-describedby="precio" required placeholder="8 pesos" name="precio">
			    
  		</div>	

			
<br>
		<div class="form-group">
			    <label for="estatus">Estatus:</label>
			    <input type="text" class="form-control" id="estatus" aria-describedby="estatus" required  placeholder="disponible" name="estatus">
			    
  		</div>
		
<br>	
			
		<?php echo e(csrf_field()); ?>

		<input class="btn btn-primary" type="submit" name="registrar" value="Registrar">
		<input class="btn btn-primary" type="reset" name="Limpiar" value="Limpiar">
</form>	

<?php $__env->stopSection(); ?>


<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
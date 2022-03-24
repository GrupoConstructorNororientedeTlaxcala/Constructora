<?php $__env->startSection("cabecerausuario"); ?>


<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>

<center><h1>Crear Producto</h1></center>
<form method="POST" action="/productos" onsubmit="return validaRegistro();" enctype="multipart/form-data">
	
		
			<div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" required " placeholder="Nombre" name="nombre">
			    
  		</div>
  		<?php echo e(csrf_field()); ?>

  		<br>
			<div class="form-group">
			    <label for="descripción">Descripción:</label>
			    <input type="text" class="form-control" id="descripcion" aria-describedby="descripcion" required placeholder="descripcion" name="descripcion">
			    
  		</div>
<br>
			
		<div class="form-group">
			    <label for="precio">Precio</label>
			    <input type="text" class="form-control" id="precio" aria-describedby="precio" required pattern="[0-9]{3,25}" placeholder="precio" name="precio">
			   
  		</div>
<br>

			<div class="form-group">
			    <label for="cantidad">Cantidad:</label>
			    <input type="number" class="form-control" id="cantidad" aria-describedby="cantidad" required placeholder="30" name="cantidad">
			    
  		</div>	

			
<br>
		<div class="form-group">
			    <label for="categoria">Categoría:</label>
			    <input type="text" class="form-control" id="categoria" aria-describedby="categoria" required  title="Letras, numeros y caracteres diferentes. Tamaño mínimo: 9. Tamaño máximo: 50" placeholder="Pan Dulce" name="categoria">
			    
  		</div>
		
<br>

		<div class="form-group">
			    <label for="estatus">Estatus:</label>
			    <input type="text" class="form-control" id="estatus" aria-describedby="estatus" required placeholder="Disponible"  name="estatus">
			   
  		</div>
  		<br>

		<div class="form-group">
			    <label for="foto">Foto:</label>
			    <input type="file" class="form-control" id="foto" aria-describedby="foto" required  name="foto">
			   
  		</div>
			
			
		<?php echo e(csrf_field()); ?>

		<input class="btn btn-primary" type="submit" name="registrar" value="Registrar">
		<input class="btn btn-primary" type="reset" name="Limpiar" value="Limpiar">

</form>	

<?php $__env->stopSection(); ?>


<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
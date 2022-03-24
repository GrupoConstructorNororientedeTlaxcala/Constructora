<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<?php $__env->startSection("cabecerausuario"); ?>


<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>


<center><h1>Registrar Pasteles</h1></center>

<form method="POST" action="/pasteles"  enctype="multipart/form-data">
<center>
<table width="750" heidth="1150">	

	<tr>	
			
			   <td> <label for="nombre">Nombre:</label></td>
			    <td><input type="text" class="form-control" id="nombre" aria-describedby="nombre"  " placeholder="Coloca Nombre" name="nombre" required></td>

  			
  	</tr>
	
  		<?php echo e(csrf_field()); ?>

	<tr>
			
			   <td> <label for="descripción">Descripción:</label></td>
			    <td><input type="text" class="form-control" id="descripcion" aria-describedby="descripcion"  placeholder="Coloca Descripción" name="descripcion" required></td>
			    
  		
  	</tr>
  	<tr>		
		
			    <td><label for="precio">Precio</label></td>
			    <td><input type="text" class="form-control" id="precio" aria-describedby="precio"  placeholder="Coloca Precio" name="precio" pattern="[0-9.]{1,7}" required></td>
			   
  		
  	</tr>
  	<tr>
		
			    <td><label for="estatus">Estatus:</label></td>
			    <td><select class="form-control" placeholder="Selecciona" name="estatus" required>
			    	<option></option>
			    	<option>Disponible</option>
			    	<option>No Disponible</option>
			    	</select>
			   </td>
  	
  	</tr>

	

		

	<tr>	
		
			    <td><label for="imagen">Foto:</label></td>
			    <td><input type="file" class="form-control" id="imagen" aria-describedby="imagen" name="imagen" required></td>
			   
  		
	</tr>		
	<tr>		
		<td> <input class="btn btn-primary" type="submit" name="registrar" value="Registrar">
		<input class="btn btn-primary" type="reset" name="Limpiar" value="Limpiar"></td>
	</tr>
</form>	
</table>
</center>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
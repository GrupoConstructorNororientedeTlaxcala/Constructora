<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->

<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>


<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>

<center><h1>Registrar Contacto</h1></center>

<form method="POST" action="/contacto"  enctype="multipart/form-data">
<center>
<table width="750" heidth="1150">	

	<tr>	
			
			   <td> <label for="nombre">Nombre:</label></td>
			    <td><input type="text" class="form-control" idc="nombre" aria-describedby="nombre"  " placeholder="Coloca Nombre" name="nombre" required></td>

  			
  	</tr>
	
  		<?php echo e(csrf_field()); ?>


	<tr>
			
			   <td> <label for="apaterno">Apellido Paterno:</label></td>
			    <td><input type="text" class="form-control" idc="apaterno" aria-describedby="apaterno"  placeholder="Coloca Apellido Paterno" name="apaterno" required title="este campo es obligatorio"></td>
			    
  		
  	</tr>

	<tr>		
		
			    <td><label for="amaterno">Apellido Materno:</label></td>
			    <td><input type="text" class="form-control" idc="amaterno" aria-describedby="amaterno"  placeholder="Coloca Apellido Materno" name="amaterno" required></td>
			   
  		
  	</tr>	

  	<tr>		
		
			    <td><label for="telefono">Teléfono:</label></td>
			    <td><input type="text" class="form-control" idc="telefono" aria-describedby="telefono"  placeholder="Coloca Número de Teléfono" name="telefono" pattern="[0-9.]{1,10}" required></td>
			   
  		
  	</tr>		
  				<td><label for="mail"> Correo Electrónico:</label></td>
			    <td><input type="text" class="form-control" idc="mail" aria-describedby="mail"  placeholder="Coloca Correo Electrónico" name="mail" required></td>
	<tr>
		
			    
  	
  	</tr>

  	<tr>		
		
			    <td><label for="direccion">Dirección:</label></td>
			    <td><input type="text" class="form-control" idc="direccion" aria-describedby="direccion"  placeholder="Coloca Dirección" name="direccion" required></td>
			   
  		
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
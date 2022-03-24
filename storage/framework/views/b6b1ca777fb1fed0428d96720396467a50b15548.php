<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>


<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>

<center><h1>Registrar Contrato</h1></center>

<form method="POST" action="/contrato"  enctype="multipart/form-data">
<center>
<table width="750" heidth="1150">	

	<tr>	
			
			   <td> <label for="numcontrato">Número de Contrato:</label></td>
			    <td><input type="text" class="form-control" idct="numcontrato" aria-describedby="numcontrato"  " placeholder="Coloca Número de Contrato" name="numcontrato" required></td>

  			
  	</tr>
	
  		<?php echo e(csrf_field()); ?>


	<tr>		
		
			    <td><label for="fechact">Fecha:</label></td>
			    <td><input type="date" class="form-control" idct="fechact" aria-describedby="fechact"  placeholder="Coloca Fecha" name="fechact" required></td>
			   
  		
  	</tr>

  	<tr>
			
			   <td> <label for="descripcionct">Descripción:</label></td>
			    <td><input type="text" class="form-control" idct="descripcionct" aria-describedby="descripcionct"  placeholder="Coloca Descripción" name="descripcionct" required title="este campo es obligatorio"></td>
			    
  		
  	</tr>

  	<tr>		
		
			    <td><label for="montoct">Monto: $</label></td>
			    <td><input type="text" class="form-control" idct="montoct" aria-describedby="montoct"  placeholder="Coloca Monto $" name="montoct" required></td>
			   
  		
  	</tr>

	<tr>	
		
			    <td><label for="fotoct">Foto:</label></td>
			    <td><input type="file" class="form-control" idct="fotoct" aria-describedby="fotoct" name="fotoct" required></td>
			   
  		
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
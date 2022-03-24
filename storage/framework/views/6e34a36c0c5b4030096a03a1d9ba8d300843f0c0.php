<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>


<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>

<center><h1>Registrar Maquinaria</h1></center>

<form method="POST" action="/maquinaria"  enctype="multipart/form-data">
<center>
<table width="750" heidth="1150">	

	<tr>	
			
			   <td> <label for="detallesm">Detalles de Maquinaria:</label></td>
			    <td><input type="text" class="form-control" id="detallesm" aria-describedby="detallesm" placeholder="Coloca Detalles de Maquinaria" name="detallesm" required></td>

  			
  	</tr>
	
  		<?php echo e(csrf_field()); ?>


	<tr>		
		
			    <td><label for="marca">Marca:</label></td>
			    <td><input type="text" class="form-control" id="marca" aria-describedby="marca"  placeholder="Coloca Marca" name="marca" required></td>
			   
  		
  	</tr>

  	<tr>
			
			   <td> <label for="modelo">Modelo:</label></td>
			    <td><input type="text" class="form-control" id="modelo" aria-describedby="modelo"  placeholder="Coloca Modelo" name="modelo" required title="este campo es obligatorio"></td>
			    
  		
  	</tr>

  	<tr>		
		
			    <td><label for="numserie">Número de Serie:</label></td>
			    <td><input type="text" class="form-control" id="numserie" aria-describedby="numserie"  placeholder="Coloca Número de Serie" name="numserie" required></td>
			   
  		
  	</tr>

	<tr>	
		
			    <td><label for="fotom">Foto:</label></td>
			    <td><input type="file" class="form-control" id="fotom" aria-describedby="fotom" name="fotom" required></td>
			   
  		
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
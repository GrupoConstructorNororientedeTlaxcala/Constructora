<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>


<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>

<center><h1>Registrar Pendiente</h1></center>

<form method="POST" action="/pendientes"  enctype="multipart/form-data">
<center>
<table width="750" heidth="1150">	

	<tr>	
			
			   <td> <label for="titulo">Título:</label></td>
			    <td><input type="text" class="form-control" idp="titulo" aria-describedby="titulo"  " placeholder="Coloca Título" name="titulo" required></td>

  	</tr>
	
  		<?php echo e(csrf_field()); ?>


	<tr>
			
			   <td> <label for="descripciónp">Descripción:</label></td>
			    <td><input type="text" class="form-control" idp="descripcionp" aria-describedby="descripcionp"  placeholder="Coloca Descripción" name="descripcionp" required title="este campo es obligatorio"></td>	
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
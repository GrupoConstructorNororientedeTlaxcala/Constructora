<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->

<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>


<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenidousuario"); ?>

<center><h1>Registrar Obra Civil</h1></center>

<form method="POST" action="/obracivil"  enctype="multipart/form-data">
<center>
<table width="750" heidth="1150">	

	<tr>	
			
			   <td> <label for="datoscliente">Datos de Cliente:</label></td>
			    <td><input type="text" class="form-control" ido="datoscliente" aria-describedby="datoscliente"  " placeholder="Coloca Datos del Cliente" name="datoscliente" required></td>

  			
  	</tr>
	
  		<?php echo e(csrf_field()); ?>


	<tr>
			
			   <td> <label for="descripcióno">Descripción:</label></td>
			    <td><input type="text" class="form-control" ido="descripciono" aria-describedby="descripciono"  placeholder="Coloca Descripción" name="descripciono" required title="este campo es obligatorio"></td>
			    
  		
  	</tr>

	<tr>		
		
			    <td><label for="numcontrato">Número de Contrato:</label></td>
			    <td><input type="text" class="form-control" ido="numcontrato" aria-describedby="numcontrato"  placeholder="Coloca Número de Contrato" name="numcontrato" required></td>
			   
  		
  	</tr>	

  	<tr>		
		
			    <td><label for="montototal">Monto Total:$</label></td>
			    <td><input type="text" class="form-control" ido="montototal" aria-describedby="montototal"  placeholder="Coloca Monto Total" name="montototal" pattern="[0-9.]{1,9}" required></td>
			   
  		
  	</tr>		

	<tr>
		
			    <td><label for="estatus">Estatus:</label></td>
			    <td><select class="form-control" placeholder="Seleccionar" name="estatus" required>
			    	<option></option>
			    	<option>En Proceso</option>
			    	<option>Finalizado</option>
			    	</select>
			   </td>
  	
  	</tr>

  	<tr>		
		
			    <td><label for="fechainicio">Fecha Inicio:</label></td>
			    <td><input type="date" class="form-control" ido="fechainicio" aria-describedby="fechainicio"  placeholder="Coloca Fecha Inicio" name="fechainicio" required></td>
			   
  		
  	</tr>
  	<tr>		
		
			    <td><label for="fechafin">Fecha Fin:</label></td>
			    <td><input type="date" class="form-control" ido="fechafin" aria-describedby="fechafin"  placeholder="Coloca Fecha de Fin" name="fechafin" required></td>
			   
  		
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
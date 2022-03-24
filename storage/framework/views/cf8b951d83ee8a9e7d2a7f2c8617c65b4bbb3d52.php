<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h2>Editar Registro de Obra Civil</h2></center>
<center>
	<table>
		<form method="POST" action="/obracivil/<?php echo e($obras->ido); ?>">
				<tr> 	
					    <td><label for="datoscliente">Datos de Cliente:</label></td>
					    <td><input type="text" class="form-control" ido="datoscliente" aria-describedby="datoscliente" placeholder="Coloca Datos de Cliente" name="datoscliente" value="<?php echo e($obras->datoscliente); ?>" required></td>
				</tr>	    
		  		
		  			<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="PUT">
				<tr>
		  			    <td width="320px"><label for="descripciono">Descripción:</label></td>
					    <td width="320px"><input type="text" class="form-control" ido="descripciono" aria-describedby="descripciono" placeholder="Coloca Descripción" name="descripciono" value="<?php echo e($obras->descripciono); ?>" required></td>
				</tr>
				<tr>

					    <td width="320px"><label for="numcontrato">Número de Contrato:</label></td>
					    <td width="320px"><input type="text" class="form-control" ido="numcontrato" aria-describedby="numcontrato" placeholder="Coloca Número de Contrato" name="numcontrato" value="<?php echo e($obras->numcontrato); ?>" required></td>
				</tr>	    
		  		
		  		<tr>

					    <td width="320px"><label for="montototal">Monto Total:</label></td>
					    <td width="320px"><input type="text" class="form-control" ido="montototal" aria-describedby="montototal" placeholder="Coloca Monto Total" name="montototal" pattern="[0-9.]{1,9}" value="<?php echo e($obras->montototal); ?>" required></td>
				</tr>    
		  		
				<tr>
					    <td width="320px"><label for="estatus">Estatus:</label></td>
					    <td width="320px"><select class="form-control" placeholder="Selecciona" name="estatus" required>
					    	<option></option>
					    	<option>En Proceso</option>
					    	<option>Finalizada</option>
					    </select></td>
				</tr>
				<tr>

					    <td width="320px"><label for="fechainicio">Fecha Inicio:</label></td>
					    <td width="320px"><input type="date" class="form-control" ido="fechainicio" aria-describedby="fechainicio" placeholder="Coloca Fecha Inicio" name="fechainicio" value="<?php echo e($obras->fechainicio); ?>" required></td>
				</tr>

				<tr>

					    <td width="320px"><label for="fechafin">Fecha de Fin:</label></td>
					    <td width="320px"><input type="date" class="form-control" ido="fechafin" aria-describedby="fechafin" placeholder="Coloca Fecha de Fin" name="fechafin" value="<?php echo e($obras->fechafin); ?>" required></td>
				</tr>


				<tr>	    
		  	

				<td width="320px"><button type="submit" class="btn btn-primary">Actualizar</button>
				
				<a class="btn btn-primary" href="<?php echo e(route('obracivil.index')); ?>">Cancel</a>
			</tr>
		</form>	
		</table>
</center>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
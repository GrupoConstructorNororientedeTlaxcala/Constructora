<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h2>Editar Registro de Documento Legal de Empresa</h2></center>
<center>
	<table>
		<form method="POST" action="/empresa/<?php echo e($empresas->ide); ?>">
				<tr> 	
					    <td><label for="nombred">Nombre:</label></td>
					    <td><input type="text" class="form-control" ide="nombred" aria-describedby="nombred" placeholder="Coloca Nombre" name="nombred" value="<?php echo e($empresas->nombred); ?>" required></td>
				</tr>	    
		  		
		  			<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="PUT">
				<tr>
		  			    <td width="320px"><label for="descripcion">Descripción:</label></td>
					    <td width="320px"><input type="text" class="form-control" ide="descripcion" aria-describedby="descripcion" placeholder="Coloca Descripción" name="descripcion" value="<?php echo e($empresas->descripcion); ?>" required></td>
				</tr>

				<tr>

					    <td width="320px"><label for="fecha">Fecha:</label></td>
					    <td width="320px"><input type="date" class="form-control" ide="fecha" aria-describedby="fecha" placeholder="Coloca Fecha" name="fecha" value="<?php echo e($empresas->fecha); ?>" required></td>
				</tr>	    
		  		    
				<tr>	    
		  		

					    <td width="320px"><label for="escaneo">Foto:</label></td>
					    <td width="320px"><input type="file" class="form-control" ide="escaneo" aria-describedby="escaneo" name="escaneo" required> <img src="/imgProductos/<?php echo e($empresas->escaneo); ?>" width="100" height="100"></td>
				</tr>
				<tr>	    	    
		  	

				<td width="320px"><button type="submit" class="btn btn-primary">Actualizar</button>
				
				<a class="btn btn-primary" href="<?php echo e(route('empresa.index')); ?>">Cancel</a>
			</tr>
		</form>	
		</table>
</center>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
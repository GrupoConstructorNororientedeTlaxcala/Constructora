<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("contenidousuario"); ?>

<center><h2>Editar Pendiente</h2></center>
<center>
	<table>
		<form method="POST" action="/pendientes/<?php echo e($pagina->idp); ?>">
				<tr> 	
					    <td><label for="titulo">Título:</label></td>
					    <td><input type="text" class="form-control" idp="titulo" aria-describedby="titulo" placeholder="Coloca Título" name="titulo" value="<?php echo e($pagina->titulo); ?>" required></td>
				</tr>	    
		  		
		  			<?php echo e(csrf_field()); ?>

					<input type="hidden" name="_method" value="PUT">
				<tr>
		  			    <td width="320px"><label for="descripcionp">Descripción:</label></td>
					    <td width="320px"><input type="text" class="form-control" idp="descripcion" aria-describedby="descripcion" placeholder="Coloca Descripción" name="descripcion" value="<?php echo e($pagina->descripcionp); ?>" required></td>
				</tr>
				
				<tr>	    
		  	

				<td width="320px"><button type="submit" class="btn btn-primary">Actualizar</button>
				
				<a class="btn btn-primary" href="<?php echo e(route('pendientes.index')); ?>">Cancel</a>
			</tr>
		</form>	
		</table>
</center>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
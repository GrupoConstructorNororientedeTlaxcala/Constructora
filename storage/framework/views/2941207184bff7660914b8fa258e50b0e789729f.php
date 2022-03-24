<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">  <!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/imgProductos/imgconlogo.png" width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenidousuario"); ?>
<table><tr><td width="1000px"></td><td><form><?php echo $__env->make('temporada.buscartemporada', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></form></td></tr></table>
<center><h2>CONSULTA DE PRODUCTOS DE TEMPORADA REGISTRADOS</h2></center>


<?php if(session()->get('accion')): ?>
	<hr>
	<div class="alert
		<?php echo e(session()->get('accion')=='guardar'? 'alert-success':''); ?>

		<?php echo e(session()->get('accion')=='editar'? 'alert-primary':''); ?>

		<?php echo e(session()->get('accion')=='eliminar'? 'alert-danger':''); ?>"
		>
		<?php echo e(session()->get('mensaje')); ?>

	</div>
<?php endif; ?>

<table class="table">
  <thead class="thead-dark">
<tr> 
      <th scope="id">Id</th>
      <th scope="nombre">Nombre</th>
      <th scope="descripcion">Descripción</th>
      <th scope="precio">Precio</th>
      <th scope="estatus">Estatus</th>
      <th scope="imagen">Foto</th>
      <th></th>


    <th><a href="<?php echo e(route('temporadas.create')); ?>"><button type="button" class="btn btn-secondary"> Registrar</button></a></th>
    <th><a href="<?php echo e(url('imprimePDF')); ?>" class="btn btn-outline-info" onclick="return confirm('¿Quieres implimir un reporte?')">Descargar PDF</a></th>
    <th></th>  
 </tr> 
	<?php $__currentLoopData = $temporadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temporada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>	
		<td><?php echo e($temporada->id); ?></td>
		<td><?php echo e($temporada->nombre); ?></td>
		<td><?php echo e($temporada->descripcion); ?></td>
		<td>$<?php echo e($temporada->precio); ?></td>
		<td><?php echo e($temporada->estatus); ?></td>
		<td><img src="imgProductos/<?php echo e($temporada->imagen); ?>" width="100" height="100"></td>

		<td><a href="<?php echo e(route('temporadas.show', $temporada->id)); ?>"><button type="submit" class="btn btn-success">Ver</button></a></td>
		<td><a href="<?php echo e(route('temporadas.edit', $temporada->id)); ?>"><button type="submit" class="btn btn-primary">Editar</button></a></td>
		<td><form method="POST" action="/temporadas/<?php echo e($temporada->id); ?>">
			<?php echo e(csrf_field()); ?>

			<input type="hidden" name="_method" value="delete">
			<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres eliminar el registro?')">Eliminar </button></td>
			
			
		</form>
		
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php echo $temporadas->render(); ?>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/imgProductos/imgconlogo.png" width="1510" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenidousuario"); ?>
<br>
<center><h2>CONSULTA REGISTRO DE  PEDIDOS</h2></center>
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
      <th scope="apaterno">Apellido paterno</th>
      <th scope="amaterno">Apellido Materno</th>
      <th scope="correo">Correo</th>
      <th scope="pedido">Productos Solicitados</th>
      <th scope="fechaentrega">Fecha Entrega</th>
	 <th></th>
	 <th></th>
	  <th><a href="<?php echo e(url('pedidosPDF')); ?>" class="btn btn-outline-info" onclick="return confirm('¿Quieres implimir un reporte?')">Descargar PDF</a> </th>

</tr>
   
  </thead>
	<?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</tr>
	
<tr>	
		<td><?php echo e($pedido->id); ?></td>
		<td><?php echo e($pedido->nombre); ?></td>
		<td><?php echo e($pedido->apaterno); ?></td>
		<td><?php echo e($pedido->amaterno); ?></td>
		<td><?php echo e($pedido->correo); ?></td>
		<td><?php echo e($pedido->pedido); ?></td>
		<td><?php echo e($pedido->fechaentrega); ?></td>
		
		<td><a href="<?php echo e(route('pedidos.show', $pedido->id)); ?>"><button type="submit" class="btn btn-success">Ver</button></a></td>
		
		<td><form method="POST" action="/pedidos/<?php echo e($pedido->id); ?>">
			<?php echo e(csrf_field()); ?>

			<input type="hidden" name="_method" value="delete">
			<button type="submit" class="btn btn-primary" onclick="return confirm('¿Quieres eliminar el registro?')" >Eliminar</button><td>
			
	</tr>		
		</form>
		
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php echo $pedidos->render(); ?>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layoutusuario", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
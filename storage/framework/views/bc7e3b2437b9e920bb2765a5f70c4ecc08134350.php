<!DOCTYPE html>
<html>
<head>

	<title>Reporte de Registros</title>
</head>
<body>
<table>	<tr><td><img src="imgProductos/logosombrero.png" width="140 px" height="140 px"></td><td> 
<center><strong></strong><h1>Panadería Huamantla</h1></strong></center></td></tr></table>
<center><h3 class="titulo">Pedidos Registrados</h3></center>


<table class="table" border="orange" >
	 <thead class="thead-dark">
	 	<tr>
			
	  <th bgcolor="#DE8627" scope="id" width="30px" height="40px">Id</th>
      <th bgcolor="#DE8627" scope="nombre" width="30px" height="40px">Nombre</th>
      <th bgcolor="#DE8627" scope="apaterno" width="30px" height="40px">Apellido Paterno</th>
      <th bgcolor="#DE8627" scope="amaterno" width="30px" height="40px">Apellido Materno</th>
      <th bgcolor="#DE8627" scope="correo" width="20px" height="40px">Correo</th>
      <th bgcolor="#DE8627" scope="pedido" width="30px" height="40px">Productos Solicitados</th>
      <th bgcolor="#DE8627" scope="fechaentrega" width="30px" height="40px">Fecha Entrega</th>
		</tr>	
	</thead>
	

	<?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>	
		<td width="30px" height="45px"><?php echo e($pedido->id); ?></td>
		<td width="30px" height="45px"><?php echo e($pedido->nombre); ?></td>
		<td width="30px" height="45px"><?php echo e($pedido->apaterno); ?></td>
		<td width="30px" height="45px"><?php echo e($pedido->amaterno); ?></td>
		<td width="30px" height="45px"><?php echo e($pedido->correo); ?></td>
		<td width="30px" height="45px"><?php echo e($pedido->pedido); ?></td>
		<td width="30px" height="45px"><?php echo e($pedido->fechaentrega); ?></td>
				
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>
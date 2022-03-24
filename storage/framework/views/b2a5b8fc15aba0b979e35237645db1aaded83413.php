<!DOCTYPE html>
<html>
<head>

	<title>Reporte de Registros</title>
</head>
<body>
<table>	<tr><td><img src="imgProductos/logosombrero.png" width="140 px" height="140 px"></td><td> 
<center><strong></strong><h1>Panadería Huamantla</h1></strong></center></td></tr></table>
<center><h3 class="titulo">Proveedores Registrados</h3></center>


<table class="table" border="orange" >
	 <thead class="thead-dark">
	 	<tr>
			
	  <th bgcolor="#DE8627" scope="id" width="30px" height="40px">Id</th>
      <th bgcolor="#DE8627" scope="nombre" width="30px" height="40px">Nombre</th>
      <th bgcolor="#DE8627" scope="apaterno" width="30px" height="40px">Apellido paterno</th>
      <th bgcolor="#DE8627" scope="amaterno" width="30px" height="40px">Apellido Materno</th>
      <th bgcolor="#DE8627" scope="direccion" width="30px" height="40px">Dirección</th>
      <th bgcolor="#DE8627" scope="correo" width="30px" height="40px">Correo</th>
      <th bgcolor="#DE8627" scope="telefono" width="30px" height="40px">Teléfono</th>
      <th bgcolor="#DE8627" scope="producto" width="30px" height="40px">Producto</th>
		</tr>	
	</thead>
	

	<?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>	
		<td width="30px" height="45px"><?php echo e($proveedor->id); ?></td>
		<td width="30px" height="45px"><?php echo e($proveedor->nombre); ?></td>
		<td width="30px" height="45px"><?php echo e($proveedor->apaterno); ?></td>
		<td width="30px" height="45px"><?php echo e($proveedor->amaterno); ?></td>
		<td width="30px" height="45px"><?php echo e($proveedor->direccion); ?></td>
		<td width="30px" height="45px"><?php echo e($proveedor->correo); ?></td>
		<td width="30px" height="45px"><?php echo e($proveedor->telefono); ?></td>
		<td width="30px" height="45px"><?php echo e($proveedor->producto); ?></td>
		
				
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>
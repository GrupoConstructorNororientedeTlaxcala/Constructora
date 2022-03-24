<!DOCTYPE html>
<html>
<head>

	<title>Reporte de Registros</title>
</head>
<body>
<table>	<tr><td><img src="imgProductos/logosombrero.png" width="140 px" height="140 px"></td><td> 
<center><strong></strong><h1>Panadería Huamantla</h1></strong></center></td></tr></table>
<center><h3 class="titulo"> Empleados Registrados</h3></center>

<table class="table" border="orange" >
	 <thead class="thead-dark">
	 	<tr>
			
	  <th bgcolor="#DE8627" scope="id" width="30px" height="40px">Id</th>
      <th bgcolor="#DE8627" scope="nombre" width="30px" height="40px">Nombre</th>
      <th bgcolor="#DE8627" scope="apaterno" width="30px" height="40px">Apellido Paterno</th>
      <th bgcolor="#DE8627" scope="amaterno" width="30px" height="40px">Apellido Materno</th>
      <th bgcolor="#DE8627" scope="telefono" width="30px" height="40px">Teléfono</th>
      <th bgcolor="#DE8627" scope="correo" width="30px" height="40px">Correo</th>
      <th bgcolor="#DE8627" scope="puesto" width="30px" height="40px">Puesto</th>
		</tr>	
	</thead>
	

		<?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
		<td width="30px" height="45px"><?php echo e($empleado->id); ?></td>
		<td width="30px" height="45px"><?php echo e($empleado->nombre); ?></td>
		<td width="30px" height="45px"><?php echo e($empleado->apaterno); ?></td>
		<td width="30px" height="45px"><?php echo e($empleado->amaterno); ?></td>
		<td width="30px" height="45px"><?php echo e($empleado->telefono); ?></td>
		<td width="30px" height="45px"><?php echo e($empleado->correo); ?></td>
		<td width="30px" height="45px"><?php echo e($empleado->puesto); ?></td>
		
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>
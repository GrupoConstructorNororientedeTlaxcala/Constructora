<!DOCTYPE html>
<html>
<head>

	<title>Reporte de Registros</title>
</head>
<body>
<table>	<tr><td><img src="imgProductos/logosombrero.png" width="140 px" height="140 px"></td><td> 
<center><strong></strong><h1>Panadería Huamantla</h1></strong></center></td></tr></table>
<center><h3 class="titulo">Productos Pan Francés Registrados</h3></center>


<table class="table" border="orange" >
	 <thead class="thead-dark">
	 	<tr>
	  <th bgcolor="#DE8627" scope="id" width="30px" height="40px">Id</th>
      <th bgcolor="#DE8627" scope="nombre" width="30px" height="40px">Nombre</th>
      <th bgcolor="#DE8627" scope="descripcion" width="30px" height="40px">Descripción</th>
      <th bgcolor="#DE8627" scope="precio" width="30px" height="40px">Precio</th>
      <th bgcolor="#DE8627" scope="estatus" width="30px" height="40px">Estatus</th>
      <th bgcolor="#DE8627" scope="imagen" width="30px" height="40px">Foto</th>
				
		</tr>	
	</thead>
	

	<?php $__currentLoopData = $franceses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $frances): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
		<td width="30px" height="45px"><?php echo e($frances->id); ?></td>
		<td width="30px" height="45px"><?php echo e($frances->nombre); ?></td>
		<td width="30px" height="45px"><?php echo e($frances->descripcion); ?></td>
		<td width="30px" height="45px">$<?php echo e($frances->precio); ?></td>
		<td width="30px" height="45px"><?php echo e($frances->estatus); ?></td>
		<td><img src="imgProductos/<?php echo e($frances->imagen); ?>" width="100" height="100"></td>
				
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>
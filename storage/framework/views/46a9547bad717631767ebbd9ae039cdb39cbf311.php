<!DOCTYPE html>
<html>
<head>

	<title>Reporte de Registros</title>
</head>
<body>
<table>	<tr><td><img src="imgProductos/logosombrero.png" width="140 px" height="140 px"></td><td> 
<center><strong></strong><h1>Panadería Huamantla</h1></strong></center></td></tr></table>
<center><h3 class="titulo">Comentarios Registrados</h3></center>

<table class="table" border="orange" >
	 <thead class="thead-dark">
	 	<tr>
			<th bgcolor="#DE8627" scope="id" width="30px" height="40px">ID</th>
			<th bgcolor="#DE8627" scope="nombre" width="30px" height="40px">Nombre</th>
			<th bgcolor="#DE8627" scope="correo" width="30px" height="40px">Correo</th>
			<th bgcolor="#DE8627" scope="mensaje" width="30px" height="40px">Mensaje</th>
		</tr>	
	</thead>
	

		<?php $__currentLoopData = $comentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td width="30px" height="45px"><?php echo e($comentario->id); ?></td>
				<td width="30px" height="45px"><?php echo e($comentario->nombre); ?></td>
				<td width="30px" height="45px"><?php echo e($comentario->correo); ?></td>
				<td width="30px" height="45px"><?php echo e($comentario->mensaje); ?></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>


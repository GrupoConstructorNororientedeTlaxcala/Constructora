<!DOCTYPE html>
<html>
<head>

	<title>CURRICULUM EJECUTIVO CONTACTOS</title>
</head>
<body>
<table>	<tr><td><img src="imgProductos/Img5.jpg" width="140 px" height="140 px"></td><td> 
<center><strong></strong><h1>Grupo Constructor Nororiente de Tlaxcala S.A DE C.V</h1></strong></center></td></tr></table>
<center><h3 class="titulo"> CURRICULUM EJECUTIVO CONTACTOS</h3></center>

<table class="table" border="#000000">
	 <thead class="thead-dark" border="#000000">
	 	<tr border="#000000">
			  <th bgcolor="#0066FF" scope="idc" width="30px" height="40px">Id</th>
		      <th bgcolor="#0066FF" scope="nombre" width="30px" height="40px">Nombre</th>
		      <th bgcolor="#0066FF" scope="apaterno" width="30px" height="40px">Apellido Paterno</th>
		      <th bgcolor="#0066FF" scope="amaterno" width="30px" height="40px">Apellido Materno</th>
		      <th bgcolor="#0066FF" scope="telefono" width="30px" height="40px">Teléfono</th>
		      <th bgcolor="#0066FF" scope="mail" width="30px" height="40px">Correo Electronico</th>
		      <th bgcolor="#0066FF" scope="direccion" width="30px" height="40px">Dirección</th>
		</tr>	
	</thead>
	

		<?php $__currentLoopData = $contactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr border="#000000">
			 	<td width="30px" height="45px" border="#000000"><?php echo e($contacto->idc); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($contacto->nombre); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($contacto->apaterno); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($contacto->amaterno); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($contacto->telefono); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($contacto->mail); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($contacto->direccion); ?></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>
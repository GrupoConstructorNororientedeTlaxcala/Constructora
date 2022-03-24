<!DOCTYPE html>
<html>
<head>

	<title>CURRICULUM EJECUTIVO OBRA CIVIL</title>
</head>
<body>
<table>	<tr><td><img src="imgProductos/Img5.jpg" width="140 px" height="140 px"></td><td> 
<center><strong></strong><h1>Grupo Constructor Nororiente de Tlaxcala S.A DE C.V</h1></strong></center></td></tr></table>
<center><h3 class="titulo"> CURRICULUM EJECUTIVO OBRA CIVIL</h3></center>

<table class="table" border="#000000">
	 <thead class="thead-dark" border="#000000">
	 	<tr border="#000000">
			  <th bgcolor="#0066FF" scope="ido" width="30px" height="40px">Id</th>
		      <th bgcolor="#0066FF" scope="datoscliente" width="30px" height="40px">Datos de Cliente</th>
		      <th bgcolor="#0066FF" scope="descripciono" width="30px" height="40px">Descripción</th>
		      <th bgcolor="#0066FF" scope="numcontrato" width="30px" height="40px">Número de Contrato</th>
		      <th bgcolor="#0066FF" scope="montototal" width="30px" height="40px">Monto Total</th>
		      <th bgcolor="#0066FF" scope="estatus" width="30px" height="40px">Estatus</th>
		      <th bgcolor="#0066FF" scope="fechainicio" width="30px" height="40px">Fecha Inicio</th>
		      <th bgcolor="#0066FF" scope="fechafin" width="30px" height="40px">Fecha Fin</th>
		</tr>	
	</thead>
	

		<?php $__currentLoopData = $obras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr border="#000000">
			 	<td width="30px" height="45px" border="#000000"><?php echo e($obra->ido); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($obra->datoscliente); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($obra->descripciono); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($obra->numcontrato); ?></td>
				<td width="30px" height="45px" border="#000000">$<?php echo e($obra->montototal); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($obra->estatus); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($obra->fechainicio); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($obra->fechafin); ?></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>

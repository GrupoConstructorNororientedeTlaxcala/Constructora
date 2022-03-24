<!DOCTYPE html>
<html>
<head>

	<title>CURRICULUM EJECUTIVO OBRA CIVIL</title>
</head>
<body>
<table>	<tr><td><img src="imgProductos/Img5.jpg" width="140 px" height="140 px"></td><td> 
<center><strong></strong><h1>Grupo Constructor Nororiente de Tlaxcala S.A DE C.V</h1></strong></center></td></tr></table>
<center><h3 class="titulo"> CURRICULUM EJECUTIVO PLANOS</h3></center>
<table class="table" border="#000000">
	 <thead class="thead-dark" border="#000000">
	 	<tr border="#000000">
			  <th bgcolor="#0066FF" scope="idpl" width="30px" height="40px">Id</th>
		      <th bgcolor="#0066FF" scope="nombreplano" width="30px" height="40px">Nombre de Plano</th>
		      <th bgcolor="#0066FF" scope="nombreelaborador" width="30px" height="40px">Nombre de Elaborador</th>
		</tr>	
	</thead>
	

		<?php $__currentLoopData = $planos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr border="#000000">
			 	<td width="30px" height="45px" border="#000000"><?php echo e($plano->idpl); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($plano->nombreplano); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($plano->nombreelaborador); ?></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html>

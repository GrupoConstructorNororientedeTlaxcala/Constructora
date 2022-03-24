<!DOCTYPE html>
<html>
<head>

	<title>LISTADO DE EQUIPO DE TRANSPORTE</title>
<body>
<table>	<tr><td><img src="imgProductos/Img5.jpg" width="140 px" height="140 px"></td><td> 
	<center><strong></strong><h1>Grupo Constructor Nororiente de Tlaxcala S.A DE C.V</h1></strong></center></td></tr>
</table>
<center><h3 class="titulo"> LISTADO DE EQUIPO DE TRANSPORTE</h3></center>

<table class="table" border="#000000">
	 <thead class="thead-dark" border="#000000">
	 	<tr border="#000000">

	  		<th bgcolor="#0066FF" scope="idet" width="30px" height="40px">Id</th>
		    <th bgcolor="#0066FF" scope="detalleset" width="30px" height="40px"> Detalles Equipo de Transporte</th>
		    <th bgcolor="#0066FF" scope="marcaet" width="30px" height="40px">Marca</th>
		    <th bgcolor="#0066FF" scope="modeloet" width="30px" height="40px">Modelo</th>		    
		    <th bgcolor="#0066FF" scope="numeroserie" width="30px" height="40px">Número de Serie</th>
		    <th bgcolor="#0066FF" scope="fotoet" width="30px" height="40px">Foto</th>
		</tr>	
	</thead>
	

		<?php $__currentLoopData = $equipots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr border="#000000">
			 	<td width="30px" height="45px" border="#000000"><?php echo e($equipot->idet); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($equipot->detalleset); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($equipot->marcaet); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($equipot->modeloet); ?></td>				
				<td width="30px" height="45px" border="#000000"><?php echo e($equipot->numeroserie); ?></td>
				<td><img src="imgProductos/<?php echo e($equipot->fotoet); ?>" width="100" height="100"></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>

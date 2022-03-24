<!DOCTYPE html>
<html>
<head>

	<title>LISTADO DE MAQUINARIA</title>
<body>
<table>	<tr><td><img src="imgProductos/Img5.jpg" width="140 px" height="140 px"></td><td> 
	<center><strong></strong><h1>Grupo Constructor Nororiente de Tlaxcala S.A DE C.V</h1></strong></center></td></tr>
</table>
<center><h3 class="titulo"> LISTADO DE MAQUINARIA</h3></center>

<table class="table" border="#000000">
	 <thead class="thead-dark" border="#000000">
	 	<tr border="#000000">

	  		<th bgcolor="#0066FF" scope="id" width="30px" height="40px">Id</th>
		    <th bgcolor="#0066FF" scope="detallesm" width="30px" height="40px"> Detalles de Maquinaria</th>
		    <th bgcolor="#0066FF" scope="marca" width="30px" height="40px">Marca</th>
		    <th bgcolor="#0066FF" scope="modelo" width="30px" height="40px">Modelo</th>		    
		    <th bgcolor="#0066FF" scope="numserie" width="30px" height="40px">Número de Serie</th>
		    <th bgcolor="#0066FF" scope="fotom" width="30px" height="40px">Foto</th>
		</tr>	
	</thead>
	

		<?php $__currentLoopData = $maquinarias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maquinaria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr border="#000000">
			 	<td width="30px" height="45px" border="#000000"><?php echo e($maquinaria->id); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($maquinaria->detallesm); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($maquinaria->marca); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($maquinaria->modelo); ?></td>				
				<td width="30px" height="45px" border="#000000"><?php echo e($maquinaria->numserie); ?></td>
				<td><img src="imgProductos/<?php echo e($maquinaria->fotom); ?>" width="100" height="100"></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>

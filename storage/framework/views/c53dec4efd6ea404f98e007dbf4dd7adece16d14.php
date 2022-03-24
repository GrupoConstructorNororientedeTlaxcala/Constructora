<!DOCTYPE html>
<html>
<head>

	<title>CURRICULUM EJECUTIVO CONTRATOS</title>
<body>
<table>	<tr><td><img src="imgProductos/Img5.jpg" width="140 px" height="140 px"></td><td> 
	<center><strong></strong><h1>Grupo Constructor Nororiente de Tlaxcala S.A DE C.V</h1></strong></center></td></tr>
</table>
<center><h3 class="titulo"> CURRICULUM EJECUTIVO CONTRATOS</h3></center>

<table class="table" border="#000000">
	 <thead class="thead-dark" border="#000000">
	 	<tr border="#000000">

	  		<th bgcolor="#0066FF" scope="idct" width="30px" height="40px">Id</th>
		    <th bgcolor="#0066FF" scope="numcontrato" width="30px" height="40px">Número de Contrato</th>
		    <th bgcolor="#0066FF" scope="fechact" width="30px" height="40px">Fecha</th>
		    <th bgcolor="#0066FF" scope="descripcionct" width="30px" height="40px">Descripción</th>		    
		    <th bgcolor="#0066FF" scope="montoct" width="30px" height="40px">Monto</th>
		    <th bgcolor="#0066FF" scope="fotoct" width="30px" height="40px">Foto</th>
		</tr>	
	</thead>
	

		<?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr border="#000000">
			 	<td width="30px" height="45px" border="#000000"><?php echo e($contrato->idct); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($contrato->numcontrato); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($contrato->fechact); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($contrato->descripcionct); ?></td>				
				<td width="30px" height="45px" border="#000000">$<?php echo e($contrato->montoct); ?></td>
				<td><img src="imgProductos/<?php echo e($contrato->fotoct); ?>" width="100" height="100"></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>






<!DOCTYPE html>
<html>
<head>

	<title>CURRICULUM EJECUTIVO DOCUMENTOS LEGALES DE EMPRESA</title>
<body>
<table>	<tr><td><img src="imgProductos/Img5.jpg" width="140 px" height="140 px"></td><td> 
	<center><strong></strong><h1>Grupo Constructor Nororiente de Tlaxcala S.A DE C.V</h1></strong></center></td></tr>
</table>
<center><h3 class="titulo"> CURRICULUM EJECUTIVO DOCUMENTOS LEGALES DE EMPRESA</h3></center>

<table class="table" border="#000000">
	 <thead class="thead-dark" border="#000000">
	 	<tr border="#000000">

	  		<th bgcolor="#0066FF" scope="ide" width="30px" height="40px">Id</th>
		    <th bgcolor="#0066FF" scope="nombred" width="30px" height="40px">Nombre</th>
		    <th bgcolor="#0066FF" scope="fecha" width="30px" height="40px">Fecha</th>
		    <th bgcolor="#0066FF" scope="descripcion" width="30px" height="40px">Descripción</th>
		    <th bgcolor="#0066FF" scope="escaneo" width="30px" height="40px">Foto</th>
		</tr>	
	</thead>
	

		<?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr border="#000000">
			 	<td width="30px" height="45px" border="#000000"><?php echo e($empresa->ide); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($empresa->nombred); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($empresa->fecha); ?></td>
				<td width="30px" height="45px" border="#000000"><?php echo e($empresa->descripcion); ?></td>
				<td><img src="imgProductos/<?php echo e($empresa->escaneo); ?>" width="100" height="100"></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</body>
</html>






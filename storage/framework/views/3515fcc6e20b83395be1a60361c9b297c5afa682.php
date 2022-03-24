<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/imgProductos/imgconlogo.png" width="1348" height="300"></center>
<?php $__env->startSection("cabecera"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenido"); ?>
<table><tr><td width="1000px"></td><td><form><?php echo $__env->make('panes.buscarpro', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></form></td></tr></table> 
<center><h2>CATÁLOGO DE PANADERÍA</h2></center>
<div class="row">
	<?php $__currentLoopData = $panes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-3">
			<div class="card">
				<img 
				title="<?php echo e($pan->nombre); ?>"
				alt="<?php echo e($pan->nombre); ?>"
				class="card-img-top"
				src="imgProductos/<?php echo e($pan->foto); ?>" width="100" height="100"
				data-togge="popover"
				data-trigger="hover"
				data-content="<?php echo e($pan->descripcion); ?>"
				height="317px"
				>

			<div class="card-body">
			<label>Nombre:</label>&nbsp;&nbsp;<span><?php echo e($pan->nombre); ?></span><br>
			<label>Precio:</label>&nbsp;<h5 class="card-title">$<?php echo e($pan->precio); ?></h5>
			<label>Descripción:</label>&nbsp;<p class="card-text"><?php echo e($pan->descripcion); ?></p>
			<label>Estatus:</label>&nbsp;<p class="card-text"><?php echo e($pan->estatus); ?></p>

			<form accept="" method="post">
				<input type="hidden" name="nombre" id="nombre">
				<input type="hidden" name="descripcion" id="descripcion">
				<input type="hidden" name="precio" id="precio">
				<input type="hidden" name="estatus" id="estatus">

				<button class="btn btn-primary" name="accion" value="agregar" type="submit">Add Carrito</button>

			</form>
		</div>
	</div>
</div>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php echo $panes->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layout", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
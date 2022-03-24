<link rel="shortcut icon" href="/bootstrap/img/Img5.jpg" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/bootstrap/img/Img5.jpg" img-responsive width="1348" height="300"></center>
<?php $__env->startSection("cabecerausuario"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenido"); ?>

<center>
	<h2>PENDIENTES</h2> 
</center>
<?php echo $paginas->render(); ?>

<br>


<!--Coloco la estructura de las cartas que se muestran en el index de todos los registros-->
<div class="row">
	<?php $__currentLoopData = $paginas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pagina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
		<div class="col-3">
			<div class="card">
				<div class="card-header">
					<label>
						<b>Título:</b>
					</label>
						<span><?php echo e($pagina->titulo); ?></span>
							<br>
				</div>
				<div class="card-body">
					<label><b>Descripción:</b></label>&nbsp;<p class="card-text"><?php echo e($pagina->descripcionp); ?></p>

					<form accept="" method="post">
						<input type="hidden" name="nombre" id="nombre">
						<input type="hidden" name="descripcion" id="descripcion">
					</form>
				</div>
		</div>
</div>			
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<?php $__env->stopSection(); ?>



	

	

<?php echo $__env->make("/..layout", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
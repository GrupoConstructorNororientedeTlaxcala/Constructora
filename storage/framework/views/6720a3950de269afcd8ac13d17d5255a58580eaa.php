<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">  <!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
<center><img src="/imgProductos/imgconlogo.png" width="1348" height="300"></center>
<?php $__env->startSection("cabecera"); ?>

<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">



<?php $__env->startSection("contenido"); ?>
<table><tr><td width="1000px"></td><td><form><?php echo $__env->make('reposterias.buscarrepos', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></form></td></tr></table>
<center><h2>CATÁLOGO DE REPOSTERÍA</h2></center>

<div class="row" class="col-xs-1 col-sm-2 col-md-8 col-lg-10">
  <?php $__currentLoopData = $reposterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reposteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-3">
      <div class="card">
        <img 
        title="<?php echo e($reposteria->nombre); ?>"
        alt="<?php echo e($reposteria->nombre); ?>"
        class="card-img-top"
        src="imgProductos/<?php echo e($reposteria->imagen); ?>" width="100" height="100"
        data-togge="popover"
        data-trigger="hover"
        data-content="<?php echo e($reposteria->descripcion); ?>"
        height="317px"
        >
<br>
      <div class="card-body">
      <label>Nombre:</label>&nbsp;&nbsp;<span><?php echo e($reposteria->nombre); ?></span><br>
      <label>Precio:</label>&nbsp;<h5 class="card-title">$<?php echo e($reposteria->precio); ?></h5>
      <label>Descripción:</label>&nbsp;<p class="card-text"><?php echo e($reposteria->descripcion); ?></p>
      <label>Estatus:</label>&nbsp;<p class="card-text"><?php echo e($reposteria->estatus); ?></p>

      <form accept="" method="post" class="col-xs-1 col-sm-2 col-md-8 col-lg-12">
        <input type="hidden" name="nombre" id="nombre">
        <input type="hidden" name="descripcion" id="descripcion">
        <input type="hidden" name="precio" id="precio">
        <input type="hidden" name="estatus" id="estatus">

        <button class="btn btn-primary" name="accion" value="agregar" type="submit">Add Carrito</button>
 <br>
      </form>
    <br> </div>
   <br></div>
</div>
 <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<table><tr><td width="100px"></td><td><form><?php echo $reposterias->render(); ?></form></td></tr></table>
	
	<?php $__env->stopSection(); ?>
<?php echo $__env->make("/..layout", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
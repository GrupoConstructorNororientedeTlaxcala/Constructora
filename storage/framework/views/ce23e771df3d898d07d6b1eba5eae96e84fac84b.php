<!DOCTYPE html>
<html lang="en">

<head>	


		<meta charset="utf-8">
			<title>Grupo Constructor Nororiente de Tlaxcala S.A DE C.V</title>
				<link rel="shortcut icon" href="/bootstrap/img/img5.jpg" width	="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
		
				<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, 		maximum-scale=1.0, minimum-scale=1.0">

				<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
				<link rel="stylesheet" type="text/css" href="/icon/style.css">
	
				<meta name="viewport" content="width=device-width, initial-scale=1">




<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


	<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
	<link rel="stylesheet" type="text/css" href="/icon/style.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet"  href="<?php echo e(asset('bootstrap/css/bootstrap-style.css')); ?>">

	<link rel="stylesheet"  href="<?php echo e(asset('bootstrap/css/bootstrap-estilos.css')); ?>">

	
	<style type="text/css">


		.hheader{
		width:100%;
		height: 30PX;
		background:white;



		}

				#menu{
					background-color:black; /* color del nav */
				}
				#menu ul{
					list-style: none;
					margin: 0;
					padding: 0;
				}
				
				#menu ul li{
					display: inline-block;
				}
				#menu ul li a{
		
					text-decoration: none;
					font-family: 'Arial Black';
					display: block;
					padding: 20px
				}

				#menu ul li a:hover{
					background-color: #FFFF99; /* color del sombreado */
				}
				.active{
					text-decoration: none;
						color: #FFFFFF;        /* color de la letra del nav */
			
					}
				#main-footer {
				background: #FF9933;    /* color del footer */
				color: black;       /* color de la letra del footer */
	
				padding: 20px;
				margin-top: 40px;
				}
				#main-footer p {
				margin: 0;
				}
	
				#main-footer a {
				color: black;
				}

				.p{
					text-decoration: none;
						color:white;
				}
	</style>

</head>

<body>

	<div class="cabecera">

		<?php echo $__env->yieldContent("cabecera"); ?>


	<header class="hheader">


		<div id="menu">

               
			<ul class="nav justify-content-center" >

				<li class="nav-item">
	                <a class="nav-link active" href='/index'><b>Inicio</b></a>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link active" href='/quienessomos'><b>Quienes Somos</b></a>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link active" href='/misionyvision'><b>Misión y Visión</b></a>
	            </li> 
	 
	            <li class="nav-item">
	               <a class="nav-link active" href='/blog'><b>Blog</b></a>
	            </li>

	          
			
			</ul>
		</div>
	</header>
<br>
<br>
</div>



<div class="contenido">
	<?php echo $__env->yieldContent("contenido"); ?>
</div>

<div class="pie">
	<?php echo $__env->yieldContent("pie"); ?>
</div>


	<footer id="main-footer"> 	
	 	<center>
	 		<h2>Contacto</h2>
	 		
			 <p class="font-italic"><h5><em>Dirección: Calle 16 de Septiembre No.17, colonia Centro C.P. 90460 Xaloztoc, Tlaxcala<a href='/login'>.</a><br>
	 		E-mail: grupo.cons.tlx@gmail.com<br>
	 		Tel: 2414130838 <br>
	 		</em></h5></p>
	 	</center>		
	</footer>
 
</body>
</html>
<?php echo $__env->make("/redes.index", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
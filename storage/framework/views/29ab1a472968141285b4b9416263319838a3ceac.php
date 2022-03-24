<!DOCTYPE html>
<html lang="en">

<head>	


<meta charset="utf-8">
	<title>Panadería Huamantla</title>
	<link rel="shortcut icon" href="/bootstrap/img/logosombrero.png" width="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


	<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
	<link rel="stylesheet" type="text/css" href="/icon/style.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">


.hheader{
width:100%;
height: 30PX;
background:white;



}

		#menu{
			background-color: #ff6600;
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
			display: block;
			padding: 10px
		}

		#menu ul li a:hover{
			background-color: #ffff66;
		}
	.active{
			text-decoration: none;
				color:black;
			
			}
	#main-footer {
	background: #333;
	color: white;
	
	padding: 20px;
	margin-top: 40px;
}
	#main-footer p {
		margin: 0;
	}
	
	#main-footer a {
		color: white;
	}
		
		

	</style>

	</head>

	<body>
<div class="cabecera">

<?php echo $__env->yieldContent("cabecera"); ?>


<header class="hheader">


<div id="menu" >

               
<ul class="nav justify-content-center" >

<li class="nav-item">
    <a class="nav-link active" href='/index'>Inicio</a>
  </li>
  
 
  <li class="nav-item">
    <a class="nav-link active" href='/conocenos'>Conócenos</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href='/panes'>Panadería</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href='/bizcochos'>Bizcochería</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href='/franceses'>Pan Francés</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href='/pastel'>Pastelería</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href='/reposterias'>Repostería</a>
  </li>

 <li class="nav-item">
    <a class="nav-link active" class="<?php echo e(request()->is('/')? 'active':''); ?>" href="<?php echo e(route('comentarios.create')); ?>">Contáctanos</a>
  </li>
<li class="nav-item">
    <a class="nav-link active" class="<?php echo e(request()->is('/')? 'active':''); ?>" href="<?php echo e(route('pedidos.create')); ?>">Pedido</a>
  </li>
  
  
 
 
  
</ul>
	</div>
</header>
<br>
<div class="social-bar">
		<ul>
		<a href="https://www.facebook.com/" target="_blank" class="icon icon-facebook text-decoration-none"><img src="/imgProductos/facebook.png" width="30px" height="30px"> </a>
			
		<a href="https://www.twitter.com/" target="_blank" class="icon icon-twitter text-decoration-none"><img src="/imgProductos/twitter.png" width="30px" height="30px"></a>
			
		<a href="https://www.youtube.com" target="_blank" class="icon icon-youtube text-decoration-none"><img src="/imgProductos/youtube.png" width="30px" height="30px"></a>
			
		<a href="https://www.instagram.com" target="_blank" class="icon icon-instagram text-decoration-none"><img src="/imgProductos/instagram.png" width="30px" height="30px"></a>
			
		<a href="https://www.mail.google.com" target="_blank" class="icon icon-instagram text-decoration-none"><img src="/imgProductos/gmailicono.png" width="30px" height="30px"></a>
		</ul>
	</div>
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
	 		
	 Dirección: Calle Rosete Aranda #304 Barrio San Antonio, Huamantla, Tlax.<br>
	 				E-mail: franlopbri@gmail.com<br>
	 	Cel: 2474724552<br>
	 				Horario: 7 a.m. - 21 p.m<a href="/home">.</a><br>
	 		<a href="Terminos">Términos y condiciones</a> &nbsp;&nbsp;|&nbsp;&nbsp;
	 		<a href="politicas">Políticas de privacidad</a>
	 			</center>
	 		
	
		
 	</footer>
 
</body>
</html>
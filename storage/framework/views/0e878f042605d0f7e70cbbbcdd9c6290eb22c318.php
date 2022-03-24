<!DOCTYPE html>
<html lang="en">

<head>	

	<link rel="shortcut icon" href="/imgProductos/logocuerno.png" width	="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<title>Panadería Huamantla</title>
	<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
	<link rel="stylesheet" type="text/css" href="/icon/style.css">
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
	text-align: center;
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
<div class="cabecerausuario">
<?php echo $__env->yieldContent("cabecerausuario"); ?>

<ul>
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li>
                                <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li>
                                    <a href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li>
                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span></span>
                                </a>

                                <div aria-labelledby="navbarDropdown">
                                    <a href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
<header class="hheader">

<div id="menu" >
<ul >
  <li class="nav-item">
    <a class="nav-link active" href="/pedidos">Pedido</a>
  </li>

 <li class="nav-item">
    <a class="nav-link active" href="/comentarios">Comentario</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href="/empleados">Empleados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/proveedores">Proveedores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/productos">Panadería</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active" href="/pasteles">Pastelería</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active" href="/bizcocheria">Bizcochería</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active" href="/temporadas">Producto de Temporada</a>
  </li>
   <li class="nav-item">
  <a class="nav-link active" href="/frances">Pan Francés</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active" href="/reposteria">Repostería</a>
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
<div class="contenidousuario">

	<?php echo $__env->yieldContent("contenidousuario"); ?>
</div>


<div class="pieusuario">
	<?php echo $__env->yieldContent("pieusuario"); ?>
</div>
<footer id="main-footer"> 	
	 		
	 		<center>
	 			<h2>Contacto</h2>
	 		
	 Dirección: Calle Rosete Aranda #304 Barrio San Antonio, Huamantla, Tlax.<br>
	 				E-mail: franlopbri@gmail.com<br>
	 	Cel: 2474724552<br>
	 				Horario: 7 a.m - 21 p.m<a href="index">.</a><br>
	 				
	 				<a href="Terminos">Términos y condiciones</a> &nbsp;&nbsp;|&nbsp;&nbsp;
	 				<a href="politicas">Políticas de privacidad</a>
	 			</center>
	 		
	
		
 	</footer>

</body>
</html>
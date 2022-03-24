<!DOCTYPE html>
<html lang="en">

<head>	

		<link rel="shortcut icon" href="/bootstrap/img/img5.jpg" width	="120px" height="120px">	<!--aqui va el codigo del icono de la imagen que se visualizara en el buscador solo hacer la imagen 120x120 y guardarla en public-->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8">
	<title>Grupo Constructor Nororiente de Tlaxcala S.A DE C.V</title>
		
		<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
		
		<link rel="stylesheet" type="text/css" href="/icon/style.css">

		<!--Aqui van redes sociales -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

			<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
			<link rel="stylesheet" type="text/css" href="/icon/style.css">
			
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<link rel="stylesheet"  href="<?php echo e(asset('bootstrap/css/bootstrap-style.css')); ?>">

			<link rel="stylesheet"  href="<?php echo e(asset('bootstrap/css/bootstrap-estilos.css')); ?>">
		<!--Aqui terminan redes sociales -->

		<style type="text/css">



			.hheader{
			width:100%;
			height: 30PX;
			background:white;



			}

					#menu{
						background-color:black;  /* color del nav */
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
						font-family: 'Time New Roma';
						display: block;
						padding: 8px
					}

					#menu ul li a:hover{
						background-color: #FFFF99; /* color del sombreado */
					}
					.active{
						text-decoration: none;
							color: blue;        /* color de la letra del nav */
						
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
                           <div aria-labelledby="navbarDropdown"> <li>
                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span></span>
                                </a>

                                
                                   <button type="button" class="btn btn-secondary">
                                   <a href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    </button>

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
			    <a class="nav-link active" href="/pendientes"><b>Pendientes</b></a>
			</li>

			<li class="nav-item">
			    <a class="nav-link active" href="/obracivil"><b>Obra Civil</b></b></a>
			</li>

			<li class="nav-item">
			    <a class="nav-link active" href="/presupuesto"><b>Presupuesto</b></a>
			</li>

			<li class="nav-item">
			    <a class="nav-link active" href="/plano"><b>Plano</b></a>
			</li>

			<li class="nav-item">
			    <a class="nav-link active" href="/contrato"><b>Contrato</b></a>
			</li>

			<li class="nav-item">
			  <a class="nav-link active" href="/empresa"><b>Empresa</b></a>
			</li>

			<li class="nav-item">
			  <a class="nav-link active" href="/contacto"><b>Contacto</b></a>
			</li>

			<li class="nav-item">
			  <a class="nav-link active" href="/maquinaria"><b>Maquinaria</b></a>
			</li>

			<li class="nav-item">
			  <a class="nav-link active" href="/equipotransporte"><b>Equipo de Transporte</b></a>
			</li>
		</ul>
	</div>		
</header>
<br>
<br>

<div class="contenidousuario">

	<?php echo $__env->yieldContent("contenidousuario"); ?>
</div>


<div class="pieusuario">
	<?php echo $__env->yieldContent("pieusuario"); ?>
</div>
	<footer id="main-footer"> 	
		<center>
			<h2>Contacto</h2>
		 		
		 	Dirección: Calle 16 de Septiembre No. 17, colonia Centro C.P. 90460 Xaloztoc, Tlaxcala.<br>
		 				E-mail: grupo.cons.tlx@gmail.com<br>
		 	Tel: 2414130838 <br>
		 </center>
	</footer>

</body>

</html>
<?php echo $__env->make("/redes.index", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
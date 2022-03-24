<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="/icon/style.css">
<style>

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
    <meta charset="utf-8">
    <center><img src="/imgProductos/imgconlogo.png" width="1348" height="300"></center>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'dfghj')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
            <div class="cabecera">

<?php echo $__env->yieldContent("cabecera"); ?>


<header class="hheader">


<div id="menu" >

               
<ul class="nav justify-content-center" >

<li class="nav-item">
    <a class="nav-link active" href='/index'>Inicio</a>
  </li>
  
 
  <li class="nav-item">
    <a class="nav-link active" href='/conocenos'>Conocenos</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href='/panes'>Panes</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href='/bizcochos'>Bizcochería</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href='/franceses'>Pan Frances</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href='/pastel'>Pastelería</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href='/reposterias'>Repostería</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href='/temporada'>Pan de Temporada</a>
  </li>

 <li class="nav-item">
    <a class="nav-link active" class="<?php echo e(request()->is('/')? 'active':''); ?>" href="<?php echo e(route('comentarios.create')); ?>">Contactanos</a>
  </li>
<li class="nav-item">
    <a class="nav-link active" class="<?php echo e(request()->is('/')? 'active':''); ?>" href="<?php echo e(route('pedidos.create')); ?>">Pedido</a>
  </li>
  
  
 
 
  
</ul>
    </div>
</header>

</div>
<br>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">

            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                  Panaderia Huamantla 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
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
                </div>
            </div>
        </nav>
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
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
        <footer id="main-footer">   
            
            <center>
                <h2>Contacto</h2>
            
     Dirección: Calle Rosete Aranda #304 Barrio San Antonio, Huamantla, Tlax.<br>
                    E-mail: franlopbri@gmail.com<br>
        Cel: 2474724552<br>
                    Horario: 7 a.m - 21 p.m<a href="/home">.</a><br>
            <a href="Terminos">Términos y condiciones</a> &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="politicas">Políticas de privacidad</a>
                </center>
            
    
        
    </footer>
</body>
</html>

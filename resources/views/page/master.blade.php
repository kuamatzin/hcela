<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Herramientas Cela</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="/plugins/custom-icons/style.css">
    <link rel="stylesheet" href="/plugins/animate-css/animate.min.css">
    <link rel="stylesheet" href="/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/plugins/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/plugins/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="/plugins/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/css/styles.css">
    <!-- Custom CSS -->
    <link id="theme-style" rel="stylesheet" href="/css/app.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body data-spy="scroll">
    
    <div id="app">
        <!-- ******HEADER****** -->
    <header id="header" class="header">
        <div id="topbar" class="topbar">
            <div class="container-fluid">
                <nav class="main-nav" role="navigation">
                    <div class="social-container">
                        <ul class="list-inline social-list">
                        <!--
                            <li>
                                <a href="#">
                                    <button type="button" class="btn btn-warning" v-on:click="mostrarCarrito">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"> <span class="badge">@{{carrito_compra.length}}</span></i>
                                    </button>
                                </a>
                            </li>
                            -->
                            <li>
                                <a  target="_blank" href="https://www.youtube.com/channel/UC9psFkP6KZN43LyGM6bNXkQ" style="margin-top: 2px">
                                <img src="img/youtube.png" alt="" class="img-responsive" width="60%">
                                </a>
                            </li>
                            </ul><!--//social-list-->
                        </div>
                        <div class="navbar-header text-center">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="icon-bar-wrapper">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </span><!--//icon-bar-wrapper-->
                                </button><!--//nav-toggle-->
                                </div><!--//navbar-header-->
                                <div id="navbar-collapse" class="navbar-collapse collapse text-center">
                                    <ul class="nav navbar-nav center-block">
                                        <li class="nav-item active"><a class="scrollto" href="#header">Inicio</a></li>
                                        <li class="nav-item"><a class="scrollto" href="#projects">Maquinaria</a></li>
                                        <li class="nav-item"><a class="scrollto" href="#projects2">Herramientas, refacciones y accesorios</a></li>
                                        <li class="nav-item"><a class="scrollto" href="#services">¿Quiénes Somos?</a></li>
                                        <!--
                                        <li class="nav-item"><a class="scrollto" href="#why">Why Us</a></li>
                                        <li class="nav-item"><a class="scrollto" href="#reviews">Reviews</a></li>
                                        <li class="nav-item"><a class="scrollto" href="#about">About</a></li>
                                        -->
                                        <li class="nav-item"><a class="scrollto" href="#contact">Contacto</a></li>
                                        </ul><!--//nav-->
                                        </div><!--//navabr-collapse-->
                                        </nav><!--//main-nav-->
                                        </div><!--//container-->
                                        </div><!--//topbar-->
                                        <div class="branding container">
                                            <h1 class="logo pull-left"><img id="logo-image" class="img-responsive" src="/img/logo.png"></h1>
                                            <ul class="header-info-list list-inline pull-right">
                                                <li class="info-item contact-methods">
                                                    <span class="custom-icon icon-telephone_signal"></span>
                                                    <span class="info-main phone-number"><a href="#">222 281 25 44 </a></span>
                                                    <span class="info-sub"><a href="#">Lunes - Sábado</a></span>
                                                    </li><!--//info-item-->
                                                    <li class="info-item business-hours">
                                                        <span class="custom-icon icon-clock"></span>
                                                        <span class="info-main phone-number">9am - 5:30pm</span>
                                                        <span class="info-sub">Lunes - Viernes</span>
                                                        </li><!--//info-item-->
                                                        </ul><!--//info-list-->
                                                        </div><!--//branding-->
                                                        </header><!--//header-->
                                                        
                                                        @yield('content')
    </div>
                                                        
                                                        <!-- Main Javascript -->
                                                        <script type="text/javascript" src="/plugins/jquery-1.12.3.min.js"></script>
                                                        <script type="text/javascript" src="/plugins/bootstrap/js/bootstrap.min.js"></script>
                                                        <script type="text/javascript" src="/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
                                                        <script type="text/javascript" src="/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
                                                        <script type="text/javascript" src="/plugins/jquery.validate.min.js"></script>
                                                        <script type="text/javascript" src="/plugins/jquery-inview/jquery.inview.min.js"></script>
                                                        <script type="text/javascript" src="/plugins/isMobile/isMobile.min.js"></script>
                                                        <script type="text/javascript" src="/plugins/back-to-top.js"></script>
                                                        <script type="text/javascript" src="/plugins/owl-carousel/owl.carousel.min.js"></script>
                                                        <script type="text/javascript" src="/plugins/Gallery/js/jquery.blueimp-gallery.min.js"></script>
                                                        <script type="text/javascript" src="/plugins/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js"></script>
                                                        <script type="text/javascript" src="/js/ajax-form.js"></script>
                                                        
                                                        <script type="text/javascript" src="/js/main.js"></script>
                                                        
                                                        <!--[if !IE]>-->
                                                        <script type="text/javascript" src="/js/animations.js"></script>
                                                        <!--<![endif]-->
                                                        
                                                        <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
                                                        <script src="/js/demo/style-switcher.js"></script>
                                                        <script src="/js/app.js"></script>
                                                        <script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
                                                        <!--Add the following script at the bottom of the web page (immediately before the </body> tag)-->
                                                        <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=69227704"></script>
                                                        @yield('scripts')
                                                        
                                                        
                                                    </body>
                                                </html>
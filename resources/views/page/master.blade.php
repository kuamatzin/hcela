<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Herramientas Cela</title>

    <link rel="shortcut icon" href="/img/favicon.png" />

    <meta name="description" content="">

    <!-- CSS -->
    <link href="/css/preload.css" rel="stylesheet">

    <!-- Compiled in vendors.js -->
    <!--
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-switch.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/slidebars.min.css" rel="stylesheet">
    <link href="/css/lightbox.css" rel="stylesheet">
    <link href="/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/css/buttons.css" rel="stylesheet">
    -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="/css/vendors.css" rel="stylesheet">
    <link href="/css/syntaxhighlighter/shCore.css" rel="stylesheet" >

    <!-- RS5.0 Stylesheet -->
    <!--<link rel="stylesheet" type="text/css" href="/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/css/navigation.css">-->

    <link href="/css/style-blue.css" rel="stylesheet" title="default">
    <link href="/css/width-full.css" rel="stylesheet" title="default">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="/js/html5shiv.min.js"></script>
        <script src="/js/respond.min.js"></script>
    <![endif]-->
</head>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<body>
<div class="sb-site-container">
<div class="boxed">

<header id="header-full-top" class="hidden-xs header-full">
    <div class="container">
        <div class="header-full-title">
            <div class="col-md-10">
                <img src="/img/hc/logo.png" alt="" class="img-responsive">
            </div>
        </div>
        <nav class="top-nav">

            <div class="dropdown animated fadeInDown animation-delay-11">
                <a href="/login"><i class="fa fa-user"></i> Login</a>
            </div> <!-- dropdown -->

            <div class="dropdown animated fadeInDown animation-delay-13">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-search-box animated fadeInUp">
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-ar btn-primary" type="button">Go!</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                </div>
            </div> <!-- dropdown -->
        </nav>
    </div> <!-- container -->
</header> <!-- header-full -->
<nav class="navbar navbar-default navbar-header-full navbar-dark yamm navbar-static-top" role="navigation" id="header">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a id="ar-brand" class="navbar-brand hidden-lg hidden-md hidden-sm" href="index.html">Herramientas <span>Cela</span></a>
        </div> <!-- navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="pull-right">
            <a href="javascript:void(0);" class="sb-icon-navbar sb-toggle-right"><i class="fa fa-bars"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li @if($activo == 'home') class="active" @endif>
                    <a href="/">Home</a>
                </li>
                <li @if($activo == 'quienes_somos') class="active" @endif>
                    <a href="/quienes_somos">¿Quiénes Somos?</a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Productos</a>
                     <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li class="dropdown-submenu">
                                <a href="javascript:void(0);" class="has_children">Accesorios</a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="page_contact.html">Mandriles</a></li>
                                    <li><a href="page_contact2.html">Trompos</a></li>
                                    <li><a href="page_login.html">Sujección</a></li>
                                </ul>
                        </li>
                        <li class="dropdown-submenu">
                                <a href="javascript:void(0);" class="has_children">Maquinaria</a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="page_contact.html">Escuadradoras</a></li>
                                    <li><a href="page_contact2.html">Sierras Circulares</a></li>
                                    <li><a href="page_login.html">Trompos</a></li>
                                    <li><a href="page_login.html">Lijadoras de banda</a></li>
                                    <li><a href="page_login.html">Tornos</a></li>
                                    <li><a href="page_login.html">Escoplos</a></li>
                                    <li><a href="page_login.html">Sierra Cinta</a></li>
                                </ul>
                        </li>
                    </ul>
                </li>
                <li @if($activo == 'contacto') class="active" @endif>
                    <a href="/contacto">Contacto</a>
                </li>
             </ul>
        </div><!-- navbar-collapse -->
    </div><!-- container -->
</nav>

@yield('content')


<aside id="footer-widgets">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <br><br>
                <img src="/img/hc/logo.png" alt="" class="img-responsive">
                <h3 class="footer-widget-title">Sitemap</h3>
                <ul class="list-unstyled three_cols">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">¿Quienes somos?</a></li>
                    <li><a href="index.html">Accesorios</a></li>
                    <li><a href="index.html">Maquinaria</a></li>
                    <li><a href="index.html">Contacto</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Productos Recientes</h3>
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object" src="/img/demo/m2.jpg" width="75" height="75" alt="image"></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Lorem ipsum Duis quis occaecat minim lorem ipsum tempor officia labor</a></h4>
                            <small>August 18, 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object" src="/img/demo/m11.jpg" width="75" height="75" alt="image"></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Lorem ipsum dolor excepteur sunt in lorem ipsum cillum tempor</a></h4>
                            <small>September 14, 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object" src="/img/demo/m4.jpg" width="75" height="75" alt="image"></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Lorem ipsum Dolor cupidatat minim adipisicing et fugiat</a></h4>
                            <small>October 9, 2013</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Nuestros Clientes</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"><img src="/img/demo/wf1.jpg" class="img-responsive" alt="Image"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"><img src="/img/demo/wf2.jpg" class="img-responsive" alt="Image"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"><img src="/img/demo/wf3.jpg" class="img-responsive" alt="Image"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"><img src="/img/demo/wf4.jpg" class="img-responsive" alt="Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</aside> <!-- footer-widgets -->
<footer id="footer">
    <p>&copy; 2016 <a href="http://www.inovuz.com">Inovuz</a>, inc. Todos los derechos reservados.</p>
</footer>

</div> <!-- boxed -->
</div> <!-- sb-site -->

<div class="sb-slidebar sb-right sb-style-overlay">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
        </span>
    </div><!-- /input-group -->

    <h2 class="slidebar-header no-margin-bottom">Navigation</h2>
    <ul class="slidebar-menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="portfolio_topbar.html">Portfolio</a></li>
        <li><a href="page_about3.html">About us</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="page_contact.html">Contact</a></li>
    </ul>
</div> <!-- sb-slidebar sb-right -->
<div id="back-top">
    <a href="#header"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- Scripts -->
<!-- Compiled in vendors.js -->
<!--
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.cookie.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-switch.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/slidebars.min.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<script src="/js/holder.js"></script>
<script src="/js/buttons.js"></script>
<script src="/js/jquery.mixitup.min.js"></script>
<script src="/js/circles.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/jquery.matchHeight-min.js"></script>
-->

<script src="/js/vendors.js"></script>

<!--<script type="text/javascript" src="/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>-->


<script src="/js/styleswitcher.js"></script>

<!-- Syntaxhighlighter -->
<script src="/js/syntaxhighlighter/shCore.js"></script>
<script src="/js/syntaxhighlighter/shBrushXml.js"></script>
<script src="/js/syntaxhighlighter/shBrushJScript.js"></script>

<script src="/js/DropdownHover.js"></script>
<script src="/js/app.js"></script>
<script src="/js/holder.js"></script>
<script src="/js/index.js"></script>

</body>

</html>
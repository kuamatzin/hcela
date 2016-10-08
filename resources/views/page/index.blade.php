@extends('page.master')

@section('content')
<section class="carousel-section">
    <div id="carousel-example-generic" class="carousel carousel-razon slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-7">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                   <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Herramientas Cela</h1>
                                   <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Maquinaria para carpinteria</h2>
                                   <ul class="list-unstyled carousel-list">
                                       <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Calidad a tu alcance</li>
                                       <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Garantía</li>
                                       <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Servicio</li>
                                   </ul>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-5 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="/img/hc/slider1.png" class="img-responsive animated bounceInUp animation-delay-3" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                   <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Herramientas Cela</h1>
                                   <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Maquinaria para carpinteria</h2>
                                   <ul class="list-unstyled carousel-list">
                                       <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Productos de calidad 100% mexicanos</li>
                                       <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Cuidamos el proceso de fabricación con estrictas normas</li>
                                       <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Todos nuestros productos cuentan con 1 año de garantía pero le podemos decir que nuestra mejor garantía es que usted no la necesitara</li>
                                   </ul>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="/img/hc/slider2.png" class="img-responsive animated bounceInUp animation-delay-3" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-9">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                   <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Herramientas Cela</h1>
                                   <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Maquinaria para carpinteria</h2>
                                   <h3 style="color:white" class="animated fadeInDownBig animation-delay-2  crousel-subtitle">Contáctanos</h3>
                                   <p class="animated fadeInUpBig animation-delay-12">Prol. Benito Juárez #833 </p>
                                   <p class="animated fadeInUpBig animation-delay-15">San Francisco Totimehuacan Puebla</p>
                                   <p class="animated fadeInUpBig animation-delay-17">Tel. (222) 2812544 ó (222) 3260327</p>
                               </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-3 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="/img/hc/slider3.png" class="img-responsive animated bounceInUp animation-delay-3" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section> <!-- carousel -->

<section class="margin-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="content-box box-default animated fadeInUp animation-delay-10">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-html5"></i></span>
                    <h4 class="content-box-title">Accesorios</h4>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="/img/hc/accesorios.png" alt="" class="img-responsive img-circle center-block">
                            <br>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item" style="padding: 5px 10px;">Mandril Autoalineable</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Mandril Con dos juegos de platos y broquero</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Mandril con un Juego de Platos y broquero</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Mandril con dos juegos de platos sin broquero</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Trompo 4 Flechas tipo botella</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Trompo tipo botella</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Trompo Moldurador de Carro</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Trompo Router de Carro</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Router Alta velocidad Modulo</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Tornillo de Banco</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Husillo</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Sargentos</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="content-box box-default animated fadeInUp animation-delay-14">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-css3"></i></span>
                    <h4 class="content-box-title">Maquinaria Profesional</h4>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="/img/hc/profesional.png" alt="" class="img-responsive img-circle center-block">
                        </div>
                    </div>
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item" style="padding: 5px 10px;">Sierra Cinta</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Lijadora de Banda</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Escoplo Espigador</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Escoplo</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Sierra de Disco Profesional con Extensión de Mesa</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Sierra de Disco Profesional</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Torno Sencillo</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Torno con Base</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Torno Copiador</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Trompo Moldurador</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Trompo Router</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Router Alta Velocidad</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="content-box box-default animated fadeInUp animation-delay-16">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-desktop"></i></span>
                    <h4 class="content-box-title">Maquinaria Industrial</h4>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="/img/hc/industrial.png" alt="" class="img-responsive img-circle center-block">
                        </div>
                    </div>
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item" style="padding: 5px 10px;">Sierra Escuadradora Industrial 3000</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Sierra Escuadradora Industrial 1500</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Sierra de Disco Industrial 350</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Lijadora Indusrial Vertical-Horizontal</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Router Copiador Tridimensional</li>
                        <li class="list-group-item" style="padding: 5px 10px;">Trompo Industrial</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<hr>
<br><br>
<div class="container">
    <section class="margin-bottom">
        <p class="lead lead-lg text-center primary-color margin-bottom">Bienvenidos a <strong>Herramientas Cela</strong></p>
        <p class="slogan text-center">En <span>HERRAMIENTAS CELA</span>, siempre nos hemos ocupado por la <span>calidad</span> con la que todos nuestros productos son fabricados, tomando como base no solo la materia prima con la que estos se elaboran sino también teniendo un estricto <span>control</span> en cada uno de los procesos de producción, que dan como resultado un <span>excelente</span> producto al alcance de todo carpintero.</p>
   </section>
</div>
@endsection

@section('scripts')

@endsection
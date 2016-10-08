@extends('page.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <br><br>
            <p class="slogan text-center animated bounceInLeft animation-delay-12"><span>Herramientas Cela</span>.</p>
            <h1 class="right-line no-margin-top">¿Quiénes Somos?</h1>
        </div>

        <div class="col-md-8">
            <section class="animated fadeInDown animation-delay-8">
                <p class="p-lg" style="font-size: 1.4em">En HERRAMIENTAS CELA, siempre nos hemos ocupado por la calidad con la que todos nuestros productos son fabricados, tomando como base no solo la materia prima con la que estos se elaboran sino también teniendo un estricto control en cada uno de los procesos de producción, que dan como resultado un excelente producto al alcance de todo carpintero.
                </p>
            </section>
            <br>
            <section  class="animated fadeIn animation-delay-10">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-link">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="font-size: 1.5em">
                                    Breve Historia
                                </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body" style="font-size: 1.3em">
                                HERRAMIENTAS CELA, es una empresa 100% mexicana, fundada en 1990. Se inicio como fabricante de herramientas, mas poco tiempo después se introdujo en la fabricación de maquinaria para madera, destacándose en este ultimo como una empresa innovadora a nivel nacional.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-link">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" style="font-size: 1.5em">
                                    Servicio
                                </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body" style="font-size: 1.3em">
                                Cualquier duda sobre el funcionamiento, mantenimiento, o lo que usted pueda requerir de nuestras maquinas estamos para servirle a través de nuestros representantes, vía telefónica o e-mail, nuestros ingenieros le resolverán su problema.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-link">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" style="font-size: 1.5em">
                                    Calidad
                                </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body" style="font-size: 1.3em">
                                Esta es verificada en cada proceso, cuidando las estrictas normas de fabricación.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-link">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed" style="font-size: 1.5em">
                                    Refacciones
                                </a>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body" style="font-size: 1.3em">
                                Desde la pieza mas sofisticada hasta el mas pequeño tornillo, usted podrá encontrarlo con nosotros.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-link">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed" style="font-size: 1.5em">
                                    Garantía
                                </a>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body" style="font-size: 1.3em">
                                Todos nuestros productos cuentan con 1 año de garantía sobre defectos de fabricación, pero le podemos decir que nuestra mejor garantía es que usted no la necesitara.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-link">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" class="collapsed" style="font-size: 1.5em">
                                    Distribuidores
                                </a>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body" style="font-size: 1.3em">
                                Contamos con distribuidores a lo largo de toda la República Mexicana, por lo que usted podrá adquirir nuestros productos a través de cualquiera de ellos, le agradeceremos ponerse en contacto con nosotros para cualquier información
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-4">
            <img src="/img/hc/logo.png" alt="" class="img-responsive">
        </div>
    </div>
</div> <!-- container -->
@endsection

@section('scripts')

@endsection
<div id="aviso-modal-1" class="project-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="projectModal1Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="projectModal1Label">Aviso de Privacidad</h4>
            </div>
            <div class="modal-body">
                <div class="content">
                    <div class="row">
                        <div class="details col-xs-8 col-md-8 col-md-offset-2 col-xs-offset-2">
                            <p>
                                Mexicana de Maquinaria de Precisión S.A de C.V . , con domicilio en la calle Prolongación Benito Juárez número 833, Colonia San Francisco Totimehuacan , Puebla , Puebla , es responsable de la confidencialidad , uso y protección de la información personal que nos llegaré a proporcionar por los distintos medios que utilizamos para la comercialización de nuestros productos.
                                <br><br>
                                Por lo anterior su información personal será utilizada para fines de identificación en cualquier tipo de relación jurídica o de negocios que realice con nosotros, incluyendo la venta y adquisición de los productos o servicios ofertados , hacerle llegar los productos adquiridos , enviarle nuestro catalogo de promociones, productos y servicios , invitarle a participar en eventos y para fines mercadológicos y de prospección comercial.
                                <br><br>
                                Para las finalidades anteriores, podríamos requerirle su nombre, datos fiscales e información crediticia . Para el caso que desee limitar el uso o divulgación de su información personal , ejercitar sus derechos de acceder, rectificar y cancelar sus datos personales , así como de oponerse al tratamiento de los mismos y revocar el consentimiento que para tal fin nos haya otorgado , lo podrá realizar a través de los siguientes canales de atención : Telefono 222-3-26-03-27 o a través de nuestro correo electrónico hcela@prodigy.net.mx . En ambos casos es necesario enviarlo por escrito .
                                <br><br>
                                Le informamos que sus datos personales no serán transferidos a terceros para fines distintos a los necesarios para brindarle oportunamente los servicios y/o productos adquiridos en Mexicana de Maquinaria de Precisión S.A de C.V ., salvaguardando su protección y confidencialidad , sin que para ello sea necesario obtener su autorización en términos de articulo 37 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="especificaciones" class="project-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="projectModal1Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="projectModal1Label">@{{active_machine.name}}</h4>
            </div>
            <div class="modal-body">
                <div class="content">
                    <div class="row">
                        <figure class="figure col-xs-12 col-md-12">
                            <img class="img-responsive img-herramientas" style="padding-top: 100px" v-if="active_machine" v-bind:src="active_machine.photos[0]" alt="Herramientas Cela" />
                        </figure>
                        <br>
                        <hr>
                        <br>
                        <div class="details col-xs-8 col-md-8 col-md-offset-2 col-xs-offset-2">
                            <div v-if="!pago">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" id="active_tab" style="color:black">Características</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" style="color:black">Especificaciones</a></li>
                                    <li v-if="active_machine.video" role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" style="color:black">Video</a></li>
                                    <li v-if="active_machine.user_guide" role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab" style="color:black">Manual</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="active">@{{active_machine.name}}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr v-for="characteristic in active_machine.characteristics">
                                                                <td class="info">@{{characteristic}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="col-md-10 col-md-offset-1" v-for="(specification_name, specifications) in active_machine.specifications">
                                            <br>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <thead>
                                                            <tr>
                                                                <th class="active">@{{specification_name.toUpperCase()}}</th>
                                                                <th class="active"></th>
                                                            </tr>
                                                        </thead>
                                                        <tr v-for="specification in specifications">
                                                            <td v-for="spec in specification">@{{spec}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <br>
                                        <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" v-if="active_machine" v-bind:src="active_machine.video"></iframe>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="settings">
                                        <br>
                                        <h3 class="text-center">Descargar Manual</h3>
                                        <hr>
                                        <a href="@{{active_machine.user_guide}}" download target="_blank">
                                            <img src="img/user_guide.png" alt="" class="img-responsive center-block">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div v-if="pago">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-4">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">
                                                    INFORMACIÓN DE PAGO
                                                    </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <form role="form" v-on:submit.prevent="paymentConekta">
                                                        <div class="form-group">
                                                            <label for="cardNumber">
                                                            NOMBRE EN TARJETA</label>
                                                            <div class="">
                                                                <input type="text" class="form-control" id="cardName" placeholder="Nombre en Tarjeta"
                                                                required autofocus v-model="card_name"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cardNumber">
                                                            NÚMERO DE TARJETA</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="cardNumber" placeholder="Número de Tarjeta Válido"
                                                                required autofocus v-model="card_number" v-on:keyup="validarTarjeta"/>
                                                                <span class="input-group-addon" v-show="!valid_card"><span class="glyphicon glyphicon-ok"></span></span>
                                                                <span class="input-group-addon alert-success" v-show="valid_card"><span class="glyphicon glyphicon-ok" style="color:green"></span></span>
                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-7 col-md-7">
                                                                <div class="form-group">
                                                                    <label for="expityMonth">
                                                                    FECHA DE EXPIRACIÓN</label>
                                                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                                                        <input type="text" class="form-control" id="expityMonth" placeholder="MM" required v-model="card_expMonth"/>
                                                                    </div>
                                                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                                                        <input type="text" class="form-control" id="expityYear" placeholder="YY" required v-model="card_expYear"/></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5 col-md-5 pull-right">
                                                                    <div class="form-group">
                                                                        <label for="cvCode">
                                                                        CVC</label>
                                                                        <input type="password" class="form-control" id="cvCode" placeholder="CVC" required v-model="card_cvc"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-success btn-lg btn-block" role="button" v-show="boton_pagar">Pagar</button>
                                                            <a class="btn btn-success btn-lg btn-block" role="button" v-show="boton_procesando_pago"><img src="http://www.techspot.com/images/loading_blue2.gif" class="img-responsive center-block"></a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="review text-center">
                            <!--
                            <a class="btn btn-primary btn-cta scrollto" v-show="active_machine.sellable" v-if="!pago" v-on:click="pago=true">Comprar</a>
                            -->
                            <button type="button" class="btn btn-primary" v-show="active_machine.sellable" v-on:click="agregar_carrito(active_machine)">Agregar al carrito de compra</button>
                            <a class="btn btn-primary btn-cta" v-show="!active_machine.sellable && !active_machine.user_guide" href="/users_guides/catalogo.pdf" download target="_blank">Descargar Catálogo</a>
                            <a class="btn btn-warning btn-cta scrollto" v-if="pago" v-on:click="pago=false">Regresar</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="project-modal-2" class="project-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="projectModal2Label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="projectModal2Label">Loft Conversion</h4>
                </div>
                <div class="modal-body">
                    <div class="content">
                        <div class="row">
                            <figure class="figure col-xs-12 col-md-5">
                                <img class="img-responsive" src="/images/projects/latest/latest-2.jpg" alt="" />
                            </figure>
                            <div class="details col-xs-12 col-md-7">
                                <p>Describe your project here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Describe your project here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>
                                
                            </div>
                        </div>
                        
                        <div class="review text-center">
                            <blockquote class="quote">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>A thoroughly professional job lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.Phasellus viverra nulla ut metus varius laoreet.</p>
                            </blockquote>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="source">
                                <img class="customer-profile" src="/images/customers/customer-4.png" alt="">
                                <div class="customer-meta">Dan, Bristol - via <a href="#">homeadvisor.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="project-modal-3" class="project-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="projectModal3Label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="projectModal3Label">Catálogo de refacciones</h4>
                </div>
                <div class="modal-body">
                    <div class="content">
                        <div class="row">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                @for ($i = 0; $i < sizeof($refacciones) - 1; $i++)
                                <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="col_{{$i}}">
                                            <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}"
                                            @if($i == 0)
                                                aria-expanded="true"
                                            @else
                                                aria-expanded="false"
                                            @endif
                                            aria-controls="collapse{{$i}}">
                                            {{$keys[$i]}}
                                            </a>
                                            </h4>
                                        </div>
                                        <div id="collapse{{$i}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="col_{{$i}}">
                                            <div class="panel-body">
                                                @foreach($refacciones[$keys[$i]]->chunk(4) as $chunk)
                                                    <div class="row">
                                                        @foreach ($chunk as $refaccion)
                                                            <div class="col-xs-3">
                                                                <img src="{{$refaccion->image}}" alt="" class="img-responsive">
                                                                <p class="text-center">{{ $refaccion->description }} - <span style="color: #2566B4; font-weight: bold">${{$refaccion->price}}</span></p>
                                                                <button type="button" class="center-block btn btn-link" v-on:click="agregar_carrito({{$refaccion}})">Agregar al carrito</button>
                                                                </div>
                                                        @endforeach
                                                    </div>   
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
        
        <div class="slides"></div>
        
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
    <ol class="indicator"></ol>
    content -->
    <div class="modal fade" tabindex="-1" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                    <i class="glyphicon glyphicon-chevron-left"></i>
                    Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                    Next
                    <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="carrito">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Mi carrito de compra</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-md-offset-1">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th></th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Total</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="maquina in carrito_compra">
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#"> <img class="media-object" v-bind:src="maquina.photos[0]" style="width: 72px; height: 72px;"> </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">
                                                    @{{maquina.name}}</a></h4>
                                                    <!--
                                                    <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                                    <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                                                    -->
                                                </div>
                                            </div></td>
                                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                            </td>
                                            <td class="col-sm-1 col-md-1 text-center"><strong>
                                                $@{{maquina.price}}
                                            </strong></td>
                                            <td class="col-sm-1 col-md-1 text-center"><strong>
                                                $@{{maquina.price}}
                                            </strong></td>
                                            <td class="col-sm-1 col-md-1">
                                                <button type="button" class="btn btn-danger" v-on:click="quitar_carrito(maquina)">
                                                <span class="glyphicon glyphicon-remove"></span>
                                                Eliminar
                                            </button></td>
                                        </tr>
                                        <!--
                                        <tr>
                                            <td>   </td>
                                            <td>   </td>
                                            <td>   </td>
                                            <td><h5>Subtotal</h5></td>
                                            <td class="text-right"><h5><strong>$106.94</strong></h5></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>   </td>
                                            <td>   </td>
                                            <td>   </td>
                                            <td><h5>Discount</h5></td>
                                            <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                                        </tr>
                                        -->
                                        <tr>
                                            <td>   </td>
                                            <td>   </td>
                                            <td>   </td>
                                            <td><h3>Total</h3></td>
                                            <td class="text-right"><h3><strong>${{$carrito->sum('price')}}</strong></h3></td>
                                        </tr>
                                        <tr>
                                            <td>   </td>
                                            <td>   </td>
                                            <td>   </td>
                                            <td>
                                                <button type="button" class="btn btn-default">
                                                <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                                            </button></td>
                                            <td>
                                                <button type="button" class="btn btn-success">
                                                Checkout <span class="glyphicon glyphicon-play"></span>
                                            </button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
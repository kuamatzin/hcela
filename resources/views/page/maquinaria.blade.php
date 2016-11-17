<section id="projects" class="projects-section section text-center">
    <div class="container">
        <h2 class="section-title">Maquinaria</h2>
        <div class="latest-projects">
            <div class="row">
                <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="project-item">
                            <div class="img-holder img-holder-1"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Sierras Escuadradoras</h4>
                                    <ul class="list-group">
                                        @foreach($escuadradoras as $key => $escuadradora)
                                        <li class="list-group-item li-link">{{$escuadradora->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="project-item">
                            <div class="img-holder img-holder-2"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Sierras Circulares</h4>
                                    <ul class="list-group">
                                        @foreach($circulares as $key => $circular)
                                        <li class="list-group-item li-link">{{$circular->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="project-item">
                            <div class="img-holder img-holder-3"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Trompos y Routers</h4>
                                    <ul class="list-group">
                                        @foreach($trompos as $key => $trompo)
                                        <li class="list-group-item li-link">{{$trompo->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="project-item">
                            <div class="img-holder img-holder-1"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Lijadoras de Banda</h4>
                                    <ul class="list-group">
                                        @foreach($lijadoras as $key => $lijadora)
                                        <li class="list-group-item li-link">{{$lijadora->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="project-item">
                            <div class="img-holder img-holder-2"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Tornos</h4>
                                    <ul class="list-group">
                                        @foreach($tornos as $key => $torno)
                                        <li class="list-group-item li-link">{{$torno->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="project-item">
                            <div class="img-holder img-holder-3"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Escoplos</h4>
                                    <ul class="list-group">
                                        @foreach($escoplos as $key => $escoplo)
                                        <li class="list-group-item li-link">{{$escoplo->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="item col-sm-4 col-xs-12 col-sm-offset-4">
                    <div class="item-inner">
                        <div class="project-item">
                            <div class="img-holder img-holder-1"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Sierras Cinta</h4>
                                    <ul class="list-group">
                                        @foreach($cintas as $key => $cinta)
                                        <li class="list-group-item li-link" v-on:click="setActiveMachine({{$cinta}})">{{$cinta->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
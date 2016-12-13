<section id="projects2" class="projects-section section text-center" style=" background: #e2f2ff;">
    <div class="container">
        <h2 class="section-title">Herramientas, refacciones y accesorios</h2>
        <div class="latest-projects">
            <div class="row">
                <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="project-item">
                            <div class="img-holder img-holder-8"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Mandriles</h4>
                                    <ul class="list-group">
                                        @foreach($mandriles as $key => $mandril)
                                        <li class="list-group-item li-link" v-on:click="setActiveMachine({{$mandril}})">{{$mandril->name}}</li>
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
                            <div class="img-holder img-holder-9"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Cabezales de trompo y routers</h4>
                                    <ul class="list-group">
                                        @foreach($trompos_herramientas as $key => $trompo)
                                        <li class="list-group-item li-link" v-on:click="setActiveMachine({{$trompo}})">{{$trompo->name}}</li>
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
                            <div class="img-holder img-holder-10"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Tornillo de banco</h4>
                                    <ul class="list-group">
                                        @foreach($tornillos as $key => $tornillo)
                                        <li class="list-group-item li-link" v-on:click="setActiveMachine({{$tornillo}})">{{$tornillo->name}}</li>
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
                            <div class="img-holder img-holder-11"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Husillo</h4>
                                    <ul class="list-group">
                                        @foreach($husillos as $key => $husillo)
                                        <li class="list-group-item li-link" v-on:click="setActiveMachine({{$husillo}})">{{$husillo->name}}</li>
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
                            <div class="img-holder img-holder-12"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Sargento</h4>
                                    <ul class="list-group">
                                        @foreach($sargentos as $key => $sargento)
                                        <li class="list-group-item li-link" v-on:click="setActiveMachine({{$sargento}})">{{$sargento->name}}</li>
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
                            <div class="img-holder img-holder-13"></div>
                            <div class="info-mask">
                                <div class="mask-inner">
                                    <h4 class="title">Refacciones y accesorios</h4>
                                    <div class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</div>
                                    <a class="btn btn-secondary" href="#" data-toggle="modal" data-target="#project-modal-3">View Details</a>
                                    <a class="link" href="#" data-toggle="modal" data-target="#project-modal-3"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
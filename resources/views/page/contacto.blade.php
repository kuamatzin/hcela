<section id="contact" class="contact-section text-center">
    <div class="container">
        <h2 class="section-title">Contacto</h2>
        <div class="contact-intro">
            <p>¿Tienes dudas o requieres más información acerca de nuestros produtos?. No dudes en contactarnos</p>
        </div>
        <ul class="contact-info-list list-inline">
            <li class="item">
                <span class="custom-icon icon-telephone_signal"></span>
                <span class="info"><a href="#">222 281 25 44</a></span>
                <span class="info"><a href="#">222 326 03 27</a></span>
            </li>
        </ul>
        <form  class="ufbl-front-form" method="get" action="/enviar_email">
            <div id="form-messages" class="text-center"></div>
            <div class="row text-left">
                <div class="name-group col-sm-6 col-xs-12 form-group">
                    <div class="form-group-inner{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'name']) !!}
                        <small style="color:yellow" v-if="errors.name">Este campo es obligatorio</small>
                    </div>
                </div>
                <div class="name-group col-sm-6 col-xs-12 form-group">
                    <div class="form-group{{ $errors->has('nombre_comercial') ? ' has-error' : '' }}">
                        {!! Form::label('nombre_comercial', 'Nombre Comercial') !!}
                        {!! Form::text('nombre_comercial', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'corp_name']) !!}
                        <small style="color:yellow" v-if="errors.corp_name">Este campo es obligatorio</small>
                    </div>
                </div>
                <div class="name-group col-sm-6 col-xs-12 form-group">
                    <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                        {!! Form::label('estado', 'Estado') !!}
                        {!! Form::text('estado', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'state']) !!}
                        <small style="color:yellow" v-if="errors.state">Este campo es obligatorio</small>
                    </div>
                </div>
                <div class="name-group col-sm-6 col-xs-12 form-group">
                    <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                        {!! Form::label('ciudad', 'Ciudad') !!}
                        {!! Form::text('ciudad', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'city']) !!}
                        <small style="color:yellow" v-if="errors.city">Este campo es obligatorio</small>
                    </div>
                </div>
                <div class="email-group col-sm-6 col-xs-12 form-group">
                    <div class="form-group-inner{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: juan@gmail.com', 'v-model' => 'email']) !!}
                        <small style="color:yellow" v-if="errors.email">Este campo es obligatorio</small>
                    </div>
                </div>
                <div class="phone-group col-sm-6 col-xs-12 form-group">
                    <div class="form-group-inner{{ $errors->has('phone') ? ' has-error' : '' }}">
                        {!! Form::label('phone', 'Teléfono') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'phone']) !!}
                        <small style="color:yellow" v-if="errors.phone">Este campo es obligatorio</small>
                    </div>
                </div>
                <div class="zipcode-group col-sm-6 col-xs-12 form-group">
                </div>
                <div class="message-group col-xs-12 form-group">
                    <div class="form-group-inner{{ $errors->has('message') ? ' has-error' : '' }}">
                        {!! Form::label('message', 'Mensaje') !!}
                        {!! Form::textarea('message', null, ['class' => 'form-control', 'required' => 'required', 'rows' => 6, 'v-model' => 'message']) !!}
                        <small style="color:yellow" v-if="errors.message">Este campo es obligatorio</small>
                    </div>
                </div>
                <div class="col-xs-12 form-group">
                    <a v-on:click="contacto" class="btn btn-block btn-primary btn-cta">Enviar</a>
                </div>
            </div>
        </form>
        <br><br><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15092.626595817006!2d-98.1794781!3d18.968688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdadde0b99c1be5f8!2sHerramientas+Cela!5e0!3m2!1ses-419!2smx!4v1479425045172" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>
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
            <li class="item">
                <span class="custom-icon icon-email"></span>
                <span class="info"><a href="#">contacto@herramientascela.com</a></span>
            </li>
        </ul>
        <form  class="contact-form form" method="get" action="/enviar_email">
            <div id="form-messages" class="text-center"></div>
            <div class="row text-left">
                <div class="name-group col-sm-6 col-xs-12 form-group">
                    <div class="form-group-inner{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                </div>
                <div class="email-group col-sm-6 col-xs-12 form-group">
                    <div class="form-group-inner{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: juan@gmail.com']) !!}
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>
                </div>
                <div class="phone-group col-sm-6 col-xs-12 form-group">
                    <div class="form-group-inner{{ $errors->has('phone') ? ' has-error' : '' }}">
                        {!! Form::label('phone', 'Teléfono') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('phone') }}</small>
                    </div>
                </div>
                <div class="zipcode-group col-sm-6 col-xs-12 form-group">
                </div>
                <div class="message-group col-xs-12 form-group">
                    <div class="form-group-inner{{ $errors->has('message') ? ' has-error' : '' }}">
                        {!! Form::label('message', 'Mensaje') !!}
                        {!! Form::textarea('message', null, ['class' => 'form-control', 'required' => 'required', 'rows' => 6]) !!}
                        <small class="text-danger">{{ $errors->first('message') }}</small>
                    </div>
                </div>
                <div class="col-xs-12 form-group">
                    <button type="submit" class="btn btn-block btn-primary btn-cta">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>
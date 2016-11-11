@extends('page.master')
@section('content')
<div class="container">
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <h2 class="section-title no-margin-top">Envia un mensaje</h2>
        </div>
        <div class="col-md-8">
            <section>
                <p>¿Tienes dudas o requieres más información acerca de nuestros produtos?. No dudes en contactarnos</p>
                
                @include('flash::message')

                <form role="form" action="/enviar_email" method="GET">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: carlos@gmail.com']) !!}
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                        {!! Form::label('message', 'Mensaje') !!}
                        {!! Form::textarea('message', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('message') }}</small>
                    </div>
                    <button type="submit" class="btn btn-ar btn-primary">Enviar</button>
                    <div class="clearfix"></div>
                </form>
            </section>
        </div>

        <div class="col-md-4">
            <section>
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-envelope-o"></i> Información Adicional</div>
                    <div class="panel-body">
                        <h4 class="section-title no-margin-top">Contactos</h4>
                        <address>
                            <strong>Herramientas Cela</strong><br>
                            222 281 25 44 <br>
                            222 326 03 27
                        </address>

                        <!-- Business Hours -->
                        <h4 class="section-title no-margin-top">Horarios de atención</h4>
                        <ul class="list-unstyled">
                            <li><strong>Lunes-Viernes:</strong> 9am a 7pm</li>
                            <li><strong>Sábados:</strong> 9am a 2pm</li>
                            <li><strong>Domingo:</strong> Cerrado</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <hr class="dotted">

    <section>
        <div class="well well-sm">
            <iframe width="100%" height="350" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15092.626595817006!2d-98.1794781!3d18.968688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdadde0b99c1be5f8!2sHerramientas+Cela!5e0!3m2!1ses-419!2smx!4v1475954639654"></iframe>
        </div>
    </section>
</div> <!-- container -->
@endsection

@section('scripts')
<script>
$('div.alert').not('.alert-important').delay(5000).fadeOut(350);
</script>
@endsection
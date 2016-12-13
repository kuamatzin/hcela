<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => '']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>
<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    {!! Form::label('type', 'Tipo') !!}
    {!! Form::select('type', [1 => 'Accesorio', 2 => 'Maquinaria'], $machine->getOriginal('type'), ['id' => 'type', 'class' => 'form-control', 'required' => '']) !!}
    <small class="text-danger">{{ $errors->first('type') }}</small>
</div>
<div class="form-group{{ $errors->has('machine_type') ? ' has-error' : '' }}">
    {!! Form::label('machine_type', 'Tipo de Máquina') !!}
    {!! Form::select('machine_type',[1 => 'Mandril', 2 => 'Trompo', 3 => 'Tornillo de Banco', 4 => 'Escuadradora', 5 => 'Sierra Circular', 6 => 'Trompo Herramienta', 7 => 'Lijadora de Banda', 8 => 'Torno', 9 => 'Escoplo', 10 => 'Sierra Cinta', 11 => 'Husillo', 12 => 'Sargento'], null, ['id' => 'machine_type', 'class' => 'form-control', 'required' => '']) !!}
    <small class="text-danger">{{ $errors->first('machine_type') }}</small>
</div>
<div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
    {!! Form::label('video', 'Video') !!}
    {!! Form::text('video', null, ['class' => 'form-control', 'required' => '']) !!}
    <small class="text-danger">{{ $errors->first('video') }}</small>
</div>
<br>
<div class="row">
    <div class="col-md-6">
        <img src="/{{$machine->photos[0]}}" alt="" class="img-responsive">
    </div>
</div>
<br>
<div class="form-group{{ $errors->has('photo[]') ? ' has-error' : '' }}">
    {!! Form::label('photo[]', 'Foto') !!}
    {!! Form::file('photo[]', ['required' => 'required']) !!}
    <p class="help-block">Selecciona una imagen para cambiar la foto de la máquina</p>
    <small class="text-danger">{{ $errors->first('photo[]') }}</small>
</div>
<div class="form-group{{ $errors->has('user_guide_file') ? ' has-error' : '' }}">
    {!! Form::label('user_guide_file', 'Guía de Usuario') !!}
    {!! Form::file('user_guide_file', ['required' => '']) !!}
    <small class="text-danger">{{ $errors->first('user_guide_file') }}</small>
</div>
<div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
    {!! Form::label('position', 'Posición') !!}
    {!! Form::text('position', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('position') }}</small>
</div>
<div class="form-group">
    <div class="checkbox{{ $errors->has('sellable') ? ' has-error' : '' }}">
        <label for="sellable">
            {!! Form::checkbox('sellable', '1', null, ['id' => 'sellable']) !!} Vendible
        </label>
    </div>
    <small class="text-danger">{{ $errors->first('sellable') }}</small>
</div>
<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    {!! Form::label('price', 'Precio (en centavos)') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('price') }}</small>
</div>
<hr>

<input type="hidden" v-model="caracteristicas" value="{{ json_encode($machine->characteristics) }}">
<input type="hidden" v-model="especificaciones_server" value="{{ json_encode($machine->specifications) }}">

<!-- Características -->
<h3>
    Características
    <button type="button" class="btn btn-success pull-right" v-on:click="agregar_caracteristica">Agregar caracteristica</button>
</h3>
<br>
<div class="form-group{{ $errors->has('caracteristicas[]') ? ' has-error' : '' }}" v-for="caracteristica in caracteristicas" track-by="$index">
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('caracteristicas[]', 'Caracteristica:') !!}
        </div>
        <div class="col-md-9">
            {!! Form::text('caracteristicas[]', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'caracteristica']) !!}
            <small class="text-danger">{{ $errors->first('caracteristicas[]') }}</small>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-danger pull-right" v-on:click="quitar_caracteristica($index)"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>
</div>
<hr>
<!-- Especificaciones -->
<h3>
    Especificaciones
    <button type="button" class="btn btn-success pull-right" v-on:click="agregar_especificacion">Agregar especificación</button>
</h3>
<br>
<div v-for="categoria in especificaciones">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-2">
                    <label for="nombres_especificaciones[]">Nombre Especificación:</label>
                    <input type="hidden" name="numero_especificaciones[]" class="form-control" v-model="categoria.numero_especificaciones">
                </div>
                <div class="col-md-6">
                    <input type="text" name="nombres_especificaciones[]" class="form-control clack" v-model="categoria.nombre">
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-success" v-on:click="agregar_descripcion_especificacion(categoria)">Agregar especificación</button>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger pull-right" v-on:click="quitar_nombre_especificacion($index)"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div v-for="especificacion in categoria.especificaciones" track-by="$index">
                <div class="row">
                    <div class="col-md-2">
                        {!! Form::label('especificaciones[]', 'Especificacion') !!}
                    </div>
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('especificaciones[]') ? ' has-error' : '' }}">
                            {!! Form::text('especificaciones[]', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'especificacion']) !!}
                            <small class="text-danger">{{ $errors->first('especificaciones[]') }}</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('especificaciones_dos[]') ? ' has-error' : '' }}">
                            {!! Form::text('especificaciones_dos[]', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'categoria.especificaciones_d[$index]']) !!}
                            <small class="text-danger">{{ $errors->first('especificaciones_dos[]') }}</small>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-danger pull-right" v-on:click="quitar_especificacion(categoria, $index)" v-show="categoria.especificaciones"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<br>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-info pull-right']) !!}
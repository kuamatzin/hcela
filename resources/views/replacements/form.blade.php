<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    {!! Form::label('type', 'Tipo de refacción') !!}
    {!! Form::select('type',['' => 'Tipo de refacción', 1 => 'Mandril - Broquero', 2 => 'Mandril - Tuerca Izquierda', 3 => 'Trompo Botella - Separadores', 4 => 'Sierra Cinta - Banda 4PK 0640', 5 => 'Sierra Cinta - Hule', 6 => 'Sierra Cinta - Sierra Cinta', 7 => 'Torno - Banda A-59', 8 => 'Torno - Contrapunto completo', 9 => 'Torno - Porta herramientas corto', 10 => 'Torno - Porta herramientas largo', 11 => 'Torno - Plato de arrastre', 12 => 'Torno - Polea 3 canales p/ base', 13 => 'Torno - Polea 3 canales p/motor', 14 => 'Torno - Punto giratorio', 15 => 'Torno - Flecha plato de arrastre', 16 => 'Escoplo - Banda 4PK 685', 17 => 'Lijadora - Banda A-23', 18 => 'Lijadora - Lija de banda', 19 => 'Lijadora - Lija de disco', 20 => 'Trompo - Banda TCM 12.5 x 795', 21 => 'Trompo - Banda TCR 4PK 735', 22 => 'Trompo - Boquilla ¼', 23 => 'Trompo - Boquilla ¼ ER', 24 => 'Trompo Boquilla ½', 25 => 'Trompo - Boquilla ½ ER', 26 => 'Trompo - Flecha 3/4', 27 => 'Trompo - Omega completa', 28 => 'Trompo - Tuerca para boquilla', 29 => 'Sierra Circular y Escuadradora - Banda A-22', 30 => 'Sierra Circular y Escuadradora - Disco Incisor 120 x 3.2 x 20 Z-24', 31 => 'Sierra Circular y Escuadradora - Regleta', 32 => 'Sierra Circular y Escuadradora - Sierra Circular 250 x 3.2 x 30 Z-80 ', 33 => 'Sierra Circular y Escuadradora - Sierra Circular 300 x 3.2 x 30 Z-96', 34 => 'Sierra Circular y Escuadradora - Sierra Circular carburo 10” 40 dientes', 35 => 'Sierra Circular y Escuadradora - Sierra Circular HW300 x 3.2 x 30 Z-48', 36 => 'Sierra Circular y Escuadradora - Transportador', 37 => 'Motores - 2 HP 2 Polos Cerrado', 38 => 'Motores - 3 HP 2 Polos Cerrado'], null, ['id' => 'type', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('type') }}</small>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>

<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    {!! Form::label('image', 'Imagen') !!}
    {!! Form::file('image', ['required' => 'required']) !!}
    <p class="help-block">Adjunta una imagen</p>
    <small class="text-danger">{{ $errors->first('image') }}</small>
</div>


<div class="form-group">
    <div class="checkbox{{ $errors->has('sellable') ? ' has-error' : '' }}">
        <label for="sellable">
            {!! Form::checkbox('sellable', '1', null, ['id' => 'sellable']) !!} ¿Se vende?
        </label>
    </div>
    <small class="text-danger">{{ $errors->first('sellable') }}</small>
</div>

<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    {!! Form::label('price', 'Precio') !!}
    {!! Form::text('price', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('price') }}</small>
</div>

{!! Form::submit($submitButtonText, ['class' => 'btn btn-info pull-right']) !!}
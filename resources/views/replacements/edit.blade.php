@extends('layouts.app')

@section('content')
    <div class="container-fluid" id="editar-maquina">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title titulo">Editar Refacción</h3>
         -       </div>
                <div class="panel-body">
                    {!! Form::model($replacement, ['route' => ['refacciones.update', $replacement->id], 'method' => 'PUT', 'files' => true]) !!}
                        @include('replacements.form', ['submitButtonText' => 'Guardar'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
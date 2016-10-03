@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Listado de Herramientas</h3>
        <hr>
        <a href="/catalogo/create" class="btn btn-primary">Dar de alta nueva herramienta</a>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Tipo Máquina</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($machines as $key => $machine)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$machine->name}}</td>
                        <td>{{$machine->type}}</td>
                        <td>{{$machine->machine_type}}</td>
                        <td>
                            <a href="/catalogo/{{$machine->id}}" class="btn btn-primary">Ver</a>
                        </td>
                        <td>
                            <a href="/catalogo/{{$machine->id}}/edit" class="btn btn-warning">Editar</a>
                        </td>
                        <td>
                            <a href="/catalogo/{{$machine->id}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
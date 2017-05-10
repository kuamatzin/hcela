@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        <h3>Listado de Refacciones</h3>
        <hr>
        <a href="/refacciones/create" class="btn btn-primary">Dar de alta nueva refacción</a>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Precio</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($refacciones as $key => $refaccion)
                    <tr>
                        <td>{{$refaccion->type}}</td>
                        <td>{{$refaccion->description}}</td>
                        <td>
                            <img src="{{$refaccion->image}}" alt="" class="img-responsive">
                        </td>
                        <td>{{$refaccion->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
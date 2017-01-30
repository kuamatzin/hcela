@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$machine->name}}</h1>
        <div class="row">
            <div class="col-md-4">
                @foreach($machine->photos as $key => $photo)
                    <br><br>
                    <img src="/{{$photo}}" alt="" class="img-responsive">
                @endforeach
            </div>
            <div class="col-md-8">
                <h3>Tipo</h3>
                <p>{{$machine->type}}</p>
                <hr>
                <h3>Tipo de máquina</h3>
                <p>{{$machine->machine_type}}</p>
                <hr>
                <h3>Descripción</h3>
                <p>{{$machine->description}}</p>
                <hr>
                <h3>Características</h3>
                <ul class="list-group">
                    @foreach($machine->characteristics as $key => $characteristic)
                        <li class="list-group-item">{{$characteristic}}</li>
                    @endforeach
                </ul>
                <hr>
                <h3>Especificaciones</h3>
                @foreach($machine->specifications as $name => $specifications)
                    <br>
                    <h4>{{$name}}</h4>
                    @foreach($specifications as $key => $specification)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    @foreach($specification as $key => $spec)
                                        <td>{{$spec}}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
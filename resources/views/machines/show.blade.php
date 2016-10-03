@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$machine->name}}</h1>
        <div class="row">
            <div class="col-md-4">
                @foreach($machine->photos as $key => $photo)
                    <img src="/storage/{{$photo}}" alt="" class="img-responsive">
                @endforeach
            </div>
            <div class="col-md-8">
                <h3>Tipo</h3>
                <p>{{$machine->type}}</p>
                <h3>Tipo de máquina</h3>
                <p>{{$machine->machine_type}}</p>
                <h3>Descripción</h3>
                <p>{{$machine->description}}</p>
                <h3>Características</h3>
                <ul class="list-group">
                    @foreach($machine->characteristics as $key => $characteristic)
                        <li class="list-group-item">{{$characteristic}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
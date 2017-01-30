@extends('layouts.app')

@section('content')
    <div class="container" id="app">
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
                            <button type="button" class="btn btn-danger" v-on:click="borrar({{$machine->id}})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    var vm = new Vue({
        el: "#app",
        methods: {
            borrar: function(id){
                var that = this;
                 swal({   title: "¿Estás seguro de eliminar?",   text: "Ya no será visible en la página",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",  cancelButtonText: "Cancelar", confirmButtonText: "Estoy seguro",   closeOnConfirm: false }, function(){ that.eliminar(id) });
            },
            eliminar: function(id){
                this.$http.delete('/catalogo/' + id).then(function(response){
                    if (response.status == 200) {
                        location.reload();
                    }
                    else {
                        swal("Intente borrar de nuevo")
                    }
                }, function(error){
                    swal("Intente borrar de nuevo")
                });
            }
        }
    
        
    })
</script>
@endsection
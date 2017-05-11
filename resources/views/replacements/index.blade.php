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
                        <th>Image Text</th>
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
                            <img src="/{{$refaccion->image}}" alt="" class="img-responsive">
                        </td>
                        <td>{{$refaccion->price}}</td>
                        <td>{{$refaccion->image}}</td>
                        <td>
                            <button type="button" class="btn btn-danger" v-on:click="borrar({{$refaccion->id}})">Borrar</button>
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
                this.$http.delete('/refacciones/' + id).then(function(response){
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
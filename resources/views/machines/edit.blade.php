@extends('layouts.app')

@section('content')
    <div class="container" id="editar-maquina">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title titulo">Editar Máquina</h3>
                </div>
                {{$machine->characteris}}
                <div class="panel-body">
                    {!! Form::model($machine, ['route' => ['catalogo.update', $machine->id], 'method' => 'PUT', 'files' => true]) !!}
                        @include('machines.form_edit', ['submitButtonText' => 'Guardar'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    new Vue({
        el: '#editar-maquina',
        data: {
            caracteristicas: [],
            especificaciones_server: [],
            especificaciones: [],
        },
        ready: function(){
            this.caracteristicas = JSON.parse(this.caracteristicas)
            this.especificaciones_server = JSON.parse(this.especificaciones_server)

            for (var nombre in this.especificaciones_server) {
                if (this.especificaciones_server.hasOwnProperty(nombre)) {
                    var especificaciones_a = [];
                    var especificaciones_d = [];
                    var nombreCategoria = nombre;
                    var numero_especificaciones = 0;
                    for(var data in this.especificaciones_server[String(nombre)]){
                        especificaciones_a.push(this.especificaciones_server[String(nombre)][data][0])
                        especificaciones_d.push(this.especificaciones_server[String(nombre)][data][1])
                        numero_especificaciones = numero_especificaciones + 1;
                    }
                    var data = { nombre: nombreCategoria, especificaciones: especificaciones_a, especificaciones_d: especificaciones_d,numero_especificaciones: numero_especificaciones }
                    this.especificaciones.push(data)
                }
            }
        },
        methods: {
            agregar_especificacion: function(){
                var that = this;
                swal({
                    title: "Nueva categoría",
                    text: "Nombre",
                    type: "input",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    confirmButtonText: "Guardar",
                    cancelButtonText: "Cancelar",
                    animation: "slide-from-top",
                    inputPlaceholder: "Nombre de categoría"
                }, function(nombreCategoria) {
                    if (nombreCategoria === false) return false;
                    if (nombreCategoria === "") {
                        swal.showInputError("Necesitas escribir un nombre de categoría!");
                        return false
                    }
                    var especificaciones_a = [];
                    var data = { nombre: nombreCategoria, especificaciones: especificaciones_a, numero_especificaciones: 0 }
                    that.especificaciones.push(data)
                    swal.close();
                });
            },
            agregar_descripcion_especificacion: function(especificacion){
                especificacion.especificaciones.push('')
                especificacion.numero_especificaciones = especificacion.numero_especificaciones + 1;
            },
            quitar_especificacion: function(especificacion, index){
                especificacion.especificaciones.splice(index, 1);
                especificacion.numero_especificaciones = especificacion.numero_especificaciones - 1;
            },
            quitar_nombre_especificacion(index){
                this.especificaciones.splice(index, 1);
            },
            agregar_caracteristica: function(){
                this.caracteristicas.push('')
            },
            quitar_caracteristica: function(index){
                this.caracteristicas.splice(index, 1);
            }
        }
    })
</script>
@endsection
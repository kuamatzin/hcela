@extends('layouts.app')

@section('content')
    <div class="container" id="crear-maquina">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title titulo">Crear Máquina</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'catalogo', 'files' => true]) !!}
                        @include('machines.form', ['submitButtonText' => 'Guardar'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    new Vue({
        el: '#crear-maquina',
        data: {
            caracteristicas: [],
            especificaciones: [],
            especificaciones_dos: []
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
@extends('layout/main')

@section('tituloPagina', 'PM | Planificación')

@section('contenido')
    @section('encabezado', 'Paradas Mayores')    
        
    <div>
        <planificacion_component :paradamayor="{{ $parada_mayor }}" :tareas="{{ $tareas }}" ></planificacion_component>
    </div>
@endsection

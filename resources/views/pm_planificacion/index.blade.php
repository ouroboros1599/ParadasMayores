@extends('layout/main')

@section('tituloPagina', 'PM | Planificación')

@section('contenido')
    @section('encabezado', 'Paradas Mayores')    
        
    <planificacion_component :tareas="{{ $tareas }}"></planificacion_component>
@endsection

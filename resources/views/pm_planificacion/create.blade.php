@extends('layout/main')

@section('tituloPagina', 'PM | Planificación')

@section('contenido')
@section('encabezado', 'CREAR ACTIVIDAD Y TAREAS DE PARADA MAYOR')
<create_planificacion :parada_mayor="{{ $parada_mayor }}"></create_planificacion>
@endsection

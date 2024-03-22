@extends('layout/main')
@section('tituloPagina', 'PM | Listado')

@section('contenido')
@section('encabezado', 'EDITAR ACTIVIDAD Y TAREAS DE PARADA MAYOR')
<edit_planificacion :actividad="{{ $actividad }}"></edit_planificacion>
@endsection

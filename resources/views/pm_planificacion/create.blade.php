@extends('layout/main')

@section('tituloPagina', 'PM | Planificación')

@section('contenido')
    @section('encabezado', 'PLANIFICACIÓN DE PARADAS MAYORES')    
    <create_planificacion :parada_mayor="{{ $parada_mayor }}"></create_planificacion>
@endsection

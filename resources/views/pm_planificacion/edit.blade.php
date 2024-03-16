@extends('layout/main')
@section('tituloPagina', 'PM | Listado')

@section('contenido')
    @section('encabezado', 'Paradas Mayores')
    <edit_planificacion :actividad="{{ $actividads }}"></edit_planificacion>
@endsection
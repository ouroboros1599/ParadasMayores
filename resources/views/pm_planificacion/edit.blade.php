@extends('layout/main')
@section('tituloPagina', 'PM | Listado')

@section('contenido')
@section('encabezado', 'Paradas Mayores')
<edit_planificacion :actividad="{{ $actividad }}"></edit_planificacion>
@endsection

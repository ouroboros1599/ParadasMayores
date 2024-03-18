@extends('layout/main')
@section('tituloPagina', 'PM | Listado')

@section('contenido')
@section('encabezado', 'Paradas Mayores')
<edit_planificacion :actividads="{{ $actividads }}"></edit_planificacion>
@endsection

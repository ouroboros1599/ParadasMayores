@extends('layout/main')
@section('tituloPagina', 'PM | Listado')

@section('contenido')
@section('encabezado', 'LISTADO PARADAS MAYORES')

<listado_component :paradasmayores="{{ $paradasMayores }}"> </listado_component>

@endsection

@extends('layout/main')
@section('tituloPagina', 'PM | Listado')

@section('contenido')
    @section('encabezado', 'Paradas Mayores')
    
    <listado_component :paradasmayores="{{ $paradasMayores }}"> </listado_component>

@endsection
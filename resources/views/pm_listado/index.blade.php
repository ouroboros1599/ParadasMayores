@extends('layout/main')
@section('tituloPagina', 'PM | Listado')

@section('contenido')
    @section('encabezado', 'Paradas Mayores')
    
    <listado_component></listado_component>

    {{-- @php
        print_r($listadoParada);   
    @endphp --}}
@endsection
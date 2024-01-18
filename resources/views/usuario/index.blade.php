@extends('layout/main')
@section('tituloPagina', 'PM | Listado')

@section('contenido')
    @section('encabezado', 'LISTADO DE PARADAS MAYORES')
    
    <div>
        <list_component></list_component>
        {{-- <example-componente></example-componente> --}}
    </div>

@endsection
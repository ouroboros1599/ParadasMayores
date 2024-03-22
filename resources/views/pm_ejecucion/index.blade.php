@extends('layout/main')
@section('tituloPagina', 'PM | Ejecución')

@section('contenido')
    @section('encabezado', 'EJECUCIÓN DE PARADA MAYOR')
    <div>
        <ejecucion_component :paradamayor="{{ $parada_mayor }}"></ejecucion_component>
    </div>

@endsection
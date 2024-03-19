@extends('layout/main')
@section('tituloPagina', 'PM | Ejecución')

@section('contenido')
    @section('encabezado', 'Paradas Mayores')
    <div>
        <ejecucion_component :paradamayor="{{ $parada_mayor }}" :actividads="{{ $actividads }}"></ejecucion_component>
    </div>

@endsection
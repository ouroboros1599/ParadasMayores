@extends('layout/main')

@section('tituloPagina', 'PM | Planificación')

@section('contenido')
@section('encabezado', 'Paradas Mayores')

<div>
    <planificacion_component :paradamayor="{{ $parada_mayor }}" :actividads="{{ $actividads }}">
    </planificacion_component>
</div>
@endsection

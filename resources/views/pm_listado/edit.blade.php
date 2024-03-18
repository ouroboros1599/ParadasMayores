@extends('layout/main')
@section('tituloPagina', 'PM | Listado')

@section('contenido')
@section('encabezado', 'Paradas Mayores')
<div>
    <edit_listado :paradamayor="{{ $paradaMayor }}"></edit_listado>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <h1>Servicios</h1>
    @if ($param)
        <p>Servicio específico: {{ $param }}</p>
    @else
        <p>Lista de servicios.</p>
    @endif
@endsection
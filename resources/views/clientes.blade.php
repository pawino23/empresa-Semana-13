@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1>Clientes</h1>
    @if ($param)
        <p>Cliente específico: {{ $param }}</p>
    @else
        <p>Lista de clientes.</p>
    @endif
@endsection
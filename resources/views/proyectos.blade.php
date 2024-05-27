@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')
    <h1>Proyectos</h1>
    @if ($param)
        <p>Proyecto específico: {{ $param }}</p>
    @else
        <p>Lista de proyectos.</p>
    @endif
@endsection
@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    @if ($param)
        <p>Entrada específica: {{ $param }}</p>
    @else
        <p>Lista de entradas del blog.</p>
    @endif
@endsection
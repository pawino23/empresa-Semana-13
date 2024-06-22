@extends('layouts.app')

@section('title', 'Crear Persona')

@section('content')
<div class="container">
    <h2>Crear Persona</h2>
    <form action="{{ route('personas.store') }}" method="POST">
        @csrf
        @include('personas.form')
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
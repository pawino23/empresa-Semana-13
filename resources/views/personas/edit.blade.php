@extends('layouts.app')

@section('title', 'Editar Persona')

@section('content')
<div class="container">
    <h2>Editar Persona</h2>
    <form action="{{ route('personas.update', $persona->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('personas.form')
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Personas</h2>
    <a href="{{ route('personas.create') }}" class="btn btn-primary mb-3">Crear Persona</a>
    <table class="table">
        <thead>
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Fecha de Nacimiento</th>
                <th>Edad</th>
                <th>Sueldo</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->cperApellido }}</td>
                    <td>{{ $persona->cPerNombre }}</td>
                    <td>{{ $persona->cPerDireccion }}</td>
                    <td>{{ $persona->dPerFechaNac }}</td>
                    <td>{{ $persona->nPerEdad }}</td>
                    <td>{{ $persona->nPerSueldo }}</td>
                    <td>{{ $persona->nPerEstado ? 'Activo' : 'Inactivo' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
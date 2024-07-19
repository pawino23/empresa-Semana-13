@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <tr>
        <td colspan="4">Bienvenido a nuestra Empresa:</td>
    </tr>

    <tr>
        <td colspan="4">
            @auth
                {{ auth()->user()->name }}
            @endauth
        </td>
    </tr>
@endsection
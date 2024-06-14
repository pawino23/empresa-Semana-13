<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestValidation;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function create()
    {
        return view('personas.create');
    }

    public function store(FormRequestValidation $request)
    {
        // Validar y almacenar en la BD
        Persona::create($request->validated());

        // Redirigir a la vista index
        return redirect()->route('personas.index');
    }

    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }
}
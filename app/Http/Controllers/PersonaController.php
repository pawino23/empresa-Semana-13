<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\FormRequestValidation;

class PersonaController extends Controller
{
    public function create()
    {
        return view('personas.create');
    }

    public function store(FormRequestValidation $request)
    {
        Persona::create($request->validated());
        return redirect()->route('personas.index');
    }

    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.edit', compact('persona'));
    }

    public function update(FormRequestValidation $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->update($request->validated());
        return redirect()->route('personas.index');
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('personas.index');
    }
}
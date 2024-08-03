<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\FormRequestValidation;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Events\PersonaSaved;

class PersonaController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('create', 'edit', 'destroy');
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(FormRequestValidation $request)
    {
        $validated = $request->validated();
        
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('fotos', 'public');
            
            // Manipulación de la imagen
            $image = Image::make(Storage::get('public/' . $path))
                ->widen(600)
                ->limitColors(255)
                ->encode();

            Storage::put('public/' . $path, (string) $image);

            $validated['foto'] = $path;
        }

        $persona = Persona::create($validated);
        
        // Disparar el evento PersonaSaved
        PersonaSaved::dispatch($persona);
        
        return redirect()->route('personas.index')->with('estado', 'La Persona se creó correctamente');
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
        $validated = $request->validated();

        if ($request->hasFile('foto')) {
            // Eliminar la imagen anterior si existe
            if ($persona->foto) {
                Storage::disk('public')->delete($persona->foto);
            }
            
            $path = $request->file('foto')->store('fotos', 'public');
            
            // Manipulación de la imagen
            $image = Image::make(Storage::get('public/' . $path))
                ->widen(600)
                ->limitColors(255)
                ->encode();

            Storage::put('public/' . $path, (string) $image);

            $validated['foto'] = $path;
        }

        $persona->update($validated);
        
        // Disparar el evento PersonaSaved
        PersonaSaved::dispatch($persona);
        
        return redirect()->route('personas.index')->with('estado', 'La Persona se actualizó correctamente');
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        // Eliminar la imagen si existe
        if ($persona->foto) {
            Storage::disk('public')->delete($persona->foto);
        }
        $persona->delete();
        return redirect()->route('personas.index')->with('estado', 'La Persona se eliminó correctamente');
    }
}
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/servicios/{param?}', function ($param = null) {
    return view('servicios', ['param' => $param]);
})->where('param', '[a-zA-Z]+')->name('servicios');

Route::get('/proyectos/{param?}', function ($param = null) {
    return view('proyectos', ['param' => $param]);
})->where('param', '[a-zA-Z]+')->name('proyectos');

Route::get('/clientes/{param?}', function ($param = null) {
    return view('clientes', ['param' => $param]);
})->where('param', '[a-zA-Z]+')->name('clientes');

Route::get('/blog/{param?}', function ($param = null) {
    return view('blog', ['param' => $param]);
})->where('param', '[0-9]+')->name('blog');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Rutas para PersonaController
Route::resource('personas', PersonaController::class);
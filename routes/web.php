<?php

use Illuminate\Support\Facades\Route;
use App\Models\Proceso;
use App\Http\Controllers\controladorProcesos;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/proceso', function () {
    $proceso =Proceso::with(['cliente', 'empleado'])->get();
    return view('consulta', compact('proceso'));
})->name('proceso');

Route::get('/proceso', [controladorProcesos::class, 'index'])->name('proceso');
Route::get('/proceso/buscar', [controladorProcesos::class, 'buscar'])->name('proceso.buscar');



Route::get('carrera', function () {
    return view('carrera');
})->name('carrera');






require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

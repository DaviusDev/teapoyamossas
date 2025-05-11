<?php

use Illuminate\Support\Facades\Route;
use App\Models\Proceso;
use App\Http\Controllers\controladorProcesos;
use App\Http\Controllers\VacanteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/proceso', function () {
    $proceso =Proceso::with(['cliente', 'empleado'])->get();
    return view('consulta', compact('proceso'));
})->name('proceso');

Route::get('/proceso', [controladorProcesos::class, 'index'])->name('proceso');
Route::get('/proceso/buscar', [controladorProcesos::class, 'buscar'])->name('proceso.buscar');

Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'test@test.com' && $password === 'test') {
        return redirect('vacantes'); // Redirige a la página que quieras
    }

    return back()->with('error', 'Credenciales incorrectas');
})->name('login');

// Add the logout route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::get('carrera', function () {
    return view('carrera');
})->name('carrera');

Route::post('/vacantes', [VacanteController::class, 'store'])->name('vacantes.store');



Route::get('/vacantes', [VacanteController::class, 'mostrarVacantes'])->name('vacantes');


Route::put('/vacantes/{id}/estado', [VacanteController::class, 'actualizarEstado'])->name('vacantes.estado');

Route::post('/rechazar', [VacanteController::class, 'rechazar']);
Route::post('/avanzar', [VacanteController::class, 'avanzarPostulante']);






require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

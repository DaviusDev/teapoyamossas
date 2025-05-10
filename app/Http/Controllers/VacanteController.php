<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacante; // Asegúrate de importar el modelo Vacante
use Illuminate\Support\Facades\Mail; // Importa la clase Mail para enviar correos
use App\Mail\VacanteRecibidaMail; // Asegúrate de importar la clase de correo que vas a usar
use Illuminate\Support\Facades\Storage; // Importa la clase Storage para manejar archivos
use Illuminate\Support\Facades\Validator; // Importa la clase Validator para validar datos
use Illuminate\Validation\Rule; // Importa la clase Rule para reglas de validación
use Illuminate\Support\Facades\Auth; // Importa la clase Auth para manejar autenticación
use App\Models\Proceso; // Importa el modelo Proceso si es necesario
use App\Models\Cliente; // Importa el modelo Cliente si es necesario
use Illuminate\Support\Facades\DB;


class VacanteController extends Controller
{
    public function store(Request $request)
    {
         //dd($request->all());
        // Validar datos
        $request->validate([
            'vacanteSeleccionada' => 'required|string', // Asegúrate de que el ID de la vacante exista
            'vacanteNombre' => 'required|string|max:255', // Nombre de la vacante
            'nombreCompleto' => 'required|string|max:255',
            'telefonoContacto' => 'required|string|max:20',
            'correoElectronico' => 'required|string|email|max:255',
            'cv' => 'required|mimes:pdf|max:2048', // max 2MB
        ]);

        // Guardar archivo
        $cvPath = $request->file('cv')->store('cvs', 'public'); // almacena en storage/app/public/cvs

        // Guardar en la BD
        $vacante = Vacante::create([
            'vacante_id' => (int) $request->vacanteSeleccionada,
            'vacante' => $request->vacanteNombre,
            'nombre' => $request->nombreCompleto,
            'telefono' => $request->telefonoContacto,
            'correo' => $request->correoElectronico,
            'cv_path' => $cvPath,
        ]);

        // Enviar correo
        Mail::to($request->correoElectronico)->send(new \App\Mail\VacanteRecibidaMail($vacante, 'nuevo'));

        return redirect()->back()->with('correo_enviado', 'Gracias por aplicar, en breve nos pondremos en contacto contigo.');

    }

    public function mostrarVacantes()
    {
        // Obtener todas las vacantes de la base de datos
        $vacantes = Vacante::all(); 

        // Pasar las vacantes a la vista
        return view('reclutador.vacantes', compact('vacantes'));
    }

public function actualizarEstado(Request $request, $id)
{
    DB::table('vacantes')->where('id', $id)->update([
        'estado' => $request->estado,
    ]);

    return redirect()->back()->with('success', 'Estado actualizado correctamente.');
}

public function rechazar(Request $request)
{
    $postulante = Vacante::findOrFail($request->id);

    // Enviar correo de rechazo
    Mail::to($postulante->correo)->send(new VacanteRecibidaMail($postulante, 'rechazado'));

    // Eliminar postulante de la base de datos
    $postulante->delete();

    // Retornar respuesta
    return response()->json(['message' => 'Candidato rechazado y eliminado correctamente']);
}

public function avanzarPostulante(Request $request)
{
    $postulante = Vacante::findOrFail($request->id);

    // Enviar correo de avance
    Mail::to($postulante->correo)->send(new VacanteRecibidaMail($postulante, 'aceptado'));

    // Actualizar el estado del postulante
    $postulante->estado = 'Avanza';
    $postulante->save();

    // Retornar respuesta
    return response()->json(['message' => 'Candidato avanzado correctamente']);
}


}

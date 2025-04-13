<?php
namespace App\Http\Controllers; // Ruta del controlador

use App\Models\Proceso; // Importanción del modelo
use Illuminate\Http\Request; //Importanción necesaria para manejar peticiones HTTP

class controladorProcesos extends Controller // Esta clase tiene el mismo nombre que el controlador parce, no se si esto puede llegar a generar algún tipo de conflicto, por eso dejo este comment
{
  // Teoricamente, esta función permite cargar los procesos contenidos en la base de datos
    public function index()
    {
        $procesos = collect(); //este with utiliza un concepto denominado "eager loading" para cargar las relaciones cliente y empleado junto con los procesos
        return view('consulta', compact('procesos'));
    }
    
    // está función en teoria permite buscar un proceso por su número, todos las variables o valores "idProceso" se estructuran de está manera ya que buscan guardar coherencia con la llave primaria de la entidad procesos (espero la explicación se clara jaja)
    public function buscar(Request $request)
    {
        $idProceso = $request->input('idProceso');
        
        if ($idProceso) {
            $procesos = Proceso::with(['cliente', 'empleado'])
                ->where('idproceso', '=', "$idProceso")
                ->get();
        } else {
            $procesos = Proceso::with(['cliente', 'empleado'])->get();
        }
            
        return view('consulta', compact('procesos'));
    }
    
    // Esta es la función que muestra los resultados que se traen desde la base de datos parce.
    
    public function show($idProceso)
    {
        $proceso = Proceso::with(['cliente', 'empleado'])->findOrFail($idProceso);
        return view('procesos.show', compact('proceso'));
    }
    
}
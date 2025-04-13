<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleados::with(['procesos'])->get();
        return view('empleados.index', compact('empleados'));
    }

    public function buscar(Request $request)
    {
        $nombreEmpleado = $request->input('nombre_empleado');
        
        if ($nombreEmpleado) {
            $empleados = Empleados::with(['procesos'])
                ->where('nombre', 'like', "%$nombreEmpleado%")
                ->orWhere('apellido', 'like', "%$nombreEmpleado%")
                ->orWhere('idempleados', 'like', "%$nombreEmpleado%")
                ->get();
        } else {
            $empleados = Empleados::with(['procesos'])->get();
        }
        
        return view('empleados.index', compact('empleados'));
    }

    public function show($id)
    {
        $empleados = Empleados::with(['procesos'])->findOrFail($id);
        return view('empleados.show', compact('empleado'));
    }
    
    public function create()
    {
        return view('empleados.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:45',
            'apellido' => 'required|max:45',
            'especialidad' => 'required|max:45',
        ]);
        
        Empleados::create($validatedData);
        
        return redirect()->route('empleados.index')
            ->with('success', 'Empleado creado correctamente');
    }
    
    public function edit($id)
    {
        $empleados = Empleados::findOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:45',
            'apellido' => 'required|max:45',
            'especialidad' => 'required|max:45',
        ]);
        
        $empleados = Empleados::findOrFail($id);
        $empleados->update($validatedData);
        
        return redirect()->route('empleados.index')
            ->with('success', 'Empleado actualizado correctamente');
    }
    
    public function destroy($id)
    {
        $empleados = Empleados::findOrFail($id);
        $empleados->delete();
        
        return redirect()->route('empleados.index')
            ->with('success', 'Empleado eliminado correctamente');
    }
}
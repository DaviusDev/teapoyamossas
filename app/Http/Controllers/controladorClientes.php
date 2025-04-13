<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::with(['procesos'])->get();
        return view('clientes.index', compact('clientes'));
    }

    public function buscar(Request $request)
    {
        $nombreCliente = $request->input('nombre_cliente');
        
        if ($nombreCliente) {
            $clientes = Cliente::with(['procesos'])
                ->where('nombrecliente', 'like', "%$nombreCliente%")
                ->orWhere('idcliente', 'like', "%$nombreCliente%")
                ->get();
        } else {
            $clientes = Cliente::with(['procesos'])->get();
        }
        
        return view('clientes.index', compact('clientes'));
    }

    public function show($id)
    {
        $cliente = Cliente::with(['procesos'])->findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }
    
    public function create()
    {
        return view('clientes.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombrecliente' => 'required|max:45',
            'numerocontacto' => 'required|max:45',
            'direccion' => 'required|max:45',
            'descripcion_del_caso' => 'nullable|max:1000',
        ]);
        
        Cliente::create($validatedData);
        
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente creado correctamente');
    }
    
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombrecliente' => 'required|max:45',
            'numerocontacto' => 'required|max:45',
            'direccion' => 'required|max:45',
            'descripcion_del_caso' => 'nullable|max:1000',
        ]);
        
        $cliente = Cliente::findOrFail($id);
        $cliente->update($validatedData);
        
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado correctamente');
    }
    
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado correctamente');
    }
}
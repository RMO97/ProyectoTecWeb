<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->telefono =$request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->email = $request ->email;
        $cliente->save();
        // *Buena practica* un mensaje con el cliente creado
        $data = [
            'mensaje' => 'Cliente creado satisfactoriamente',
            'cliente'=>$cliente
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        /*if(!$cliente){
            return response()->json([
                'mensaje' => 'Cliente no encontrado'
            ]);
        }*/
        //Este manejo de errores es para el front 

        return response()->json($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        
        $cliente->nombre = $request->nombre;
        $cliente->telefono =$request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->email = $request ->email;
        $cliente->save();
        // *Buena practica* un mensaje con el cliente creado    
        $data = [
            'mensaje' => 'Cliente modificado satisfactoriamente',
            'cliente'=>$cliente
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        
        $cliente->delete();
        $data = [
            'mensaje' => 'Cliente eliminado satisfactoriamente',
            'cliente'=>$cliente
        ];
        return response()->json($data);

    }
}

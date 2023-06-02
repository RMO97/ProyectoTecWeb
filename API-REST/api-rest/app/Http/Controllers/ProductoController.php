<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return response()->json($productos);
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
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->stock = $request->stock;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $request->imagen;
        $producto->categoria = $request->categoria;
        $producto->costo = $request->costo;
        $producto->save();
        $data = [
            'mensaje' => 'Producto creado satisfactoriamente',
            'producto'=>$producto
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return response()->json($producto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->nombre = $request->nombre;
        $producto->stock = $request->stock;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $request->imagen;
        $producto->categoria = $request->categoria;
        $producto->costo = $request->costo;
        $producto->save();
        $data = [
            'mensaje' => 'Producto modificado satisfactoriamente',
            'producto'=>$producto
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        $data = [
            'mensaje' => 'Producto eliminado satisfactoriamente',
            'producto'=>$producto
        ];
        return response()->json($data);
    }
}

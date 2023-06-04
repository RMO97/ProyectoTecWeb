<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::all();
        return response()->json($ventas);
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
        try{
            $venta = new Venta;
            $venta->cliente_id = $request->cliente_id;
            $venta->producto_id = $request->producto_id;
            $venta->total_venta = $request->total_venta;
            $venta->impuesto = $request->impuesto;
            $venta->save();
            $data = [
                'mensaje' => 'Venta creada satisfactoriamente',
                'venta'=>$venta
            ];

            return response()->json($data);
        }catch(\Exception $e){
            return response()->json(['error'=>'Ocurrio un error inesperado al crear la venta'],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {

        return response()->json($venta);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        $venta->cliente_id = $request->cliente_id;
        $venta->producto_id = $request->producto_id;
        $venta->total_venta = $request->total_venta;
        $venta->impuesto = $request->impuesto;
        $venta->save();
        $data = [
            'mensaje' => 'Venta modificada satisfactoriamente',
            'venta'=>$venta
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        $venta->delete();
        $data = [
            'mensaje' => 'Venta eliminada satisfactoriamente',
            'venta'=>$venta
        ];
        return response()->json($data);
    }
}

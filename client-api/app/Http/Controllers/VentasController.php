<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    //
    public function index(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/ventas'); 
        $data = response->json();
        return view('ventas', compact('data'));
    }

    public function create(){
        $clientes = Cliente::pluck('id','nombre');
        $productos = Producto::pluck('id','nombre');
        return view('venta','clientes','productos');
    }

    public function store(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/ventas',[
        'cliente_id'->$request->cliente_id,
        'producto_id'->$request->producto_id,
        'total_venta'->$request->total_venta,
        'impuesto'->$request->impuesto,
        ]);

        return redirect()->route('ventas.index');
    }

    public function delete(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::delete($url.'/ventas'.$id); 

        return redirect()->route('ventas.index');
    }

    public function view($id){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/ventas'.$id);
        $producto = $response->Json();
        return view('ventas', compact('venta'));

    }

    public function update(Request $request){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::put($url.'/ventas'.$request->id,[
        'cliente_id'->$request->cliente_id,
        'producto_id'->$request->producto_id,
        'total_venta'->$request->total_venta,
        'impuesto'->$request->impuesto,
        ]);

        return redirect()->route('ventas.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductosController extends Controller
{
    //
    public function index(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/productos'); 
        $data = response->json();
        return view('productos', compact('data'));
    }

    public function create(){
        return view('producto');
    }

    public function store(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/productos',[
        'nombre'->$request->nombre,
        'stock'->$request->stock,
        'descripcion'->$request->descripcion,
        'imagen'->$request->imagen,
        'categoria'->$request->categoria,
        'costo'->$request->costo,
        ]);

        return redirect()->route('productos.index');
    }

    public function delete(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::delete($url.'/productos'.$id); 

        return redirect()->route('productos.index');
    }

    public function view($id){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/productos'.$id);
        $producto = $response->Json();
        return view('productos', compact('producto'));

    }

    public function update(Request $request){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::put($url.'/productos'.$request->id,[
            'nombre'->$request->nombre,
            'stock'->$request->stock,
            'descripcion'->$request->descripcion,
            'imagen'->$request->imagen,
            'categoria'->$request->categoria,
            'costo'->$request->costo,
        ]);

        return redirect()->route('productos.index');
    }

}

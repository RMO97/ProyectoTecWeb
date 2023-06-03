<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\VentasController;


class ClientesController extends Controller
{
    //
    public function index(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/clientes'); 
        $data = $response->json();
        return view('clientes', compact('data'));
    }

    public function create(){
        return view('cliente');
    }

    public function store(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/clientes',[
        'nombre'->$request->nombre,
        'telefono'->$request->telefono,
        'direccion'->$request->direccion,
        'email'->$request->email,
        ]);

        return redirect()->route('clientes.index');
    }

    public function delete($id){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::delete($url.'/clientes/'.$id); 

        return redirect()->route('clientes.index');
    }

    public function view($id){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/clientes/'.$id);
        $cliente = $response->json();
        return view('clienteView', compact('cliente'));

    }

    public function update(Request $request){
        $url = env('URL_SERVER_API','http://127.0.0.1');

        $response = Http::put($url.'/clientes/'.$request->id,[
            'nombre'=>$request->nombre,
            'telefono'=>$request->telefono,
            'direccion'=>$request->direccion,
            'email'=>$request->email,
        ]);

        return redirect()->route('clientes.index');
    }


}

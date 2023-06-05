<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\ProductosController;



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

    public function store(Request $request){
        try{
            $url = env('URL_SERVER_API','http://127.0.0.1');
            $response = Http::post($url.'/clientes',[
            'nombre'=>$request->nombre,
            'telefono'=>$request->telefono,
            'direccion'=>$request->direccion,
            'email'=>$request->email,
            ]);

            return redirect()->route('clientes.index');

        }catch(RequestException $re){
            return back()->with('error','Ocurrio un error al crear un cliente');
        }catch(\Exception $e){
            return back()->with('error','Ocurrio un error inesperado');
         }    
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

    public function show($id){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/clientes/'.$id);
        $cliente = $response->json();
        return view('clienteDelete', compact('cliente'));
    }


}

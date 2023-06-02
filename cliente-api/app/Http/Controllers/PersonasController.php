<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    //
    public function index(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/personas'); 
        $data = response->json();
        return view('personas', compact('data'));
    }

    public function create(){
        return view('persona');
    }

    public function store(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/personas',[
        'nombre'->$request->nombre,
        'telefono'->$request->telefono,
        'direccion'->$request->direccion,
        'email'->$request->email,
        ]);

        return redirect()->route('personas.index');
    }

    public function delete(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::delete($url.'/personas'.$id); 

        return redirect()->route('personas.index');
    }

    public function view($id){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/personas'.$id);
        $producto = $response->Json();
        return view('personas', compact('persona'));

    }

    public function update(Request $request){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::put($url.'/personas'.$request->id,[
            'nombre'->$request->nombre,
            'telefono'->$request->telefono,
            'deireccion'->$request->direccion,
            'email'->$request->email,
        ]);

        return redirect()->route('personas.index');
    }


}

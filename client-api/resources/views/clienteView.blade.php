@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')
<div class="card">
    <div class="card-header">
<h1>Actualizar Cliente</h1>

   </div>
   <p class="card-text">
<form action="{{ route('cliente.update') }}"method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $cliente['id'] }}">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"  value="{{ $cliente['nombre'] }}">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{ $cliente['telefono'] }}">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" value="{{ $cliente['direccion'] }}">
    <label for="email">Email</label>
    <input type="text" name="email" id="email"  value="{{ $cliente['email'] }}">
    
    <button class="btn btn-primary">Guardar</button>
     <br>
     <br>
    <a href="{{ route("clientes.index") }}" class="btn btn-info"> Regresar</a>
</form>
</p>
</div>
@endsection
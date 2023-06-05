@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')

<div class="card">
    <div class="card-header">
<h1>Nuevo Cliente</h1>
</div>
<div class="card-body">
    <p class="card-text">
<form action="{{ route('clientes.store') }}"method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
     <br>
     <br>
    <button class="btn btn-info">Guardar</button>
    <br>
    <br>
    <br>
    <a href="{{ route("clientes.index") }}" class="btn btn-info"> Regresar</a>
</form>
</p>
</div>
</div>
@endsection
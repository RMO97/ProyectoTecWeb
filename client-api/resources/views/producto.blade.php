@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')
<div class="card">
<div class="card-header">
<h1>Nuevo Producto</h1>
</div>
<div class="card-body">
<form action="{{ route('productos.store') }}"method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="stock">Existencia</label>
    <input type="text" name="stock" id="stock">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion">
    <label for="imagen">Imagen</label>
    <input type="text" name="imagen" id="imagen">
    <br>
    <br>
    <label for="categoria">Categoria</label>
    <input type="text" name="categoria" id="categoria">
    <label for="costo">Costo</label>
    <input type="text" name="costo" id="costo">
    <br>
    <br>
    <button class="btn btn-primary">Guardar</button>
    <br>
     <br>
    <a href="{{ route("productos.index") }}" class="btn btn-success"> Regresar</a>
</form>
</div>
</div>
@endsection
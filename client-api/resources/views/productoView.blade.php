@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')
<div class="card">
<div class="card-header">
<h1>Actualizar Producto</h1>
</div>
<div class="card-body">
<form action="{{ route('productos.update') }}"method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $producto['id'] }}">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"  value="{{ $producto['nombre'] }}">
    <label for="stock">Existencia</label>
    <input type="text" name="stock" id="stock" value="{{ $producto['stock'] }}">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion" value="{{ $producto['descripcion'] }}">
    <label for="imagen">Imagen</label>
    <input type="text" name="imagen" id="imagen"  value="{{ $producto['imagen'] }}">
    <br>
    <br>
    <label for="categoria">Categoria</label>
    <input type="text" name="categoria" id="categoria" value="{{ $producto['categoria'] }}">
    <label for="costo">Costo</label>
    <input type="text" name="costo" id="costo" value="{{ $producto['costo'] }}">
    <br>
    <br>
    <button class="btn btn-primary">Guardar</button>
    <br>
    <br>
    <a href="{{ route("productos.index") }}" class="btn btn-success"> Regresar</a>
    
    </div>
    </div>
    @endsection
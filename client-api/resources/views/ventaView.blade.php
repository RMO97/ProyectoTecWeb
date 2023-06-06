@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')
<div class="card">
<div class="card-header">
<h1>Actualizar Venta</h1>
</div>
<div class="card-body">
<form action="{{ route('ventas.update') }}"method="POST">
    @csrf
    <label for="cliente_id">Cliente</label>
    <input type="text" name="cliente_id" id="cliente_id"  value="{{ $clienteNombre }}">
    <label for="producto_id">Producto</label>
    <input type="text" name="producto_id" id="producto_id" value="{{ $productoNombre }}">
    <label for="total_venta">Venta Total</label>
    <input type="text" name="total_venta" id="total_venta" value="{{ $venta['total_venta'] }}">
    <label for="impuesto">Impuesto</label>
    <input type="text" name="impuesto" id="impuesto"  value="{{ $venta['impuesto'] }}">
    <br>
    <br>
    <button class="btn btn-primary">Guardar</button>
    <br>
    <br>
    <a href="{{ route("ventas.index") }}" class="btn btn-success"> Regresar</a>
    </div>
    </div>
    @endsection

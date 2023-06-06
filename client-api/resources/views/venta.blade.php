@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')
<div class="card">
<div class="card-header">
<h1>Nueva venta</h1>
</div>
<div class="card-body">
<form action="{{ route('ventas.store') }}"method="POST">
    @csrf
    <label for="cliente_id">Cliente ID </label>
    <select type="text" name="cliente_id" id="cliente_id">
        @foreach($clientes as $cliente)
            <option value = "{{$cliente['id']}}">{{$cliente['nombre']}}</option>
        @endforeach
    </select>
    <label for="producto_id">Producto ID </label>
    <select type="text" name="producto_id" id="producto_id">
        @foreach($productos as $producto)
            <option value = "{{$producto['id']}}">{{$producto['nombre']}}</option>
        @endforeach
    </select>
    <label for="total_venta">Total de venta</label>
    <input type="text" name="total_venta" id="total_venta">
    <label for="impuesto">Impuesto</label>
    <input type="text" name="impuesto" id="impuesto">
     <br>
     <br>
    <button class="btn btn-primary">Realizar Compra</button>
    <br>
    <br>
    <a href="{{ route("ventas.index") }}" class="btn btn-success"> Regresar</a>
    
    </div>
    </div>
    @endsection


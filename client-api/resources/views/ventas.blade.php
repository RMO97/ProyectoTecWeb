@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')
<div class="card">
<div class="card-header">
<h1>Ventas</h1>
</div>
<div class="card-body">
<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Total de venta</th>
            <th>Impuesto</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $venta)
            <tr>
                <td>{{ $venta['cliente_id'] }}</td>
                <td>{{ $venta['producto_id'] }}</td>
                <td>{{ $venta['total_venta'] }}</td>
                <td>{{ $venta['impuesto'] }}</td>
                
                
                <td>
                    <a href="{{ route('ventas.view', $venta['id']) }}" class="btn btn-warning">Actualizar</a>
                    <a href="{{ route('ventas.delete', $venta['id']) }}" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('ventas.store') }}" class="btn btn-primary">Registrar venta</a>
<br>
    <br>
    <a href="{{ route("productos.index") }}" class="btn btn-success"> Productos</a>
</div>
</div>
@endsection
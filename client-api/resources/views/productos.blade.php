@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')
<div class="card">
<div class="card-header">
<h1> Productos </h1>
</div>
<div class="card-body">
<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Existencias</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Categoria</th>
            <th>Costo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $producto)
            <tr>
                <td>{{ $producto['nombre'] }}</td>
                <td>{{ $producto['stock'] }}</td>
                <td>{{ $producto['descripcion'] }}</td>
                <td>
                    <img src = "{{ $producto['imagen'] }}">
                </td>
                <td>{{ $producto['categoria'] }}</td>
                <td>{{ $producto['costo'] }}</td>
                <td>
                    <a href="{{ route('productos.view', $producto['id']) }}" class="btn btn-warning">Actualizar</a>
                    <a href="{{ route('productos.delete', $producto['id']) }}" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('productos.store') }}" class="btn btn-info">Crear nuevo producto</a>
<br>
<br>
<a href="{{ route("clientes.index") }}" class="btn btn-success"> Clientes</a>
</div>
</div>
@endsection

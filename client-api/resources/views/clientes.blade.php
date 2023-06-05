@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')
<div class="card">
    <div class="card-header">
    <h1> Clientes </h1>
    </div>
    <div class="card-body">
    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $cliente)
                <tr>
                    <td>{{ $cliente['nombre'] }}</td>
                    <td>{{ $cliente['telefono'] }}</td>
                    <td>{{ $cliente['direccion'] }}</td>
                    <td>{{ $cliente['email'] }}</td>
                    
                    <td>
                        <a href="{{ route('cliente.view', $cliente['id']) }}" class="btn btn-warning">Actualizar</a>
                        <a href="{{ route('cliente.show', $cliente['id']) }}" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('productos.index') }}" class="btn btn-info">Productos</a>
    <a href="{{ route('ventas.index') }}" class="btn btn-dark">Ventas</a>
    <a href="{{ route('clientes.store') }}" class="btn btn-info">Crear nuevo cliente</a>
</div>
</div>
@endsection
@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')
<div>
    <h1> Clientes </h1>
    <table>
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
                        <a href="{{ route('cliente.view', $cliente['id']) }}">Ver</a>
                        <a href="{{ route('cliente.delete', $cliente['id']) }}">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('productos.index') }}">Productos</a>
    <a href="{{ route('ventas.index') }}">Ventas</a>
    <a href="{{ route('clientes.store') }}">Crear nuevo cliente</a>
</div>
@endsection
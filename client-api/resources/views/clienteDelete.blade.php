@extends('layout/plantilla')
@section('tituloPagina', 'Clientes index')
@section('contenido')
<div class="card">
<div class="header">
 Eliminar un cliente
</div>
<div class="card-body">
<p class="card-text">
<div class="alert alert-danger" role="alert">
    Estas seguro de querer eliminar este registro!!!
    <table class="table table-sm table-hover">
     <thead>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Email</th>
     </thead>
    <tbody>
      <tr>
        <td>{{ $cliente -> nombre}}</td>
        <td>{{ $cliente -> telefono}}</td>
        <td>{{ $cliente -> direccion }}</td>
        <td>{{ $cliente -> email }}</td>
      </tr>
    </tbody>
    </table>
    <hr>
    <form action="{{ route('cliente.delete'), $cliente ->id }}" method="POST">
    @csrf
    @method('DELETE')
    <a href="{{ route(clientes.index) }}" class="btn btn-info">Regresar</a>
    <button class="btn btn-danger">Eliminar</button>
    </form>
</div>
</p>
</div>
</div>
@endsection
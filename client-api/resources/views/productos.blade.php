<h1> Productos </h1>
<table>
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
                <td>{{ $producto['imagen'] }}</td>
                <td>{{ $producto['categoria'] }}</td>
                <td>{{ $producto['costo'] }}</td>
                <td>
                    <a href="{{ route('productos.view', $producto['id']) }}">Ver</a>
                    <a href="{{ route('productos.delete', $producto['id']) }}">Borrar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('productos.store') }}">Crear nuevo producto</a>

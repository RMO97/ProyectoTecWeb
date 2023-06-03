<h1>Ventas</h1>
<table>
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Impuesto</th>
            <th>Total de venta</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $venta)
            <tr>
                <td>{{ $venta['cliente_id'] }}</td>
                <td>{{ $venta['producto_id'] }}</td>
                <td>{{ $venta['impuesto'] }}</td>
                <td>{{ $venta['total_venta'] }}</td>
                
                <td>
                    <a href="{{ route('ventas.view', $venta['id']) }}">Ver</a>
                    <a href="{{ route('ventas.delete', $venta['id']) }}">Borrar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('ventas.store') }}">Registrar venta</a>
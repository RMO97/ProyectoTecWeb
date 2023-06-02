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
                <td>{{ $cliente[nombre] }}</td>
                <td>{{ $cliente[telefono] }}</td>
                <td>{{ $cliente[direccion] }}</td>
                <td>{{ $cliente[email] }}</td>
                
                <td>
                    <a href="{{ 'cliente.view', $cliente['id'] }}">Ver</a>
                    <a href="{{ 'cliente.delete', $cliente['id'] }}">Borrar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<h1> Personas </h1>
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
        @foreach ($data as $persona)
            <tr>
                <td>{{ $persona[nombre] }}</td>
                <td>{{ $persona[telefono] }}</td>
                <td>{{ $persona[direccion] }}</td>
                <td>{{ $persona[email] }}</td>
                
                <td>
                    <a href="{{ 'persona.view', $persona['id'] }}">Ver</a>
                    <a href="{{ 'persona.delete', $persona['id'] }}">Borrar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
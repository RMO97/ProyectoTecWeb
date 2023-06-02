<h1>Nueva Persona</h1>
<form action="{{ route('personas.update') }}"method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $persona['id'] }}">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"  value="{{ $persona['nombre'] }}">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{ $persona['telefono'] }}">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" value="{{ $persona['direccion'] }}">
    <label for="email">Email</label>
    <input type="text" name="email" id="email"  value="{{ $persona['email'] }}">
    
    <button type="submit">Guardar</button>
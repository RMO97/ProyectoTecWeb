<h1>Nueva Persona</h1>
<form action="{{ route('personas.store') }}"method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    
    <button type="submit">Guardar</button>
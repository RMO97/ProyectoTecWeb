<h1>Nuevo Producto</h1>
<form action="{{ route('productos.store') }}"method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="stock">Existencia</label>
    <input type="text" name="stock" id="stock">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion">
    <label for="imagen">Imagen</label>
    <input type="text" name="imagen" id="imagen">
    <label for="categoria">Categoria</label>
    <input type="text" name="categoria" id="categoria">
    <label for="costo">Costo</label>
    <input type="text" name="costo" id="costo">
    
    <button type="submit">Guardar</button>
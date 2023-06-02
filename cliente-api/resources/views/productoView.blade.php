<h1>Nuevo Producto</h1>
<form action="{{ route('productos.update') }}"method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $producto['id'] }}">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"  value="{{ $producto['nombre'] }}">
    <label for="stock">Existencia</label>
    <input type="text" name="stock" id="stock" value="{{ $producto['stock'] }}">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion" value="{{ $producto['descripcion'] }}">
    <label for="imagen">Imagen</label>
    <input type="text" name="imagen" id="imagen"  value="{{ $producto['imagen'] }}">
    <label for="categoria">Categoria</label>
    <input type="text" name="categoria" id="categoria" value="{{ $producto['categoria'] }}">
    <label for="costo">Costo</label>
    <input type="text" name="costo" id="costo" value="{{ $producto['costo'] }}">
    
    <button type="submit">Guardar</button>
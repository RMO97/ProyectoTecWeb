<h1>Nueva Venta</h1>
<form action="{{ route('clientes.update') }}"method="POST">
    @csrf
    <label for="cliente_id">ID cliente</label>
    <input type="text" name="cliente_id" id="cliente_id"  value="{{ $venta['cliente_id'] }}">
    <label for="producto_id">ID producto</label>
    <input type="text" name="producto_id" id="producto_id" value="{{ $venta['producto_id'] }}">
    <label for="total_venta">Venta Total</label>
    <input type="text" name="total_venta" id="total_venta" value="{{ $venta['total_venta'] }}">
    <label for="impuesto">Impuesto</label>
    <input type="text" name="impuesto" id="impuesto"  value="{{ $venta['impuesto'] }}">
    
    <button type="submit">Guardar</button>
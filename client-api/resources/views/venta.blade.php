<div class="box box-info padding-1">
    <div class="box-body">
     <div class="form-group">
       {{ Form::label('cliente_id') }}
       {{ Form::select('cliente_id', $cliente, $venta->cliente_id,['class']->'form-control'. ($errors->has('cliente_id') ? ' is-invaild'))}}
       {!! $error->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
     </div>
     <div class="form-group">
        {{ Form::label('producto_id') }}
        {{ Form::select('producto_id', $producto, $venta->producto_id,['class']->'form-control'. ($errors->has('producto_id') ? ' is-invaild'))}}
        {!! $error->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
       {{ Form::label('total_venta') }}
       {{ Form::text('total_venta', $venta->total_venta . ($errors-has(total_venta) ? is-invaild)) }}
       {!! $error->first('total_venta', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label('impuesto') }}
        {{ Form::text('impuesto', $venta->impuesto . ($errors-has(impuesto) ? is-invaild)) }}
        {!! $error->first('impuesto', '<div class="invalid-feedback">:message</div>') !!}
       </div>

    </div>
    <div class="box-footer mt20">
      <button type="submit" class="btn btn primary">Submit</button>
    </div>
</div>
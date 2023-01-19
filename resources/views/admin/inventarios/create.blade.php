@extends('adminlte::page')

@section('title', 'Crear Inventario')

@section('content_header')
    <h1>Crear Inventario</h1>
@stop

@section('content')
<div class="card">
    <div class="card body p-3">
        {!! Form::open(['route' => 'admin.inventarios.store']) !!}
            <div class="form-group">
                {!! Form::label('fecha', 'Fe    cha') !!}
                {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
                {!! Form::label('movimiento', 'Movimiento') !!}
                {!! Form::select('movimiento', $movimiento, 'Entrada', ['class' => 'form-control']) !!}
                {!! Form::label('concepto', 'Concepto') !!}
                {!! Form::select('concepto', $concepto, 'Remisión', ['class' => 'form-control']) !!}
                {!! Form::label('proveedor', 'Proveedor') !!}
                {!! Form::number('proveedor', null, ['class' => 'form-control']) !!}
                {!! Form::label('almacen', 'Almacen') !!}
                {!! Form::text('almacen', null, ['class' => 'form-control']) !!}
                {!! Form::label('cod_producto', 'Código del Producto') !!}
                {!! Form::text('cod_producto', null, ['class' => 'form-control']) !!}
                {!! Form::label('des_producto', 'Descripción del Producto') !!}
                {!! Form::text('des_producto', null, ['class' => 'form-control']) !!}
                {!! Form::label('cat_producto', 'Categoría del Producto') !!}
                {!! Form::text('cat_producto', null, ['class' => 'form-control']) !!}
                {!! Form::label('stock', 'Stock') !!}
                {!! Form::number('stock', null, ['class' => 'form-control']) !!}
                {!! Form::label('ubicacion', 'Ubicación del Producto') !!}
                {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
                {!! Form::label('observaciones', 'Observaciones') !!}
                {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
            </div>
                {!! Form::submit('Crear Inventario', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
<div class="card">
    <div class="card body p-3">
        {!! Form::model($producto, ['route' => ['admin.productos.update', $producto], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('codigo', 'Código') !!}
            {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Código del Producto']) !!}
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripción del Producto']) !!}
            {!! Form::label('precio', 'Precio') !!}
            {!! Form::number('precio', null, ['class' => 'form-control', 'placeholder' => 'Precio del Producto']) !!}
            {!! Form::label('moneda', 'Moneda') !!}
            {!! Form::select('moneda', $moneda, 'MXN', ['class' => 'form-control']) !!}
            {!! Form::label('maximo', 'Existencia Máxima') !!}
            {!! Form::number('maximo', null, ['class' => 'form-control', 'placeholder' => 'Existencia Máxima']) !!}
            {!! Form::label('minimo', 'Existenacia Mínima') !!}
            {!! Form::number('minimo', null, ['class' => 'form-control', 'placeholder' => 'Existencia Minima']) !!}
            {!! Form::label('sat', 'Código SAT') !!}
            {!! Form::text('sat', null, ['class' => 'form-control']) !!}
            {!! Form::label('categoria', 'Categoría') !!}
            {!! Form::text('categoria', null, ['class' => 'form-control', 'placeholder' => 'Categoría del Producto']) !!}
            {!! Form::label('observaciones', 'Observaciones') !!}
            {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
            {!! Form::label('filtro1', 'Filtro 1') !!}
            {!! Form::text('filtro1', null, ['class' => 'form-control', 'placeholder' => 'Filtro 1 del Producto']) !!}
            {!! Form::label('filtro2', 'Filtro 2') !!}
            {!! Form::text('filtro2', null, ['class' => 'form-control', 'placeholder' => 'Filtro 2 del Producto']) !!}
        </div>
            {!! Form::submit('Editar Producto', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
</div>
@stop

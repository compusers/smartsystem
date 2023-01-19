@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
<div class="card">
    <div class="card body p-3">
        {!! Form::model($cliente, ['route' => ['admin.clientes.update', $cliente], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Cliente']) !!}
                {!! Form::label('telefono', 'Teléfono') !!}
                {!! Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => 'Teléfono del Cliente']) !!}
                {!! Form::label('encargado', 'Encargado') !!}
                {!! Form::text('encargado', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Encargado']) !!}
                {!! Form::label('tel_encargado', 'Teléfono del Encargado') !!}
                {!! Form::number('tel_encargado', null, ['class' => 'form-control', 'placeholder' => 'Teléfono del Encargado']) !!}
                {!! Form::label('ejecutivo', 'Ejecutivo') !!}
                {!! Form::text('ejecutivo', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Ejecutivo']) !!}
                {!! Form::label('unidades', 'Unidades') !!}
                {!! Form::text('unidades', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Ejecutivo']) !!}
                {!! Form::label('observaciones', 'Observaciones') !!}
                {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Editar Cliente', ['class' => 'btn btn-success ']) !!}
        {!! Form::close() !!}
@stop
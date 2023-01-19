@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Crear Cliente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card body p-3">
            {!! Form::open(['route' => 'admin.clientes.store', 'autocomplete' => 'off']) !!}
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
                {!! Form::submit('Crear Cliente', ['class' => 'btn btn-success ']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

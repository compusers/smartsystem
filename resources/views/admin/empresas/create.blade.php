@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Crear Empresa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card body p-3">
            {!! Form::open(['route' => 'admin.empresas.store']) !!}
                <div class="form-group">
                    {!! Form::label('nombre_empresa', 'Empresa') !!}
                    {!! Form::text('nombre_empresa', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Empresa']) !!}
                    {!! Form::label('nombre_ruta', 'Ruta') !!}
                    {!! Form::text('nombre_ruta', null, ['class' => 'form-control', 'placeholder' => 'Ruta']) !!}
                    {!! Form::label('estado', 'Estado') !!}
                    {!! Form::select('estado', $estado, 'Jalisco', ['class' => 'form-control']) !!}
                    {!! Form::label('municipio', 'Municipio') !!}
                    {!! Form::select('municipio', $municipio, 'Guadalajara', ['class' => 'form-control']) !!}
                    {!! Form::label('observaciones', 'Observaciones') !!}
                    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
                    {!! Form::label('encargado', 'Encargado') !!}
                    {!! Form::text('encargado', null, ['class' => 'form-control']) !!}
                    {!! Form::label('tel_encargado', 'Teléfono del Encargado') !!}
                    {!! Form::number('tel_encargado', null, ['class' => 'form-control']) !!}
                </div>
                    {!! Form::submit('Crear Empresa', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

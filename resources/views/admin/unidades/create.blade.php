@extends('adminlte::page')

@section('title', 'Crear Unidad')

@section('content_header')
    <h1>Crear Unidad</h1>
@stop

@section('content')
    <div class="card">
        <div class="card body p-3">
            {!! Form::open(['route' => 'admin.unidades.store']) !!}
            <div class="form-group">
                {!! Form::label('nombre_cliente', 'Cliente') !!}
                {!! Form::text('nombre_cliente', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Cliente']) !!}
                {!! Form::label('telefono_cliente', 'Teléfono del Cliente') !!}
                {!! Form::number('telefono_cliente', null, ['class' => 'form-control']) !!}
                {!! Form::label('encargado_cliente', 'Encargado') !!}
                {!! Form::text('encargado_cliente', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Encargado']) !!}
                {!! Form::label('tel_enc_cliente', 'Teléfono del Encargado') !!}
                {!! Form::number('tel_enc_cliente', null, ['class' => 'form-control']) !!}
                {!! Form::label('ejecutivo_cliente', 'Ejecutivo') !!}
                {!! Form::number('ejecutivo_cliente', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Ejecutivo']) !!}
                {!! Form::label('empresa', 'Empresa') !!}
                {!! Form::number('empresa', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Empresa']) !!}
                {!! Form::label('ruta_empresa', 'Ruta') !!}
                {!! Form::number('ruta_empresa', null, ['class' => 'form-control', 'placeholder' => 'Ruta']) !!}
                {!! Form::label('estado_empresa', 'Estado') !!}
                {!! Form::text('estado_empresa', null, ['class' => 'form-control']) !!}
                {!! Form::label('municipio_empresa', 'Municipio') !!}
                {!! Form::text('municipio_empresa', null, ['class' => 'form-control']) !!}
                {!! Form::label('unidad', 'Unidad') !!}
                {!! Form::number('unidad', null, ['class' => 'form-control']) !!}
                {!! Form::label('marca', 'Marca') !!}
                {!! Form::number('marca', null, ['class' => 'form-control']) !!}
                {!! Form::label('modelo', 'Modelo') !!}
                {!! Form::number('modelo', null, ['class' => 'form-control']) !!}
                {!! Form::label('observaciones', 'Observaciones') !!}
                {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'placeholder' => 'Onservaciones']) !!}
            </div>
            {!! Form::submit('Crear Unidad', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

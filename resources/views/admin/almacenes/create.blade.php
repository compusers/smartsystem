@extends('adminlte::page')

@section('title', 'Crear un Almacén')

@section('content_header')
    <h1>Crear un Almacén</h1>
@stop

@section('content')
<div class="card">
    <div class="card body p-3">
        {!! Form::open(['route' => 'admin.almacenes.store']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Almacén']) !!}
                {!! Form::label('observaciones', 'Observaciones') !!}
                {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
                {!! Form::label('filtro1', 'Filtro 1') !!}
                {!! Form::text('filtro1', null, ['class' => 'form-control', 'placeholder' => 'Filtro 1 del Producto']) !!}
                {!! Form::label('filtro2', 'Filtro 2') !!}
                {!! Form::text('filtro2', null, ['class' => 'form-control', 'placeholder' => 'Filtro 2 del Producto']) !!}
            </div>
                {!! Form::submit('Crear un Almacén', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

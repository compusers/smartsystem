@extends('adminlte::page')

@section('title', 'Nuevo Usuario')

@section('content_header')
    <h1>Nuevo Usuario</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-info">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card p-3">
            {!! Form::open(['route' => 'admin.users.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario']) !!}
                {!! Form::label('email ', 'Correo Electrónico') !!}
                {!! Form::email('email ', null, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico']) !!}
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            {{-- {!! Form::submit('Crear Usuario', ['class' => 'btn btn-primary']) !!} --}}
            {!! Form::close() !!}
    </div>
@stop

@section('css')
@stop

@section('js')
@stop

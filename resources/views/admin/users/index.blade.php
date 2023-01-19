@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <a class="btn btn-success btn-sm float-right" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Nuevo
        Usuario</a>
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

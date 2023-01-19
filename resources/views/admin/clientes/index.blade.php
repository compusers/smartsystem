@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    {{-- <a class="btn btn-success btn-sm float-right" href="{{route('admin.clientes.create')}}"><i class="fas fa-user-plus"></i> Nuevo Cliente</a> --}}
    <h1>Clientes</h1>
@stop

@section('content')
    @livewire('admin.clientes-index')
@stop

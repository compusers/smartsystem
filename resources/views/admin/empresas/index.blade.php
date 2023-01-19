@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')
    <a class="btn btn-success btn-sm float-right" href="{{ route('admin.empresas.create') }}"><i
            class="fas fa-hospital-user"></i> Nueva Empresa</a>
    <h1>Empresas</h1>
@stop
@section('content')
    @if (session('destroy'))
        <div class="alert alert-info">
            <strong>{{ session('destroy') }}</strong>
        </div>
    @endif
    <div class="card">
        {{-- <div class="card-header">
            <input wire:model="search" class="form-control"
                placeholder="Ingrese el nombre de la Empresa a buscar">
        </div> --}}
        @if ($empresas->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Empresa</th>
                        <th>Ruta</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Observaciones</th>
                        <th>Encargado</th>
                        <th>Tel. Encargado</th>
                        <th colspan="2">Funciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresas as $empresa)
                        <tr>
                            <td>{{ $empresa->nombre_empresa }}</td>
                            <td>{{ $empresa->nombre_ruta }}</td>
                            <td>{{ $empresa->estado }}</td>
                            <td>{{ $empresa->municipio }}</td>
                            <td>{{ $empresa->observaciones }}</td>
                            <td>{{ $empresa->encargado }}</td>
                            <td>{{ $empresa->tel_encargado }}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.empresas.edit', $empresa) }}"><i class="fas fa-edit"></i></a></td>
                            <td width="10px">
                                <form action="{{ route('admin.empresas.destroy', $empresa) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm"type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{-- {{$empresas->links()}} --}}
        </div>
    @else
        <div class="card-body">
            <strong><p style="color:red">No existen empresas</p></strong>
        </div>
    @endif
    </div>
@stop

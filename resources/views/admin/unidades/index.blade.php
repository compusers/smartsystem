@extends('adminlte::page')

@section('title', 'Unidades')

@section('content_header')
    <a class="btn btn-success btn-sm float-right" href="{{ route('admin.unidades.create') }}"><i class="fas fa-truck"></i>Nueva
        Unidad</a>
    <h1>Unidades</h1>
@stop

@section('content')
    @if (session('destroy'))
        <div class="alert alert-info">
            <strong>{{ session('destroy') }}</strong>
        </div>
    @endif
    <div class="card">
        {{-- <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de la Empresa a buscar">
        </div> --}}
        @if ($unidades->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><b>Nombre del Cliente</b></th>
                            <th><b>Teléfono del Cliente</b></th>
                            <th><b>Encargado</b></th>
                            <th><b>Teléfono del Encargado</b></th>
                            <th><b>Ejecutivo</b></th>
                            <th><b>Empresa</b></th>
                            <th><b>Ruta</b></th>
                            <th><b>Estado</b></th>
                            <th><b>Municipio</b></th>
                            <th><b>Unidad</b></th>
                            <th><b>Marca</b></th>
                            <th><b>Modelo</b></th>
                            <th><b>Observaciones</b></th>
                            <th colspan="2"><b>Funciones</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($unidades as $unidad)
                            <tr>
                                <td>{{ $unidad->nombre_cliente }}</td>
                                <td>{{ $unidad->telefono_cliente }}</td>
                                <td>{{ $unidad->encargado_cliente }}</td>
                                <td>{{ $unidad->tel_enc_cliente }}</td>
                                <td>{{ $unidad->ejecutivo_cliente }}</td>
                                <td>{{ $unidad->empresa }}</td>
                                <td>{{ $unidad->ruta_empresa }}</td>
                                <td>{{ $unidad->estado_empresa }}</td>
                                <td>{{ $unidad->municipio_empresa }}</td>
                                <td>{{ $unidad->unidad }}</td>
                                <td>{{ $unidad->marca }}</td>
                                <td>{{ $unidad->modelo }}</td>
                                <td>{{ $unidad->observaciones }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.unidades.edit', $unidad) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.unidades.destroy', $unidad) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{-- {{$unidades->links()}} --}}
            </div>
        @else
            <div class="card-body">
                <strong>
                    <p style="color:red">No existen Unidades</p>
                </strong>
            </div>
        @endif
    </div>
@stop

@extends('adminlte::page')

@section('title', 'Almacén')

@section('content_header')
    <a class="btn btn-success btn-sm float-right" href="{{ route('admin.almacenes.create') }}"><i
            class="fas fa-hospital-user"></i> Nuevo Almacén</a>
    <h1>Almacén</h1>
@stop
@section('content')
    @if (session('destroy'))
        <div class="alert alert-info">
            <strong>{{ session('destroy') }}</strong>
        </div>
    @endif
    <div class="card">
        @if ($almacenes->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td><b>Nombre</b></td>
                            <td><b>Observaciones</b></td>
                            <td><b>Filtro 1</b></td>
                            <td><b>Filtro 2</b></td>
                            <td colspan="2"><b>Funciones</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($almacenes as $almacen)
                            <tr>
                                <td>{{ $almacen->nombre }}</td>
                                <td>{{ $almacen->observaciones }}</td>
                                <td>{{ $almacen->filtro1 }}</td>
                                <td>{{ $almacen->filtro2 }}</td>
                                <td width="10px"><a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.almacenes.edit', $almacen) }}"><i
                                        class="fas fa-edit"></i></a></td>
                            <td width="10px">
                                <form action="{{ route('admin.almacenes.destroy', $almacen) }}" method="POST">
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
                {{-- {{$productos->links()}} --}}
            </div>
        @else
            <div class="card-body">
                <strong>
                    <p style="color:red">No existen Almacenes</p>
                </strong>
            </div>
        @endif
    </div>
@stop

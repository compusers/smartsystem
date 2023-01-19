@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <a class="btn btn-success btn-sm float-right" href="{{ route('admin.inventarios.create') }}"><i
            class="fas fa-hospital-user"></i> Inventario</a>
    <h1>Inventario</h1>
@stop
@section('content')
    @if (session('destroy'))
        <div class="alert alert-info">
            <strong>{{ session('destroy') }}</strong>
        </div>
    @endif
    <div class="card">
        @if ($inventarios->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td><b>Fecha</b></td>
                            <td><b>Movimiento</b></td>
                            <td><b>Concepto</b></td>
                            <td><b>Proveedor</b></td>
                            <td><b>Almacen</b></td>
                            <td><b>Código del Producto</b></td>
                            <td><b>Descripción del Producto</b></td>
                            <td><b>Categoría</b></td>
                            <td><b>Stock</b></td>
                            <td><b>Ubicación</b></td>
                            <td><b>Observaciones</b></td>
                            <td colspan="2"><b>Funciones</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventarios as $inventario)
                            <tr>
                                <td>{{ $inventario->fecha}}</td>
                                <td>{{ $inventario->movimiento }}</td>
                                <td>{{ $inventario->concepto }}</td>
                                <td>{{ $inventario->proveedor }}</td>
                                <td>{{ $inventario->almacen}}</td>
                                <td>{{ $inventario->cod_producto }}</td>
                                <td>{{ $inventario->des_producto }}</td>
                                <td>{{ $inventario->cat_producto }}</td>
                                <td>{{ $inventario->stock }}</td>
                                <td>{{ $inventario->ubicacion }}</td>
                                <td>{{ $inventario->observaciones }}</td>
                                <td width="10px"><a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.inventarios.edit', $inventario) }}"><i
                                        class="fas fa-edit"></i></a></td>
                            <td width="10px">
                                <form action="{{ route('admin.inventarios.destroy', $inventario) }}" method="POST">
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
                    <p style="color:red">No existen Productos en el Inventario</p>
                </strong>
            </div>
        @endif
    </div>
@stop

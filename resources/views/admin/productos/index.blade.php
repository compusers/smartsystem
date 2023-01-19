@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <a class="btn btn-success btn-sm float-right" href="{{ route('admin.productos.create') }}"><i
            class="fas fa-hospital-user"></i> Nuevo Producto</a>
    <h1>Productos</h1>
@stop
@section('content')
    @if (session('destroy'))
        <div class="alert alert-info">
            <strong>{{ session('destroy') }}</strong>
        </div>
    @endif
    <div class="card">
        @if ($productos->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Código</td>
                            <td>Descripción</td>
                            <td>Precio</td>
                            <td>Moneda</td>
                            <td>Máximo</td>
                            <td>Mínimo</td>
                            <td>Código SAT</td>
                            <td>Categoría</td>
                            <td>Observaciones</td>
                            <td>Filtro 1</td>
                            <td>Filtro 2</td>
                            <td colspan="2">Funciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->codigo }}</td>
                                <td>{{ $producto->descripcion }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{ $producto->moneda }}</td>
                                <td>{{ $producto->maximo }}</td>
                                <td>{{ $producto->minimo }}</td>
                                <td>{{ $producto->sat }}</td>
                                <td>{{ $producto->categoria }}</td>
                                <td>{{ $producto->observaciones }}</td>
                                <td>{{ $producto->filtro1 }}</td>
                                <td>{{ $producto->filtro2 }}</td>
                                <td width="10px"><a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.productos.edit', $producto) }}"><i
                                            class="fas fa-edit"></i></a></td>
                                <td width="10px">
                                    <form action="{{ route('admin.productos.destroy', $producto) }}" method="POST">
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
                    <p style="color:red">No existen prouctos</p>
                </strong>
            </div>
        @endif
    </div>
@stop

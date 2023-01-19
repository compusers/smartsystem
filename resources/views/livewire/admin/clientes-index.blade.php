<div>
    @if (session('destroy'))
        <div class="alert alert-info">
            <strong>{{ session('destroy') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control"
                placeholder="Ingrese el nombre o telefono del cliente a buscar">
        </div>
        @if ($clientes->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Encargado</th>
                            <th>Tel. Encargado</th>
                            <th>Ejecutivo</th>
                            <th>Unidades</th>
                            <th>Observaciones</th>
                            <th colspan="2">Funciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->encargado }}</td>
                                <td>{{ $cliente->tel_encargado }}</td>
                                <td>{{ $cliente->ejecutivo }}</td>
                                <td>{{ $cliente->unidades }}</td>
                                <td>{{ $cliente->observaciones }}</td>
                                <td width=10px><a class="btn btn-primary btn-sm"
                                        href="{{route('admin.clientes.edit', $cliente)}}"><i
                                            class="fas fa-user-edit"></i></a></td>
                                <td width=10px>
                                    <form action="{{route('admin.clientes.destroy', $cliente)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit"><i
                                                class="fas fa-user-times"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$clientes->links()}}
            </div>
        @else
            <div class="card-body">
                <strong><p style="color:red">No existen clientes</p></strong>
            </div>
        @endif
</div>

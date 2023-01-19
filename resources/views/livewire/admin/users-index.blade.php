<div>
    @if (session('destroy'))
        <div class="alert alert-danger">
            <strong>{{ session('destroy') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo del usuario a buscar">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th colspan="2">Funciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width=10px>
                                    <a class="btn btn-success" href="{{ route('admin.users.edit', $user) }}"><i
                                            class="fas fa-user-shield"></i></a>
                                </td>
                                <td width=10px>
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"type="submit"><i
                                                class="fas fa-user-slash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="car-body">
                <strong>No existen coincidencias</strong>
            </div>
        @endif
    </div>
</div>

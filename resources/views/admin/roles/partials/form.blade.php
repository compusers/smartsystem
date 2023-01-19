<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Rol']) !!}
    @error('name')
        <small class="text-danger">
            {{$message}}
        </small>
    @enderror
</div>

<h2 class="h3">Permisos</h2>
@foreach ($permissions as $permission)
    <diV>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{$permission->description}}
        </label>
    </diV>
@endforeach

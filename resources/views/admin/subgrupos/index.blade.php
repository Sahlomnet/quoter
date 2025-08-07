@extends('adminlte::page')

@section('title', 'Subgrupos')

@section('content_header')
    <h1>Listado de Subgrupos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('subgrupos.create') }}" class="btn btn-primary mb-3">Agregar Subgrupo</a>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id Grupo</th>
                        <th>Clave</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subgroups as $subgroup)
                        <tr>
                            <td>{{ $subgroup->group_id }}</td>
                            <td>{{ $subgroup->clave }}</td>
                            <td>{{ $subgroup->descripcion }}</td>
                            <td>
                                <a href="{{ route('subgrupos.edit', $subgroup) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('subgrupos.destroy', $subgroup) }}" method="POST" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop

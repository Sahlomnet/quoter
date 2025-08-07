@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
    <h1>Listado de Marcas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('marcas.create') }}" class="btn btn-primary mb-3">Agregar Marca</a>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($manufacturers as $manufacturer)
                        <tr>
                            <td>{{ $manufacturer->clave }}</td>
                            <td>{{ $manufacturer->descripcion }}</td>
                            <td>
                                <a href="{{ route('marcas.edit', $manufacturer) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('marcas.destroy', $manufacturer) }}" method="POST" style="display:inline;">
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

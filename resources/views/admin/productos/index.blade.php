@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Listado de Productos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Agregar Producto</a>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Clave CVA</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($manufacturers as $manufacturer)
                        <tr>
                            <td>{{ $manufacturer->clave2 }}</td>
                            <td>{{ $manufacturer->name }}</td>
                            <td>
                                <a href="{{ route('productos.edit', $manufacturer) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('productos.destroy', $manufacturer) }}" method="POST" style="display:inline;">
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

@extends('adminlte::page')

@section('title', 'Cotizaciones')

@section('content_header')
    <h1>Cotizaciones</h1>
@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('cotizaciones.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Nueva Cotización
    </a>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-bordered table-striped mb-0">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Usuario</th>
                        <th>Observaciones</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($quotes as $quote)
                        <tr>
                            <td>{{ $quote->folio }}</td>
                            <td>{{ $quote->client->razon_social ?? 'Sin cliente' }}</td>
                            <td>{{ \Carbon\Carbon::parse($quote->fecha)->format('d/m/Y') }}</td>
                            <td>{{ $quote->user->name ?? 'Usuario desconocido' }}</td>
                            <td>{{ Str::limit($quote->observaciones, 50) }}</td>
                            <td>
                                <a href="{{ route('cotizaciones.show', $quote) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('cotizaciones.edit', $quote) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('cotizaciones.destroy', $quote) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que deseas eliminar esta cotización?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No hay cotizaciones registradas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@stop

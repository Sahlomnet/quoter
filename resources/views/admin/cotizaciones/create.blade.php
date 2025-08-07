@extends('adminlte::page')

@section('title', 'Nueva Cotización')

@section('content_header')
    <h1>Crear Cotización</h1>
@stop

@section('content')
    <form action="{{ route('cotizaciones.store') }}" method="POST">
        @csrf

        <div class="card">
            <div class="card-body">

                <div class="mb-3">
                    <label for="client_id" class="form-label">Cliente</label>
                    <select name="client_id" id="client_id" class="form-control" required>
                        <option value="">-- Selecciona un cliente --</option>
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->razon_social }}</option>
                        @endforeach
                    </select>
                    @error('client_id') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha', now()->format('Y-m-d')) }}" required>
                    @error('fecha') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <textarea name="observaciones" id="observaciones" class="form-control" rows="4">{{ old('observaciones') }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Guardar Cotización</button>
                <a href="{{ route('cotizaciones.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
@stop

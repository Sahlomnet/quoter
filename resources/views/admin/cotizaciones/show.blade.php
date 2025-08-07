@extends('adminlte::page')

@section('title', 'Cotización ' . $quote->folio)

@section('content_header')
    <h1>Cotización {{ $quote->folio }}</h1>
@stop

@section('content')

    <a href="{{ route('cotizaciones.index') }}" class="btn btn-secondary mb-3">
        <i class="fas fa-arrow-left"></i> Volver a la lista
    </a>

    <div class="card">
        <div class="card-header">
            <strong>Información general</strong>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <h5>Cliente</h5>
                    <p>
                        <strong>Razón social:</strong> {{ $quote->client->razon_social ?? 'N/A' }}<br>
                        <strong>RFC:</strong> {{ $quote->client->rfc ?? 'N/A' }}<br>
                        <strong>Contacto:</strong> {{ $quote->client->contact_name ?? '-' }}<br>
                        <strong>Email:</strong> {{ $quote->client->email ?? '-' }}<br>
                        <strong>Teléfono:</strong> {{ $quote->client->phone ?? '-' }}<br>
                    </p>
                </div>

                <div class="col-md-6">
                    <h5>Cotización</h5>
                    <p>
                        <strong>Folio:</strong> {{ $quote->folio }}<br>
                        <strong>Fecha:</strong> {{ \Carbon\Carbon::parse($quote->fecha)->format('d/m/Y') }}<br>
                        <strong>Usuario:</strong> {{ $quote->user->name ?? 'N/A' }}<br>
                        <strong>Observaciones:</strong> <br>{{ $quote->observaciones ?? '-' }}
                    </p>
                </div>
            </div>

        </div>
    </div>

    {{-- Productos cotizados (se agregará más adelante) --}}
    <div class="card mt-3">
        <div class="card-header">
            <strong>Productos cotizados</strong>
        </div>
        <div class="card-body">
            <p>Aquí aparecerán los productos una vez que estén implementados.</p>
        </div>
    </div>

@stop

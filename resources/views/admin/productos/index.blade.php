@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
<div class="card mb-3">
    <div class="card-body">
        <form method="GET" action="{{ route('productos.index') }}" class="form-inline flex-wrap">

            {{-- Buscador --}}
            <div class="form-group mr-2 mb-2">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nombre o código"
                       value="{{ request('search') }}">
            </div>

            {{-- Filtro por marca --}}
            <div class="form-group mr-2 mb-2">
                <select name="manufacturer_id" class="form-control">
                    <option value="">-- Todas las marcas --</option>
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{ $manufacturer->id }}"
                            {{ request('manufacturer_id') == $manufacturer->id ? 'selected' : '' }}>
                            {{ $manufacturer->descripcion }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Rango de precios --}}
            <div class="form-group mr-2 mb-2">
                <input type="number" name="price_min" class="form-control" placeholder="Precio mín."
                       value="{{ request('price_min') }}">
            </div>
            <div class="form-group mr-2 mb-2">
                <input type="number" name="price_max" class="form-control" placeholder="Precio máx."
                       value="{{ request('price_max') }}">
            </div>

            {{-- Ordenamiento --}}
            <div class="form-group mr-2 mb-2">
                <select name="sort" class="form-control">
                    <option value="">-- Ordenar por --</option>
                    <option value="price_asc" {{ request('sort')=='price_asc' ? 'selected' : '' }}>Precio: Menor a Mayor</option>
                    <option value="price_desc" {{ request('sort')=='price_desc' ? 'selected' : '' }}>Precio: Mayor a Menor</option>
                    <option value="name_asc" {{ request('sort')=='name_asc' ? 'selected' : '' }}>Nombre: A-Z</option>
                    <option value="name_desc" {{ request('sort')=='name_desc' ? 'selected' : '' }}>Nombre: Z-A</option>
                </select>
            </div>

            {{-- Botones --}}
            <div class="form-group mb-2">
                <button type="submit" class="btn btn-primary mr-2">Aplicar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Limpiar</a>
            </div>

        </form>
    </div>
</div>

{{-- Tarjetas de productos --}}
<div class="row">
    @forelse($products as $product)
        <div class="col-md-3">
            <div class="card h-100">
                <img src="{{ $product->imagen_url }}" 
                     class="card-img-top" 
                     alt="{{ $product->descripcion }}" 
                     style="height: 200px; object-fit: cover;"
                     onerror="this.onerror=null;this.src='{{ asset('img/noimage.png') }}';">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ Str::limit($product->clave_cva, 40) }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($product->descripcion, 60) }}</p>
                    <p class="text-bold text-success">${{ number_format($product->precio, 2) }}</p>
                    <a href="#" class="btn btn-primary mt-auto">Ver más</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <p class="text-center">No se encontraron productos con esos filtros.</p>
        </div>
    @endforelse
</div>

{{-- Paginación --}}
<div class="mt-3">
    {{ $products->appends(request()->input())->links() }}
</div>
@stop
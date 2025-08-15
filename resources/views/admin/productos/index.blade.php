{{-- Si usas AdminLTE --}}
@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
<div class="row mb-3">
    <div class="col-md-4">
        <label>Marca</label>
        <select id="marcaSelect" class="form-control">
            <option value="">Seleccione una marca</option>
            @foreach($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->descripcion }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4">
        <label>Grupo</label>
        <select id="grupoSelect" class="form-control" disabled>
            <option value="">Seleccione un grupo</option>
        </select>
    </div>

    <div class="col-md-4">
        <label>Subgrupo</label>
        <select id="subgrupoSelect" class="form-control" disabled>
            <option value="">Seleccione un subgrupo</option>
        </select>
    </div>
</div>

<div class="row" id="productosContainer">
    @foreach($productos as $product)
        <div class="col-md-3">
            <div class="card mb-3 h-100">
                <img src="{{ $product->imagen_url ?: asset('images/placeholder.jpg') }}"
                     class="card-img-top"
                     alt="{{ $product->descripcion }}"
                     style="height:200px;object-fit:cover"
                     onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';">
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title">{{ $product->descripcion }}</h6>
                    <p class="text-success mt-auto mb-0">${{ number_format($product->precio, 2) }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-2">
    {{ $productos->links() }}
</div>
@stop

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const marcaSelect    = document.getElementById('marcaSelect');
    const grupoSelect    = document.getElementById('grupoSelect');
    const subgrupoSelect = document.getElementById('subgrupoSelect');

    // URLs base seguras (generadas por Blade con el prefijo /admin)
    const gruposBaseUrl    = @json(url('admin/productos/get-grupos'));      // -> /admin/productos/get-grupos
    const subgruposBaseUrl = @json(url('admin/productos/get-subgrupos'));   // -> /admin/productos/get-subgrupos

    marcaSelect.addEventListener('change', async function () {
        const marcaId = this.value;

        // Reset dependientes
        grupoSelect.innerHTML = '<option value="">Seleccione un grupo</option>';
        subgrupoSelect.innerHTML = '<option value="">Seleccione un subgrupo</option>';
        grupoSelect.disabled = true;
        subgrupoSelect.disabled = true;

        if (!marcaId) return;

        try {
            const resp = await fetch(`${gruposBaseUrl}/${marcaId}`, { credentials: 'same-origin' });
            if (!resp.ok) throw new Error('Error cargando grupos');

            const grupos = await resp.json();
            grupos.forEach(g => {
                const opt = document.createElement('option');
                opt.value = g.id;
                opt.textContent = g.descripcion;
                grupoSelect.appendChild(opt);
            });

            grupoSelect.disabled = grupos.length === 0;
        } catch (e) {
            console.error(e);
            alert('No se pudieron cargar los grupos.');
        }
    });

    grupoSelect.addEventListener('change', async function () {
        const grupoId = this.value;

        subgrupoSelect.innerHTML = '<option value="">Seleccione un subgrupo</option>';
        subgrupoSelect.disabled = true;
        if (!grupoId) return;

        try {
            const resp = await fetch(`${subgruposBaseUrl}/${grupoId}`, { credentials: 'same-origin' });
            if (!resp.ok) throw new Error('Error cargando subgrupos');

            const subgrupos = await resp.json();
            subgrupos.forEach(sg => {
                const opt = document.createElement('option');
                opt.value = sg.id;
                opt.textContent = sg.descripcion;
                subgrupoSelect.appendChild(opt);
            });

            subgrupoSelect.disabled = subgrupos.length === 0;
        } catch (e) {
            console.error(e);
            alert('No se pudieron cargar los subgrupos.');
        }
    });
});
</script>
@stop
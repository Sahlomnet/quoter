@extends('adminlte::page')

@section('title', 'Catálogo de Productos')

@section('content')
<div class="container">
    <h3>Catálogo de Productos</h3>

    <div class="row rounded mb-3 py-3 bg-primary">
        <div class="col-md-4">
            <!-- <label>Fabricante</label> -->
            <select id="fabricante" class="form-control">
                <option value="">Fabricante</option>
                @foreach($marcas as $m)
                    <option value="{{ $m->id }}">{{ $m->descripcion }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <!-- <label>Grupo</label> -->
            <select id="grupo" class="form-control">
                <option value="">Grupo</option>
            </select>
        </div>
        <div class="col-md-4">
            <!-- <label>Subgrupo</label> -->
            <select id="subgrupo" class="form-control">
                <option value="">Subgrupo</option>
            </select>
        </div>
    </div>

    <div id="products-container" class="row">
        @csrf
    </div>
</div>
@stop

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const gruposBaseUrl = "{{ url('admin/productos/get-grupos') }}";
    const subgruposBaseUrl = "{{ url('admin/productos/get-subgrupos') }}";
    const productosBaseUrl = "{{ route('admin.productos.get-productos') }}";

    document.getElementById('fabricante').addEventListener('change', async (e) => {
        const marcaId = e.target.value;
        document.getElementById('grupo').innerHTML = '<option value="">Grupo</option>';
        document.getElementById('subgrupo').innerHTML = '<option value="">Subgrupo</option>';
        if (!marcaId) return;

        const resp = await fetch(`${gruposBaseUrl}/${marcaId}`);
        const data = await resp.json();

        data.forEach(g => {
            document.getElementById('grupo').innerHTML += `<option value="${g.id}">${g.descripcion}</option>`;
        });

        loadProducts();
    });

    document.getElementById('grupo').addEventListener('change', async (e) => {
        const grupoId = e.target.value;
        document.getElementById('subgrupo').innerHTML = '<option value="">Subgrupo</option>';
        if (!grupoId) { loadProducts(); return; }

        const resp = await fetch(`${subgruposBaseUrl}/${grupoId}`);
        const data = await resp.json();

        data.forEach(sg => {
            document.getElementById('subgrupo').innerHTML += `<option value="${sg.id}">${sg.descripcion}</option>`;
        });

        loadProducts();
    });

    document.getElementById('subgrupo').addEventListener('change', loadProducts);

    async function loadProducts() {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        try {
            const fabricante = document.getElementById('fabricante').value;
            const grupo = document.getElementById('grupo').value;
            const subgrupo = document.getElementById('subgrupo').value;

            const url = new URL(productosBaseUrl);

            if (fabricante) url.searchParams.append('manufacturer_id', fabricante);
            if (grupo) url.searchParams.append('group_id', grupo);
            if (subgrupo) url.searchParams.append('subgroup_id', subgrupo);

            const resp = await fetch(url, {
                method: "GET",
                headers: {
                    "X-CSRF-TOKEN": token,
                    "X-Requested-With": "XMLHttpRequest",
                },
            });

            const data = await resp.json();
            document.getElementById('products-container').innerHTML = data.html;

        } catch (error) {
            console.error("Error en loadProducts:", error);
        }
    }
});
</script>
@stop

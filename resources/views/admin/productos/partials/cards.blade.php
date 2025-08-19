@forelse($products as $p)
    <div class="col-md-4 col-sm-6 col-12 mb-3">
        <div class="card h-100">
            <img src="{{ $p->imagen_url ?: asset('img/noimage.png') }}" 
                class="card-img-top" 
                alt="{{ $p->descripcion }}"
                style="height:200px;object-fit:cover"
                onerror="this.onerror=null;this.src='{{ asset('img/noimage.png') }}';">

                     




            <div class="card-body d-flex flex-column">
                <small class="mb-3">
                    <strong>Código:</strong> {{ $p->clave_cva }} <br>
                    <strong>SKU:</strong> {{ $p->codigo_fabricante }}
                </small>
                <h6>{{ $p->descripcion }}</h6>

                @if ($p->precio_descuento)
                    <div class="d-flex justify-content-between">
                        <span class="text-start"><del class="text-muted">
                            MXN$ {{ number_format($p->precio, 2) }}
                        </del></span>
                        <span class="text-end">MXN$ {{ number_format($p->precio_descuento, 2) }}</span>
                    </div>
                @else
                    <div class="d-flex justify-content-between">
                        <span class="text-start"> </span>
                        <span class="text-end">MXN$ {{ number_format($p->precio, 2) }}</span>
                    </div>
                @endif
            </div>
            <div class="card-footer text-center">
                <div class="btn-group">
                    <button type="button" class="btn bg-primary">
                        <span>{{ $p->existencia_sucursal }}</span></br>
                        <span>Suc</span>
                    </button>
                    <button type="button" class="btn bg-primary">
                        <span>{{ $p->en_transito }}</span></br>
                        <span>Trans</span>
                    </button>
                    <button type="button" class="btn bg-primary">
                        <span>{{ $p->existencia_sucursal + $p->en_transito }}</span></br>
                        <span>Fut</span>
                    </button>
                    <button type="button" class="btn bg-primary">
                        <span>{{ $p->existencia_cd }}</span></br>
                        <span>CD</span>
                    </button>
                    <button type="button" class="btn bg-primary">
                        <i class="fas fa-plus"></i>
                        <span>Agregar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="col-12">
        <div class="alert alert-info">No se encontraron productos.</div>
    </div>
@endforelse

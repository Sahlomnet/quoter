@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <div class="card">
        <div id="header01" class="card-header">
            <div id="div_header01">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <a href="{{route('productos.create')}}" class="btn btn-primary flex-wrap">
                            <i class="fas fa-plus"></i>
                            Agregar Producto
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 text-right"></div>
                </div>

            </div>
        </div>
        <div class="card-body">
            <table id="table01" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
            <!-- <table class="table table-bordered table-hover"> -->
                <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Clave</th>
                        <th class="text-center">SKU /// UPC</th>
                        <th class="text-center">Imágen</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Precio Descuento</th>
                        <th class="text-center">Sucursal</th>
                        <th class="text-center">Tránsito</th>
                        <th class="text-center">CEDIS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td  class="text-center list-link"><a href="{{route('productos.show', $product->id)}}">{{ $product->id }}</a></td>
                            <td  class="text-center list-link"><a href="{{route('productos.show', $product->id)}}">{{ $product->clave_cva }}</a></td>
                            <td  class="text-center list-link"><a href="{{route('productos.show', $product->id)}}">{{ $product->codigo_fabricante }}{{ ' /// ' . $product->upc ?? '' }}</a></td>
                            <td  class="text-center list-link"><a href="{{route('productos.show', $product->id)}}"><img src="{{ $product->imagen_url }}"></a></td>
                            <td  class="text-center list-link"><a href="{{route('productos.show', $product->id)}}">{{ $product->descripcion }}</a></td>
                            <td  class="text-center list-link"><a href="{{route('productos.show', $product->id)}}">{{ '$ ' }}{{ number_format($product->precio, 2, '.', ',') }}</a></td>
                            <td  class="text-center list-link"><a href="{{route('productos.show', $product->id)}}">{{ '$ ' }}{{ number_format($product->precio_descuento, 2, '.', ',') }}</a></td>
                            <td  class="text-center list-link"><a href="{{route('productos.show', $product->id)}}">{{ $product->existencia_sucursal }}</a></td>
                            <td  class="text-center list-link"><a href="{{route('productos.show', $product->id)}}">{{ $product->en_transito }}</a></td>
                            <td  class="text-center list-link"><a href="{{route('productos.show', $product->id)}}">{{ $product->existencia_cd }}</a></td>
                            <!-- <td>
                                <a href="{{ route('productos.edit', $product) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('productos.destroy', $product) }}" method="POST" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Borrar</button>
                                </form>
                            </td> -->
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Clave</th>
                        <th class="text-center">SKU /// UPC</th>
                        <th class="text-center">Imágem</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Precio Descuento</th>
                        <th class="text-center">Sucursal</th>
                        <th class="text-center">Tránsito</th>
                        <th class="text-center">CEDIS</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
@stop
@section('css')
    <!-- dataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/1.13.4/css/dataTables.bootstrap5.min.css') }}">
    
    <!-- buttons -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/buttons/2.3.6/css/buttons.bootstrap5.min.css') }}">
    <style>
        .list-link{
            color: black;
            text-decoration: none;
        }
    </style>
@stop

@section('js')
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery-3.5.1.js') }}"></script>
    <!-- dataTables -->
    <script src="{{ asset('plugins/datatables/1.13.4/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/1.13.4/js/dataTables.bootstrap5.min.js') }}"></script>
    <!-- buttons -->
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugins/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var table = $('#table01').DataTable( {
                lengthChange: true,
                buttons:
                [
                    {
                        extend: 'copyHtml5',
                        text: '<i class="fas fa-copy"></i>',
                        titleAttr: 'Copiar',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'excelHtml5',
                        text:   '<i class="fas fa-file-excel"></i>',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'csvHtml5',
                        text:   '<i class="fas fa-file-csv"></i>',
                        titleAttr: 'Exportar a CSV',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'pdfHtml5',
                        text:   '<i class="fas fa-file-pdf"></i>',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'print',
                        text:   '<i class="fa fa-print"></i>',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'colvis',
                        text:   '<i class="fas fa-columns"></i>',
                        titleAttr: 'Columnas',
                        className: 'btn btn-secondary'
                    }
                ],
                "lengthMenu": [[-1, 10, 25, 100], ["Todos", 10, 25, 100]],
                "language":
                {
                    "search":       "Buscar",
                    "lengthMenu":   "Mostrar _MENU_ registros",
                    "info":         "Página _PAGE_ de _PAGES_",
                    "paginate":
                    {
                        "previous": "Anterior",
                        "next":     "Siguiente",
                        "first":    "Primero",
                        "last":     "Último"
                    }
                }
            } );
        
            table.buttons().container().appendTo( '#div_header01 .col-12:eq(1)' );
            // .col-6:eq(0)
        } );
    </script>
@stop
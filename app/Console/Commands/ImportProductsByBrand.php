<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use SimpleXMLElement;
use App\Models\Product;
use App\Models\Manufacturer;
use App\Models\Group;
use App\Models\Subgroup;

class ImportProductsByBrand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cva:import-products {brandId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importar productos de CVA por marca (ID o nombre) y guardarlos en la tabla products';

    private static function nullIfEmpty($value)
    {
        $trimmed = trim($value);
        return ($trimmed === '' || strtolower($trimmed) === 'sin descuento') ? null : $trimmed;
    }

    private static function toFloatOrNull($value)
    {
        $trimmed = trim($value);
        if ($trimmed === '' || strtolower($trimmed) === 'sin descuento') {
            return null;
        }
        return (float) $trimmed;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $brandId = $this->argument('brandId');

        // $url = "https://www.grupocva.com/catalogo_clientes_xml/lista_precios.xml?marca={$brandId}";
        $url = "http://www.grupocva.com/catalogo_clientes_xml/lista_precios.xml?cliente=23400&marca={$brandId}&porcentaje=30&subgpo=1&tc=1&MonedaPesos=1&tipo=1&depto=1&dt=1&dc=1&exist=4&promos=1&TipoProducto=1&trans=1&dimen=1&upc=1";

        // dd($url);

        $this->info("Importando productos para la marca: {$brandId}");
        
        $response = Http::get($url);

        // Guardar el XML crudo en storage para depuración
        Storage::put("debug/marca_{$brandId}.xml", $response->body());

        if (!$response->successful()) {
            $this->error("No se pudo obtener el XML de productos para la marca {$brandId}");
            return;
        }

        $xml = simplexml_load_string($response->body());

        if (!$xml || !isset($xml->item)) {
            $this->error("No se encontraron productos para la marca {$brandId}");
            return;
        }

        foreach ($xml->item as $item) {
            Product::updateOrCreate(
                ['clave_cva' => (string) $item->clave],
                [
                    'upc' => self::nullIfEmpty((string) $item->upc),
                    'esd' => strtolower((string) $item->EsProductoESD) === 'true',
                    'codigo_fabricante' => self::nullIfEmpty((string) $item->codigo_fabricante),
                    'descripcion' => (string) $item->descripcion,
                    'solucion' => (string) $item->solucion,
                    'group_id' => $this->findGroupId((string) $item->grupo),
                    'subgroup_id' => $this->findSubgroupId((string) $item->subgrupo),
                    'manufacturer_id' => $this->findManufacturerId((string) $item->marca),
                    'garantia' => self::nullIfEmpty((string) $item->garantia),
                    'clase' => self::nullIfEmpty((string) $item->clase),
                    'existencia_sucursal' => (int) $item->disponible ?: 0,
                    'en_transito' => (int) ($item->en_transito ?: 0),
                    'precio' => (float) $item->precio ?: 0,
                    'moneda' => (string) $item->moneda,
                    'ficha_tecnica' => self::nullIfEmpty((string) $item->ficha_tecnica),
                    'ficha_comercial' => self::nullIfEmpty((string) $item->ficha_comercial),
                    'imagen_url' => self::nullIfEmpty((string) $item->imagen),
                    'existencia_cd' => (int) $item->disponibleCD ?: 0,
                    'tipo_cambio' => (float) $item->tipocambio ?: 0,
                    'fecha_tipo_cambio' => self::nullIfEmpty((string) $item->fechaactualizatipoc),
                    'total_descuento' => self::nullIfEmpty((string) $item->TotalDescuento),
                    'moneda_descuento' => self::nullIfEmpty((string) $item->MonedaDescuento),
                    'precio_descuento' => self::toFloatOrNull($item->PrecioDescuento),
                    'moneda_precio_descuento' => self::nullIfEmpty((string) $item->MonedaPrecioDescuento),
                    'clave_promocion' => self::nullIfEmpty((string) $item->ClavePromocion),
                    'descripcion_promocion' => self::nullIfEmpty((string) $item->DescripcionPromocion),
                    'vencimiento_promocion' => self::nullIfEmpty((string) $item->VencimientoPromocion),
                    'disponible_en_promocion' => self::nullIfEmpty((string) $item->DisponibleEnPromocion),
                    'tipo_producto' => self::nullIfEmpty((string) $item->TipoProducto),
                    'id_departamento' => (int) $item->IdDepartamento ?: null,
                    'departamento' => self::nullIfEmpty((string) $item->Departamento),
                    'producto_paquete' => self::nullIfEmpty((string) $item->productopaquete),
                    'componentes' => self::nullIfEmpty((string) $item->componentes),
                    'dimensiones' => self::nullIfEmpty((string) $item->dimensiones),
                    'peso' => self::nullIfEmpty((string) $item->peso),
                ]
            );
        }

        $this->info("Importación de productos para la marca {$brandId} finalizada.");
    }

    private function findGroupId($clave)
    {
        return Group::where('clave', $clave)->value('id');
    }

    private function findSubgroupId($clave)
    {
        return Subgroup::where('clave', $clave)->value('id');
    }

    private function findManufacturerId($nombre)
    {
        return Manufacturer::where('nombre', $nombre)->value('id');
    }
}
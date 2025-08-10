<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'clave_cva',
        'upc',
        'esd',
        'codigo_fabricante',
        'descripcion',
        'solucion',
        'group_id',
        'subgroup_id',
        'manufacturer_id',
        'garantia',
        'clase',
        'existencia_sucursal',
        'en_transito',
        'precio',
        'moneda',
        'ficha_tecnica',
        'ficha_comercial',
        'imagen_url',
        'existencia_cd',
        'tipo_cambio',
        'fecha_tipo_cambio',
        'total_descuento',
        'moneda_descuento',
        'precio_descuento',
        'moneda_precio_descuento',
        'clave_promocion',
        'descripcion_promocion',
        'vencimiento_promocion',
        'disponible_en_promocion',
        'tipo_producto',
        'id_departamento',
        'departamento',
        'producto_paquete',
        'componentes',
        'dimensiones',
        'peso',
    ];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function subgroup()
    {
        return $this->belongsTo(Subgroup::class);
    }
}

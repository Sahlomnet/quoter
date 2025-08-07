<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'razon_social', 'nombre_corto', 'nombre_comercial', 'rfc', 'regimen_fiscal',
        'contact_name', 'email', 'phone',
        'calle', 'numero_exterior', 'numero_interior', 'colonia', 'ciudad',
        'municipio', 'codigo_postal', 'estado', 'pais', 'observaciones'
    ];

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}

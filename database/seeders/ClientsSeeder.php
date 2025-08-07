<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'razon_social' => 'ALBERGUE INFANTI LOS PINOS',
            'nombre_corto' => 'AIP',
            'nombre_comercial' => 'ALBERGUE INFANTI LOS PINOS AC',
            'rfc' => 'AIP871204MG0',
            'regimen_fiscal' => '(603) Personas Morales con Fines no Lucrativos',
            'email' => 'calidad@lospinos.com',
            'phone' => '+523335085459',
            'calle' => 'Calzada de los Fresnos',
            'numero_exterior' => '47',
            'colonia' => 'Ciudad Granja',
            'ciudad' => 'Zapopan',
            'municipio' => 'Zapopan',
            'codigo_postal' => '45010',
            'estado' => 'Jalisco',
            'pais' => 'México',
            'observaciones' => 'Albergue Infantil Los Pinos AC',
        ]);
    }
}

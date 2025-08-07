<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Manufacturer;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url = 'https://sahlom.com/cva/marcas2.xml';

        $response = Http::get($url);
        if (!$response->successful()) {
            $this->command->error('No se pudo obtener el XML de marcas.');
            return;
        }

        $xml = simplexml_load_string($response->body());

        foreach ($xml->marca as $item) {
            Manufacturer::updateOrCreate(
                ['clave' => (int)$item->clave],
                ['descripcion' => (string)$item->descripcion]
            );
        }

        $this->command->info('Marcas cargadas exitosamente.');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Group;
use App\Models\Subgroup;

class GroupsAndSubgroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url = 'https://sahlom.com/cva/grupos2.xml';

        $response = Http::get($url);
        if (!$response->successful()) {
            $this->command->error('No se pudo obtener el XML de grupos.');
            return;
        }

        $xml = simplexml_load_string($response->body());

        foreach ($xml->grupo as $grupo) {
            $group = Group::updateOrCreate(
                ['clave' => (int)$grupo->clave],
                ['descripcion' => (string)$grupo->descripcion]
            );

            if (isset($grupo->SubGrupo1)) {
                foreach ($grupo->SubGrupo1->grupo1 as $grupo1) {
                    Subgroup::updateOrCreate(
                        ['clave' => (int)$grupo1->clave],
                        [
                            'descripcion' => (string)$grupo1->descripcion,
                            'group_id' => $group->id,
                        ]
                    );
                }
            }

        }
        $this->command->info('Grupos y subgrupos cargados exitosamente.');
    }
}

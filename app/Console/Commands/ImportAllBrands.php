<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Manufacturer;

class ImportAllBrands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cva:import-all-brands';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa productos para todas las marcas de forma secuencial';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $brands = Manufacturer::all();

        // dd($brands);

        foreach ($brands as $brand) {
            $this->info("Importando productos de la marca: {$brand->descripcion}");
            \Artisan::call('cva:import-products', ['brandId' => $brand->id]);
            $this->info("✅ Completado {$brand->descripcion}");
        }

        $this->info("✅ Importación de todas las marcas finalizada");
    }
}

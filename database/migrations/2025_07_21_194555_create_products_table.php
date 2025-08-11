<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * http://www.grupocva.com/catalogo_clientes_xml/lista_precios.xml?cliente=23400&marca=ACTECK&porcentaje=30&subgpo=1&tc=1&MonedaPesos=1&tipo=1&depto=1&dt=1&dc=1&exist=4&promos=1&TipoProducto=1&trans=1&dimen=1&upc=1
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('clave_cva')->unique(); //clave
            $table->string('upc')->nullable();
            $table->boolean('esd')->nullable(); // EsProductoESD
            $table->string('codigo_fabricante')->nullable(); //sku
            $table->string('descripcion')->nullable(); //descripcion
            $table->string('solucion')->nullable(); //solucion
        
            $table->foreignId('group_id')->nullable()->constrained()->nullOnDelete(); //grupo
            $table->foreignId('subgroup_id')->nullable()->constrained()->nullOnDelete(); //subgrupo
            $table->foreignId('manufacturer_id')->nullable()->constrained()->nullOnDelete(); //marca


            $table->string('garantia')->nullable(); //garantia
            $table->string('clase')->nullable(); //
            $table->integer('existencia_sucursal')->nullable(); //disponible
            $table->integer('en_transito')->nullable(); //en transito
            $table->decimal('precio', 10, 2)->nullable(); //precio
            $table->string('moneda')->nullable(); //moneda
            $table->text('ficha_tecnica')->nullable(); //ficha tecnica
            $table->text('ficha_comercial')->nullable(); //ficha comercial
            $table->string('imagen_url')->nullable(); //imagen
            $table->integer('existencia_cd')->nullable(); //disponibleCD
            $table->decimal('tipo_cambio', 10, 2)->nullable(); //tipocambio
            $table->timestamp('fecha_tipo_cambio')->nullable(); //fechaactualizatipoc
            $table->string('total_descuento')->nullable(); //TotalDescuento
            $table->string('moneda_descuento')->nullable(); //MonedaDescuento
            $table->decimal('precio_descuento', 10, 2)->nullable(); //PrecioDescuento decimal
            $table->string('moneda_precio_descuento')->nullable(); //MonedaPrecioDescuento
            $table->string('clave_promocion')->nullable(); //ClavePromocion
            $table->string('descripcion_promocion')->nullable(); //DescripcionPromocion
            $table->string('vencimiento_promocion')->nullable(); //VencimientoPromocion 
            $table->string('disponible_en_promocion')->nullable(); //DisponibleEnPromocion 
            $table->string('tipo_producto')->nullable(); //TipoProducto
            $table->integer('id_departamento')->nullable(); //IdDepartamento
            $table->string('departamento')->nullable(); //Departamento
            $table->string('producto_paquete')->nullable(); //ProductoPaquete
            $table->string('componentes')->nullable(); //componentes
            $table->string('dimensiones')->nullable(); //dimensiones (mts)
            $table->string('peso')->nullable(); //peso (kg)


        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

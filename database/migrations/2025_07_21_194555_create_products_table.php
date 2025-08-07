<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('clave_cva')->unique();
            $table->string('codigo_fabricante')->nullable();
            $table->string('descripcion');
        
            $table->foreignId('manufacturer_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('group_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('subgroup_id')->nullable()->constrained()->nullOnDelete();
        
            $table->decimal('precio', 10, 2);
            $table->integer('existencia_sucursal')->nullable();
            $table->integer('existencia_cd')->nullable();
            $table->integer('existencia_total')->nullable();
            $table->text('ficha_tecnica')->nullable();
            $table->text('ficha_comercial')->nullable();
            $table->string('imagen_url')->nullable();
            $table->string('garantia')->nullable();
            $table->string('tipo_producto')->nullable();
            $table->string('upc')->nullable();
            $table->string('dimensiones')->nullable();
            $table->string('peso')->nullable();
        
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

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
        Schema::create('productos', function (Blueprint $table) {

            $table->id();
            $table->string('nombre');
            $table->string('slug', 100)->unique();
            $table->string('descripcion');
            $table->date('fecha')->useCurrent(); /* Campo de tipo Texto y le incamos que use la fecha actual */
            $table->bigInteger('precio')->default('0'); /* campo tipo entero y valor '0' por defecto */
            $table->bigInteger('stock')->default('0');

            /* Declaracion de los campos como clave foraneas x relacion con otra tabla */
            $table->unsignedBigInteger('categoria_id');

            /* Definimos la  relacion con la tabla categoria y los campos relacionados*/
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

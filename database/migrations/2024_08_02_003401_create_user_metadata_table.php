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
        Schema::create('user_metadata', function (Blueprint $table) {
            $table->id();
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('edad', 10)->nullable();
            $table->string('direccion');
            $table->string('profesion');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('perfil_id');
            $table->foreign('perfil_id')->references('id')->on('perfil')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_metadata');
    }
};

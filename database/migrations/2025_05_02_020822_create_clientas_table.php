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
        Schema::create('clientas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_documento_id')->nullable()->references('id')->on('tipo_documentos');
            $table->bigInteger('numero_documento')->nullable();
            $table->string('apellido_nombre');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion')->nullable();
            $table->string('departamento_piso')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono_aux')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->boolean('estado')->nullable();
            $table->boolean('favorita')->nullable();
            $table->string('observacion')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientas');
    }
};

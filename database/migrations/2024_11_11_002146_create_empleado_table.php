<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->integer('idEmpleado')->primary();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('email')->nullable();
            $table->string('usuario')->nullable();
            $table->string('contrasena')->nullable();
            $table->integer('documento')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('peticionesEspeciales')->nullable();
            $table->tinyInteger('estado')->nullable();
            $table->integer('idRol')->nullable();
            $table->integer('idPuesto')->nullable();
            
            $table->foreign('idRol', 'empleado_ibfk_1')->references('idRol')->on('rol');
            $table->foreign('idPuesto', 'empleado_ibfk_2')->references('idPuesto')->on('puesto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
}

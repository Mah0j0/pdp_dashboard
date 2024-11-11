<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->integer('idCliente')->primary();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('email')->nullable();
            $table->integer('documento')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('peticionesEspeciales')->nullable();
            $table->tinyInteger('estado')->nullable();
            $table->integer('idPais')->nullable();
            
            $table->foreign('idPais', 'cliente_ibfk_1')->references('idPais')->on('pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}

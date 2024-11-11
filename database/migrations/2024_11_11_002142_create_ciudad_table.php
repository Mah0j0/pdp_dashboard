<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudad', function (Blueprint $table) {
            $table->integer('idCiudad')->primary();
            $table->string('nombre')->nullable();
            $table->tinyInteger('estado')->nullable();
            $table->integer('idPais')->nullable();
            
            $table->foreign('idPais', 'ciudad_ibfk_1')->references('idPais')->on('pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudad');
    }
}

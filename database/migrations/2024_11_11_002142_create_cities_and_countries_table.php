<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesAndCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //de pais
        Schema::create('countries', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name')->nullable();
            $table->tinyInteger('status')->default(1);
        });
        //de ciudad
        Schema::create('cities', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name')->nullable();
            $table->tinyInteger('status')->nullable();
            
            //un pais tiene muchas ciudades
            $table->foreignId('country_id')->constrained(
                table: 'countries', indexName: 'city_country_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
        Schema::dropIfExists('countries');
    }
}

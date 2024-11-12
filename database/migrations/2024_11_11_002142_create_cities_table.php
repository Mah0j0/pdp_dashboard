<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
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
        Schema::create('cities', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name')->nullable();
            $table->tinyInteger('status')->nullable();
            
            //fk para la tabla cities
            $table->foreignId('city_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
    }
}

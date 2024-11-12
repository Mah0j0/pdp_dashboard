<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationServiceTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservation_service', function (Blueprint $table) {
            $table->id();
            
            //fk of reservations table
            $table->foreignId('reservation_id')
                  ->constrained()
                  ->onDelete('cascade');
                  
            $table->foreignId('service_id')
                  ->constrained()
                  ->onDelete('cascade');
                  
            // Evita duplicados de la misma combinación reservation_id y service_id
            // $table->unique(['reservation_id', 'service_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_service');
    }
};

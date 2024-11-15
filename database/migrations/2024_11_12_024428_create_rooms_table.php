<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->integer('status')->default(1);

            //fk for room_types table
            $table->foreignId('room_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            //fk for statuses table
            $table->foreignId('room_status_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

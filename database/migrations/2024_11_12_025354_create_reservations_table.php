<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->dateTime('checkin_date');
            $table->dateTime('checkout_date');
            $table->integer('adults_number');
            $table->integer('children_number');
            $table->decimal('price', 10, 2);
            $table->decimal('cancellation_fine', 10, 2)->default(0);
            $table->decimal('discount', 10, 2)->default(0);
            $table->integer('status')->default(1);

            //fk for payment_methods table
            $table->foreignId('payment_method_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            //fk for employees table
            $table->foreignId('employee_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            //fk for clients table
            $table->foreignId('client_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            //fk for rooms table
            $table->foreignId('room_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};

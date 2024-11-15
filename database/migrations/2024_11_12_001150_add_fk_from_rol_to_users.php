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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->nullable()->constrained(
            table: 'roles', indexName: 'users_role_id');
            $table->foreignId('employee_id')->nullable()->constrained(
                table: 'employees', indexName: 'users_employee_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_role_id');
            $table->drop('role_id');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_employee_id');
            $table->drop('employee_id');
        });
    }
};

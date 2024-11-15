<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Agregar esta línea

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'Administrador', 'status' => 1],
            ['name' => 'Gerencia', 'status' => 1],
            ['name' => 'Recepcion', 'status' => 1],
            ['name' => 'Contador', 'status' => 1],
            ['name' => 'Marketing', 'status' => 1],
        ]);
    }
}

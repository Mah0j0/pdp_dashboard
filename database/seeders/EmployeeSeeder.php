<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('es_ES');
        
        $nombres = [
            'Ana', 'Carlos', 'María', 'Juan', 'Patricia', 
            'Luis', 'Sandra', 'Miguel', 'Laura', 'José',
            'Carmen', 'Daniel', 'Paula', 'Roberto', 'Diana'
        ];
        
        $apellidos = [
            'García', 'Martínez', 'López', 'Rodríguez', 'Sánchez',
            'Fernández', 'Torres', 'Ramírez', 'Flores', 'Vargas',
            'Ruiz', 'Morales', 'Castro', 'Jiménez', 'Cruz'
        ];
        
        // Roles actualizados según el WorkRoleSeeder
        $roles = [
            1 => 'Marketing',
            2 => 'Recepción',
            3 => 'Contabilidad',
            4 => 'Administración'
        ];

        for ($i = 0; $i < 15; $i++) {
            $rolId = array_rand($roles);
            
            DB::table('employees')->insert([
                'name' => $nombres[$i],
                'lastname' => $apellidos[$i],
                'email' => strtolower($nombres[$i]) . '.' . strtolower($apellidos[$i]) . '@hotel.com',
                'document' => $faker->unique()->numberBetween(10000000, 99999999),
                'phone_number' => $faker->numberBetween(900000000, 999999999),
                'status' => 1,
                'work_role_id' => $rolId,
            ]);
        }
    }
}

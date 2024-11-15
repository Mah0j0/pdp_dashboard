<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            // Argentina
            ['name' => 'Buenos Aires', 'status' => 1, 'country_id' => 1],
            ['name' => 'Córdoba', 'status' => 1, 'country_id' => 1],
            ['name' => 'Rosario', 'status' => 1, 'country_id' => 1],
            
            // Brasil
            ['name' => 'São Paulo', 'status' => 1, 'country_id' => 2],
            ['name' => 'Rio de Janeiro', 'status' => 1, 'country_id' => 2],
            ['name' => 'Salvador', 'status' => 1, 'country_id' => 2],
            
            // Chile
            ['name' => 'Santiago', 'status' => 1, 'country_id' => 3],
            ['name' => 'Valparaíso', 'status' => 1, 'country_id' => 3],
            
            // Colombia
            ['name' => 'Bogotá', 'status' => 1, 'country_id' => 4],
            ['name' => 'Medellín', 'status' => 1, 'country_id' => 4],
            ['name' => 'Cartagena', 'status' => 1, 'country_id' => 4],
            
            // México
            ['name' => 'Ciudad de México', 'status' => 1, 'country_id' => 5],
            ['name' => 'Cancún', 'status' => 1, 'country_id' => 5],
            ['name' => 'Guadalajara', 'status' => 1, 'country_id' => 5],
            
            // Perú
            ['name' => 'Lima', 'status' => 1, 'country_id' => 6],
            ['name' => 'Cusco', 'status' => 1, 'country_id' => 6],
            
            // España
            ['name' => 'Madrid', 'status' => 1, 'country_id' => 7],
            ['name' => 'Barcelona', 'status' => 1, 'country_id' => 7],
            
            // Estados Unidos
            ['name' => 'Nueva York', 'status' => 1, 'country_id' => 8],
            ['name' => 'Los Ángeles', 'status' => 1, 'country_id' => 8],
            
            // Canadá
            ['name' => 'Toronto', 'status' => 1, 'country_id' => 9],
            ['name' => 'Vancouver', 'status' => 1, 'country_id' => 9],
            
            // Uruguay
            ['name' => 'Montevideo', 'status' => 1, 'country_id' => 10],
            ['name' => 'Punta del Este', 'status' => 1, 'country_id' => 10]
        ];

        DB::table('cities')->insert($cities);
    }
}
